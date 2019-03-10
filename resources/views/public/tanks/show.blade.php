@extends('layouts.app')

@section('title','ShowTanks')
@section('content')
<div class="row">
    @if( $tank->cover )
    <div class="col-3">
        <img class="img-fluid" src="http://laravel-mbt.test/storage/{{ $tank->cover }}" alt="">
    </div>
    @endif
    <div class="col">
        <h2>{{ $tank->name }}</h2>
        <h4>{{ $tank->nation }}</h4>
        <h4>{{ $tank->ammo}}</h4>
        <h4>Event (participated) : {{ $tank->event->nameEvent }}</h4>
        <p>{{ $tank->description }}</p>

        @include('public.tanks.partials.buttons')
    </div>
</div>

<button type="button" class="btn btn-secondary" data-toggle="tooltip" title="Prueba de prueba" data-placement="right" data-template=@include('public.tanks.partials.toolTemplate')>Extreme Tool Tip
</button>

<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="right" data-content=@include('public.tanks.partials.toolTemplate')>
    Popover Derecha
</button>


@endsection

@push('scripts')
<script src="{{ mix('/js/toolTip/tool.js') }}" defer></script>
@endpush 