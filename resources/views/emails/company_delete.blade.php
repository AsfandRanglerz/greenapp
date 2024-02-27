@component('mail::message')
<h1 style="margin:0 auto 10px;width:145px">Dear Admin</h1>

<p>I hope this message finds you well. We regret to inform you that the administration has requested the deletion of account associated with the name {{ $message['name'] }}.We kindly request your attention regarding this matter.</p>




<p>If you wish to proceed with the account deletion, please click on the "Accept" button below.</p>
<p style="width: 160px;margin:auto">
    <a href="{{ url('admin-delete-company', ['id' => $message['id']]) }}"  style="padding:5px 10px;color:#fff;background:#12df12;border-radius:5px;text-decoration:none">Accept</a>
</p>
<p>However, if you prefer to retain your account, kindly select the "Reject" button instead.</p>
<p style="width: 160px;margin:auto"><a href="{{url('admin-login')}}" style="padding:5px 10px;color:rgb(253, 253, 253);background:rgb(18, 223, 18);border-radius:5px;text-decoration:none">Reject</a></p>

<p><strong>Your Email:</strong> {{ $message['email'] }}</p>

Thank you for your understanding and cooperation.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
