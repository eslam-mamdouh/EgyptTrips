@component('mail::message')


{!! $data['reply'] !!}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
