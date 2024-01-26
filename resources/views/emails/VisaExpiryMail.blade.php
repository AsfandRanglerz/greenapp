@component('mail::message')

{{-- Introduction --}}
# Visa Expiration Reminder

Dear [{{$data['user']->name}}],

We hope this message finds you well. We would like to remind you that the expiration date of your visa is approaching. It's important to take necessary actions to ensure a smooth continuation of your activities.

@component('mail::panel', ['style' => 'background-color: #f8fafc; border: 1px solid #d1d5da; border-radius: 4px; padding: 15px;'])
**Visa Expiration Date:** [{{ $data['document']->expiry_date}}]
@endcomponent



{{-- Additional Information --}}
If you have already renewed your visa or have any questions, please feel free to [contact us](mailto:no-reply@ranglerzclients.pw).

{{-- Closing --}}
Thanks for choosing {{ config('app.name') }}!

{{-- Footer --}}
@component('mail::footer', ['style' => 'text-align: center;'])
© {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
@endcomponent

@endcomponent
