<?php

namespace App\Mail;

use App\Models\Volunteer;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VolunteerAcceptedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $volunteer;

    public function __construct(Volunteer $volunteer)
    {
        $this->volunteer = $volunteer;
    }

    public function build()
    {
        return $this->subject('Your Volunteer Application Has Been Accepted')
            ->markdown('emails.volunteer.accepted');
    }
}
