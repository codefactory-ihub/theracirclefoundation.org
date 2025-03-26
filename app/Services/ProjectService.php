<?php

namespace App\Services;

use App\Models\Project;
use App\Models\ProjectsMedia;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ProjectService
{
    public function create(array $data)
    {
        // Begin a database transaction
        DB::beginTransaction();

        try {
            // Extract files and other project data
            $files = $data['files'] ?? [];
            unset($data['files']);

            // Create the project
            $project = Project::create($data);

            // Process each file and save media records
            foreach ($files as $file) {
                if ($file['media_source'] === 'Cloud') {
                    // Upload file to Cloudinary
                    $upload = Cloudinary::upload($file['media_file']->getRealPath(), [
                        'folder' => 'projects'
                    ]);

                    // Get the public URL and public ID from Cloudinary response
                    $publicUrl = $upload->getSecurePath();
                    $publicId = $upload->getPublicId();

                    // Save media record
                    $project->media()->create([
                        'source' => 'cloudinary',
                        'media_type' => $file['media_file']->getMimeType(),
                        'public_url' => $publicUrl,
                        'public_id' => $publicId,
                    ]);
                } elseif ($file['media_source'] === 'Youtube') {
                    // For YouTube, just save the URL directly
                    $project->media()->create([
                        'source' => 'youtube',
                        'media_type' => 'video/youtube', // assuming video type for YouTube links
                        'public_url' => $file['media_file'],
                        'public_id' => null,
                    ]);
                }
            }

            // Commit transaction after successful project and media creation
            DB::commit();
            return $project;
        } catch (\Exception $e) {
            // Rollback transaction
            DB::rollBack();

            // Delete any uploaded Cloudinary files
            foreach ($files as $file) {
                if ($file['media_source'] === 'Cloud' && isset($file['public_id'])) {
                    Cloudinary::destroy($file['public_id']);
                }
            }

            // Optionally, rethrow or handle the exception
            throw $e;
        }
    }

    public function update(string $projectKey, array $data)
    {
        DB::beginTransaction();
        try {
            $project = $this->getProjectByProjectkey($projectKey);

            // Extract files and other project data
            $files = $data['files'] ?? [];
            unset($data['files']);

            // First check if name is being changed and if it's unique
            if (isset($data['name']) && $data['name'] !== $project->name) {
                $exists = Project::where('name', $data['name'])
                    ->where('project_key', '!=', $projectKey)
                    ->exists();

                if ($exists) {
                    throw new \Exception('A project with this name already exists.');
                }
            }

            $project->update($data);

            foreach ($files as $file) {
                if ($file['media_source'] === 'Cloud') {
                    $upload = Cloudinary::upload($file['media_file']->getRealPath(), [
                        'folder' => 'projects'
                    ]);

                    $project->media()->create([
                        'source' => 'cloudinary',
                        'media_type' => $file['media_file']->getMimeType(),
                        'public_url' => $upload->getSecurePath(),
                        'public_id' => $upload->getPublicId(),
                    ]);
                } elseif ($file['media_source'] === 'Youtube') {
                    $project->media()->create([
                        'source' => 'youtube',
                        'media_type' => 'video',
                        'public_url' => $file['media_file'],
                        'public_id' => null,
                    ]);
                }
            }

            DB::commit();
            return $project;
        } catch (\Exception $e) {
            DB::rollBack();

            // Delete any uploaded Cloudinary files
            if (isset($upload)) {
                Cloudinary::destroy($upload->getPublicId());
            }

            throw $e;
        }
    }

    public function delete(string $projectKey)
    {
        // Retrieve the project and its media files
        $project = $this->getProjectByProjectkey($projectKey)->with('media')->first();

        if (!$project) {
            throw new NotFoundHttpException("Project not found.");
        }

        // Begin a database transaction to ensure atomicity
        DB::beginTransaction();

        try {
            // Loop through each media file associated with the project
            if ($project->media) {
                foreach ($project->media as $media) {
                    // If the source is Cloudinary, delete the file from Cloudinary
                    if ($media->source === 'cloudinary' && $media->public_id) {
                        Cloudinary::destroy($media->public_id);
                    }

                    // Delete the media record from the database
                    $media->delete();
                }
            }

            // Delete the project record itself
            $project->delete();

            // Commit transaction if all deletions succeed
            DB::commit();
        } catch (\Exception $e) {
            // Rollback transaction if any deletion fails
            DB::rollBack();
            throw $e;
        }
    }

    public function deleteProjectMedia(string $public_id)
    {
        // Retrieve the project and its media files
        $projectMedia = ProjectsMedia::where('public_id', $public_id)->get();

        if (!$projectMedia) {
            throw new NotFoundHttpException("Project Media not found.");
        }

        // Begin a database transaction to ensure atomicity
        DB::beginTransaction();

        try {
            // Loop through each media file associated with the project
            if ($projectMedia) {
                foreach ($projectMedia as $media) {
                    // If the source is Cloudinary, delete the file from Cloudinary
                    if ($media->source === 'cloudinary' && $media->public_id) {
                        Cloudinary::destroy($media->public_id);
                    }

                    // Delete the media record from the database
                    $media->delete();
                }
            }

            // Commit transaction if all deletions succeed
            DB::commit();
        } catch (\Exception $e) {
            // Rollback transaction if any deletion fails
            DB::rollBack();
            throw $e;
        }
    }

    public function getProjectByProjectkey(string $projectKey)
    {
        return Project::with('media')->where('project_key', $projectKey)->firstOrFail();
    }

    public function all()
    {
        return Project::all();
    }

    public function paginate(int $perPage = 15)
    {
        return Project::with('firstImage')->paginate($perPage);
    }

    public function getProjectById(int $id)
    {
        return Project::with('media')->findOrFail($id);
    }

    public function search(string $sortDirection, string $search, string $sortColumn, $perPage = 3)
    {
        return Project::search($search)
            ->orderBy($sortColumn, $sortDirection)
            ->paginate($perPage, ['*'], 'page');
    }
}
