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

    #[Validate('required|min:3|max:100')]
    public string $name;
    
    #[Validate('required')]
    public string $project_date;
    
    #[Validate('required')]
    public string $short_description;
    
    #[Validate('required')]
    public string $description;
    
    // Archived status - default to false (Visible)
    #[Validate('required|boolean')]
    public bool $archived = false;
    
    public string $media_source = 'Cloud';
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

        $res = $this->validate([
            'media_source' => 'required',
            'media_file' => $file_validation,
        ]);

        array_push($this->files, [
            'id' => uuid_create(),
            'media_source' => $this->media_source,
            'media_file' => $this->media_file,
        ]);

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
        if ($this->media_file) {
            $this->addFile();
        }

        $form = $this->validate();

        $form['creator_id'] = Auth::id();
        
        // Convert archived to boolean if it comes as string
        if (isset($form['archived']) && is_string($form['archived'])) {
            $form['archived'] = (bool)$form['archived'];
        }

        $projectService->create($form);

        return $this->redirect('/admin/projects/');
    }
}