@component('mail::message')
<h1 style="margin:0 auto 10px;width:100px">Inquiry</h1>

<p>Admin responded on your Inquiry</p>


<p style="width: 160px;margin:auto"><a href="{{route('user.inquiry.index')}}" style="padding:5px 10px;color:rgb(253, 253, 253);background:rgb(18, 223, 18);border-radius:5px;text-decoration:none">Go To Inquiry</a></p>


Thanks,<br>
{{ config('app.name') }}
@endcomponent
