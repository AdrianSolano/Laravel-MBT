@extends('layouts.app')

@section('title','ShowTanks')
@section('content')
 <h2>{{ $tank->name }}</h2>
 <h4>{{ $tank->nation }}</h4>
 <p>{{ $tank->description }}</p>

 
<button type="button" class="btn btn-secondary"
        data-toggle="tooltip" title="Prueba de prueba"
        data-placement="right"
        data-template=@include('public.tanks.partials.toolTemplate')>Extreme Tool Tip
</button>

<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="right" data-content=@include('public.tanks.partials.toolTemplate')>
    Popover Derecha
</button>


@endsection

@push('scripts')
    <script src="{{ mix('/js/toolTip/tool.js') }}" defer ></script>
@endpush
