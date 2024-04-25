<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Component;

class VolunteerPage extends Component
{
    #[Layout('layouts.landing')] 
    #[Title("Volunteer")]
    public function render()
    {
        return view('livewire.volunteer-page');
    }
}
