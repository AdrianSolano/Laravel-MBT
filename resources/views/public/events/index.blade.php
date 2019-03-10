@extends('layouts.app')

@section('title', 'Sobre MBT!')

@section('content')
<h1>Lista de eventos</h1>

@include('public.tanks.partials.bread')

@forelse($event as $event)
<div class="card-deck">
    <div class="card">
        <div class="card-header">
            {{ $event->nameEvent }}
        </div>
        <div class="card-body">
            <h5 class="card-subtitle ">Year: {{ $event->year }}</h5>
            <p class="card-text">{{ str_limit($event->description, 100) }}</p>
            <p class="card-text">

                <form action="/event/{{ $event->id }}" method="post" class="mr-2 float-right">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm">Delete Event</button>
                </form>
                <a href="/event/{{ $event->slug }}" class="btn btn-primary btn-sm mr-2 float-right">More Info</a>
                <a href="/event/{{ $event->id }}/edit" class="btn btn-warning btn-sm mr-2     float-right">Edit</a>

        </div>
    </div>
</div>

@empty

<p>No hay Eventos</p>

@endforelse


@endsection 