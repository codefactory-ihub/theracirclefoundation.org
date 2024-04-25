<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ProjectsPage extends Component
{
    #[Layout('layouts.landing')] 
    #[Title("Projects")]
    public function render()
    {
        return view('livewire.projects-page');
    }
}
