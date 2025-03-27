<!-- resources/views/emails/volunteer/accepted.blade.php -->
@component('mail::message')
    # Congratulations, {{ $volunteer->name }}!

    Your volunteer application has been accepted.

    We're excited to have you join our team!

    @component('mail::button', ['url' => route('volunteer.dashboard')])
        View Your Dashboard
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
