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
    use HandlesErrors;
    use WithFileUploads;
    public string $projectKey;

    // public function __construct(string $projectKey)
    // {
    //     $this->projectKey = $projectKey;
    // }
    public string $title = "Update Project";

    // public function __construct(ProjectService $projectService){
    //     $this->projectService = $projectService;
    // }

    #[Validate('required|min:3|max:100')]
    public string $name;
    #[Validate('required')]
    public string $project_date;
    #[Validate('required')]
    public string $short_description;
    #[Validate('required')]
    public string $description;
    public string $media_source = 'Cloud';
    public $media_file;

    #[Validate('required')]
    public array $files = [];
    public array $new_files = [];
    public function render(ProjectService $projectService)
    {
        $project = $projectService->find($this->projectKey)->with('media')->firstOrFail();
        $this->name = $project->name;
        $this->short_description = $project->short_description;
        $this->description = $project->description;
        $this->project_date = $project->project_date;

        foreach ($project->media as $key => $value) {
            array_push($this->files, [
                'id' => $value->public_id,
                'media_source' => $value->source,
                'media_file' => $value->public_url,
            ]);
        }

        // dd($this->files);
        return view('livewire.admin.create-project');
    }

    public function addFile()
    {
        $file_validation = $this->media_source === 'Youtube'
            ? 'required|url|regex:/^(https?\:\/\/)?(www\.youtube\.com|youtu\.?be)\/.+$/'
            : 'required'; // Max 2048 KB = 2 MB

        // $file_validation = '';

        $res = $this->validate([
            'media_source' => 'required',
            'media_file' => $file_validation,
        ]);

        // dd($res);

        array_push($this->files, [
            'id' => uuid_create(),
            'media_source' => $this->media_source,
            'media_file' => $this->media_file,
        ]);
        array_push($this->new_files, [
            'id' => uuid_create(),
            'media_source' => $this->media_source,
            'media_file' => $this->media_file,
        ]);


        // $this->media_source = 'Cloud';
        $this->media_file = '';
    }

    public function deleteFile($fileId, ProjectService $projectService)
    {
        $this->files = array_filter($this->files, function ($file) use ($fileId, $projectService) {
            $result = $file['id'] !== $fileId;

            if (!$result) {
                $projectService->deleteProjectMedia($fileId);
            }

            return $result;
        });
        $this->new_files = array_filter($this->new_files, function ($file) use ($fileId) {
            return $file['id'] !== $fileId;
        });
    }



    public function saveForm(ProjectService $projectService)
    {
        if ($this->media_file)
            $this->addFile();

        $form = $this->validate();

        // $form['creator_id'] = Auth::id();
        $form['files'] = $this->new_files;
        // dd($form);

        $projectService->update($this->projectKey,$form);

        return $this->redirect('/admin/projects/');
    }
}
