<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ContactPage extends Component
{
    #[Layout('layouts.landing')] 
    #[Title("Contact")]
    public function render()
    {
        return view('livewire.contact-page');
    }
}
