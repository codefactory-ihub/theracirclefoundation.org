<?php
// app/Mail/VolunteerRejectedMail.php
namespace App\Mail;

use App\Models\Volunteer;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VolunteerRejectedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $volunteer;

    public function __construct(Volunteer $volunteer)
    {
        $this->volunteer = $volunteer;
    }

    public function build()
    {
        return $this->subject('Your Volunteer Application Status')
            ->markdown('emails.volunteer.rejected');
    }
}
