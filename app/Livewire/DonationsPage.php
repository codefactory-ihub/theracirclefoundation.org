<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Component;

class DonationsPage extends Component
{
    #[Layout('layouts.landing')] 
    #[Title("Donate")]
    public function render()
    {
        return view('livewire.donations-page');
    }
}
