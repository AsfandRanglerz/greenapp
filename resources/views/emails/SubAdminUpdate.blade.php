@component('mail::message')
<h3 style="margin:0 auto 10px;width:145px">Password Updation</h3>

<p>Dear, {{$message['name']}} Your Account password has been Updated Successfully By Admin,You can now log in with the following credentials:</p>

<p><strong>Email:</strong> {{ $message['email'] }}</p>
<p><strong>Password:</strong> {{ $message['password'] }}</p>

<p style="width: 160px;margin:auto"><a href="{{url('admin-login')}}" style="padding:5px 10px;color:rgb(253, 253, 253);background:rgb(18, 223, 18);border-radius:5px;text-decoration:none">Click here to Login </a></p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
