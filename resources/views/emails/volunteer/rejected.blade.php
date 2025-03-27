<!-- resources/views/emails/volunteer/rejected.blade.php -->
@component('mail::message')
    # Application Update

    Dear {{ $volunteer->name }},

    Thank you for your interest in volunteering with us. After careful consideration, we're unable to accept your application at this time.

    We appreciate your time and effort and encourage you to apply again in the future.

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
