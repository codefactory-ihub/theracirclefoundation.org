<?php

namespace App\Livewire\Admin;

use App\Livewire\HandlesErrors;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateProject extends Component
{
    use HandlesErrors;

    #[Validate('required')]
    public string $name;
    #[Validate('required')]
    public string $date;
    #[Validate('required')]
    public string $short_description;
    #[Validate('required')]
    public string $description;
    #[Validate('required')]
    public string $media_source;
    #[Validate('required')]
    public string $media_file;
    public function render()
    {
        return view('livewire.admin.create-project');
    }
    
    public function saveForm()
    {
        $this->validate();
    }
}
