<?php

namespace App\Livewire;

use App\Services\ProjectService;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ProjectsPage extends Component
{
    #[Layout('layouts.landing')]
    #[Title("Projects")]
    public function render(ProjectService $projectService)
    {
        $projects = $projectService->paginate();

        return view('livewire.projects-page', compact('projects'));
    }
}
