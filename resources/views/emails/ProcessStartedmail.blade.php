@component('mail::message')
Dear, {{$data['employee_name']}}
<br>
Your {{$data['request_name']}} <span style="color: rgb(175, 10, 10)">({{$data['request_type']}})</span> process has been started.
<br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
