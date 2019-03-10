@extends('layouts.app')

@section('title', 'Sobre MBT!')

@section('content')
<h1>Lista de tanques</h1>


@include('public.tanks.partials.bread')

@if(session('message'))
<div class="alert alert-primary" role="alert">
    {{ session('message') }}
</div>
@endif

@forelse($tank as $tank)
<div class="card-deck">
    <div class="card">
        <div class="card-header">
            {{ $tank->name }}
        </div>
        <div class="card-body">

            <div class="col-2">
                <img class="img-fluid" src="{{ $tank->cover }}" alt="">
            </div>

            <h5 class="card-subtitle ">Nation: {{ $tank->nation }}</h5>
            <h6 class="card-subtitle ">Crew: {{ $tank->crew }}</h6>
            <h6 class="card-subtitle ">HP:( {{ $tank->hp }} )</h6>
            <p class="card-text">{{ str_limit($tank->description, 100) }}</p>
            <p class="card-text">

                @include('public.tanks.partials.buttons')
                <a href="/tanks/{{ $tank->slug }}" class="btn btn-primary btn-sm mr-2 float-right">More Info</a>


        </div>
    </div>
</div>

@empty

<p>No hay tanques</p>

@endforelse


@endsection 