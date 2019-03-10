@component('mail::message')
# New Tank: {{ $tank->title }}

{{ $tank->description }}
@component('mail::button', ['url' => url('/tanks/'. $tank->slug)])
tank Info
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
