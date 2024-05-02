<?php

namespace App\Livewire;

use App\Livewire\HandlesErrors;
use App\Models\ReportRequest;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\Attributes\Validate;

class ReportRequestForm extends Component
{
    use HandlesErrors;

    #[Validate('required|min:3|max:100')]
    public $full_name;
    #[Validate('required|min:10|max:100')]
    public $email;
    #[Validate('required')]
    public $intention;

    #[Layout('layouts.landing')] 
    #[Title("Request Report")]
    public function render()
    {
        return view('livewire.report-request-form');
    }

    public function submit()
    {
        $this->validate();
        $validatedData = $this->only('full_name', 'email', 'intention');

        $this->handleErrors(function () use ($validatedData) {
            ReportRequest::create($validatedData);
            $this->dispatch('notification', 'Your report request has been submitted successfully!', 'Request Successful', 'success');
            $this->reset();
        });
    }
}
