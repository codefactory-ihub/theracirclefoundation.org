<?php

namespace App\Livewire\Admin;

use App\Livewire\HandlesErrors;
use App\Services\ProjectService;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateProject extends Component
{
    use HandlesErrors, WithFileUploads;

    public string $projectKey;
    public string $title = "Update Project";

    #[Validate('required|min:3|max:100')]
    public string $name;

    #[Validate('required|date')]
    public string $project_date;

    #[Validate('required|min:10|max:255')]
    public string $short_description;

    #[Validate('required|min:20')]
    public string $description;

    #[Validate('required|boolean')]
    public bool $archived;

    #[Validate('required|in:Cloud,Youtube')]
    public string $media_source = 'Cloud';

    #[Validate('sometimes')]
    public $media_file;

    public array $files = [];
    public array $new_files = [];

    public function mount(ProjectService $projectService)
    {
        $project = $projectService->getProjectByProjectKey($this->projectKey);

        $this->name = $project->name;
        $this->short_description = $project->short_description;
        $this->description = $project->description;
        $this->archived = $project->archived;

        // Safely handle date conversion
        $this->project_date = is_string($project->project_date)
            ? $project->project_date
            : $project->project_date->toDateString();

        // Initialize files array
        $this->files = $project->media->map(function ($media) {
            return [
                'id' => $media->public_id,
                'media_source' => $media->source,
                'media_file' => $media->public_url,
                'is_new' => false
            ];
        })->toArray();
    }

    public function addFile()
    {
        $this->validate([
            'media_source' => 'required|in:Cloud,Youtube',
            'media_file' => $this->getMediaValidationRules(),
        ]);

        $fileId = uniqid();

        $this->files[] = [
            'id' => $fileId,
            'media_source' => $this->media_source,
            'media_file' => $this->media_file,
            'is_new' => true
        ];

        $this->new_files[] = [
            'id' => $fileId,
            'media_source' => $this->media_source,
            'media_file' => $this->media_file
        ];

        $this->reset(['media_file', 'media_source']);
    }

    public function deleteFile($fileId, ProjectService $projectService)
    {
        try {
            // Find the file to determine if it's existing or new
            $fileToDelete = collect($this->files)->firstWhere('id', $fileId);

            if ($fileToDelete && !$fileToDelete['is_new']) {
                $projectService->deleteProjectMedia($fileId);
            }

            // Remove from both arrays
            $this->files = array_filter($this->files, fn($file) => $file['id'] !== $fileId);
            $this->new_files = array_filter($this->new_files, fn($file) => $file['id'] !== $fileId);

        } catch (\Exception $e) {
            $this->handleError($e);
        }
    }

    public function saveForm(ProjectService $projectService)
    {
        try {
            if ($this->media_file) {
                $this->addFile();
            }

            $validated = $this->validate();
            $validated['files'] = $this->new_files;

            $projectService->update($this->projectKey, $validated);

            session()->flash('success', 'Project updated successfully');
            return redirect()->route('admin.projects');

        } catch (\Exception $e) {
            $this->handleError($e);
        }
    }

    public function render()
    {
        return view('livewire.admin.create-project');
    }

    protected function getMediaValidationRules(): array
    {
        return $this->media_source === 'Youtube'
            ? ['required', 'url', 'regex:/^(https?\:\/\/)?(www\.youtube\.com|youtu\.?be)\/.+$/']
            : ['required', 'file', 'mimes:jpg,jpeg,png,gif,mp4,mov,avi', 'max:2048'];
    }
}
