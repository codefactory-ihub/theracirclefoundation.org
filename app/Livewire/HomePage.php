<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Component;

class HomePage extends Component
{
    #[Layout('layouts.landing')] 
    #[Title("Home")]
    public function render()
    {
        return view('livewire.home-page');
    }
}
