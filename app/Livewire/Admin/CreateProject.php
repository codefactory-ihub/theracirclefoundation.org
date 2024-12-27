<?php

namespace App\Livewire\Admin;

use App\Livewire\HandlesErrors;
use App\Services\ProjectService;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateProject extends Component
{
    use HandlesErrors;
    use WithFileUploads;

    // protected ProjectService $projectService ;

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
    public string $media_source = 'cloudinary';
    public $media_file;

    #[Validate('required')]
    public array $files = [];
    public function render()
    {
        return view('livewire.admin.create-project');
    }

    public function addFile()
    {
        $file_validation = strtolower($this->media_source) === 'youtube'
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


        // $this->media_source = 'cloudinary';
        $this->media_file = '';
    }

    public function deleteFile($fileId)
    {
        $this->files = array_filter($this->files, function ($file) use ($fileId) {
            return $file['id'] !== $fileId;
        });
    }



    public function saveForm(ProjectService $projectService)
    {
        if ($this->media_file)
            $this->addFile();

        $form = $this->validate();

        $form['creator_id'] = Auth::id();
        // dd($form);

        $projectService->create($form);

        return $this->redirect('/admin/projects/');
    }
}
