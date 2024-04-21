<?php

namespace App\Livewire\Admin;

use App\Services\ProjectService;
use Livewire\Component;

class ProjectList extends Component
{
    public $projects;
    public function mount(ProjectService $projectService)
    {
        $this->projects = $projectService->all();
    }

    public function render()
    {
        return view('livewire.admin.project-list');
    }
}
