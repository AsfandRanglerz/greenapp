@component('mail::message')

<h1 style="margin:0 auto 10px;width:145px">Forget Password</h1>



You are receiving this email because we received a password reset request for your account.

<h2 style="margin: 15px auto;width:65px">{{ $data['otp'] }}</h2>

This password reset OTP will expire in 60 minutes.

If you did not request a password reset, no further action is required.


Thanks,<br>

{{ config('app.name') }}

@endcomponent

