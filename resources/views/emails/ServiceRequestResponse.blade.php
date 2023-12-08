@component('mail::message')
<h1 style="margin:0 auto 10px;width:100px">Service Response</h1>

<p>Greetings! Your request has been actioned and resolved. We are closing the request now. If there is anything else you need help with, feel free to reach out to us via inquiry or services request. Thank you, Greenapp Support Team</p>


<p style="width: 160px;margin:auto"><a href="{{route('user.get-services.index')}}" style="padding:5px 10px;color:rgb(253, 253, 253);background:rgb(18, 223, 18);border-radius:5px;text-decoration:none">Go To Services</a></p>


Thanks,<br>
{{ config('app.name') }}
@endcomponent
