@component('mail::message')
# Mail from {{$name}}
{{$subject}}.<br>
{{$message}}.<br>

@component('mail::button', ['url' => 'mailto:{{$email}}'])
Respond to Note
@endcomponent

Thanks,<br>
{{$name}}.<br>
{{$email}}.<br>
{{ config('app.name') }}
@endcomponent
