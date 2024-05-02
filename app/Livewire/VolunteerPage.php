<?php

namespace App\Livewire;

use App\Services\VolunteerService;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\Attributes\Validate;

class VolunteerPage extends Component
{

    #[Validate('required|min:3|max:100')]
    public string $fullName;
    #[Validate('required|min:10|max:100')]
    public string $emailAddress;
    #[Validate('required|numeric|between:16,75')]
    public int $age;
    #[Validate('required|min:10|max:17')]
    public string $phoneNumber;
    #[Validate('required|min:10|max:200')]
    public string $reason;

    #[Layout('layouts.landing')]
    #[Title("Volunteer")]
    public function render()
    {
        return view('livewire.volunteer-page');
    }

    public function createVolunteer(VolunteerService $volunteerService)
    {
        $this->validate();
        $data = $this->only('fullName', 'emailAddress', 'age', 'phoneNumber', 'reason');

        try {
            $volunteerService->create($data);
            $this->dispatch('notification', 'Your have successfully applied to be a volunteer.', 'Application Successful', 'success');
            // $this->reset('fullName', 'emailAddress', 'age', 'phoneNumber', 'reason');
            $this->reset();
        } catch (\Throwable $th) {
            $this->dispatch('notification', $th->getMessage(), 'Something went wrong', 'danger');
        }
    }
}
