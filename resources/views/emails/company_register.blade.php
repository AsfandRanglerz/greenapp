@component('mail::message')
{{-- <img src="{{ asset('public/admin/assets/img/logo.png')}}" alt="ZNJ Logo" style="max-width: 17%; left:50%; margin-bottom: 23px;"> --}}


    <h1>Company Registration</h1>

    <h1 style=" left:30%; margin-bottom: 23px;">Dear {{ $data['name'] }},</h1>

    Thank you for registering your company with us. We have received the following information:



    <strong style="left:46%; margin-bottom: 10px;font-size:25px;">Email: {{ $data['email'] }}</strong>



    We will review your registration.

    Thank you,<br>

    {{ config('app.name') }}




@endcomponent
