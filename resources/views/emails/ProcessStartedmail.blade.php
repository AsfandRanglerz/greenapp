@component('mail::message')
Dear, {{$data['employee_name']}}
<br>
Your {{$data['request_name']}} process has been started.
<br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
