<?php

namespace App\Livewire;

use App\Models\Donation;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\Attributes\Validate;

class DonationsPage extends Component
{
    use HandlesErrors;

    #[Validate('required|min_digits:3')]
    public int $amount = 2000;
    #[Validate('required_if:anonymous,false|min:10')]
    public string $name = '';
    #[Validate('required_if:anonymous,false|email|min:10')]
    public string $email = '';
    #[Validate('required_if:anonymous,false|min:10|max:17')]
    public string $phone_number = '';
    #[Validate('required_if:anonymous,false|min:4|max:255')]
    public string $notes = '';
    public string $payment = 'flutterwave';
    #[Validate('boolean')]
    public bool $anonymous = false;
    public string $payment_reference;
    // #[Validate('accepted')]
    // public bool $terms = false;
    #[Layout('layouts.landing')]
    #[Title("Donate")]
    public function render()
    {
        return view('livewire.donations-page');
    }
    
    public function validateForm()
    {
        $this->validate();
        $this->payment_reference = uniqid();

        return true;
    }

    public function donate()
    {
        $this->validate();
        $donation = $this->only('name', 'email', 'phone_number', 'amount', 'notes', 'payment_reference');

        $this->handleErrors(function () use ($donation) {
            Donation::create($donation);
            $this->dispatch('notification', 'Thank you for your donation!', 'Thank you', 'success');
            $this->reset();
        });
        // $this->redirect('/posts');
    }
}
