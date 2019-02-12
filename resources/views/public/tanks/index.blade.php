@extends('layouts.app')

@section('title', 'Sobre MBT!')

@section('content')
<h1>Lista de tanques</h1>

    @forelse($tank as $tank)
  <div class="card-deck">
    <div class="card">
        <div class="card-header">
            {{ $tank->name }}
        </div>

        <div class="card-body" >
            <h5 class="card-subtitle ">Nation: {{ $tank->nation }}</h5>
            <h6 class="card-subtitle ">Crew: {{ $tank->crew }}</h6>
            <h6 class="card-subtitle ">HP: {{ $tank->hp }}</h7>
            <p class="card-text">{{ str_limit($tank->description, 100) }}</p>
            <p class="card-text">

            <form action="/tanks/{{ $tank->id }}" method="post" class="mr-2 float-right">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger btn-sm">Delete Tank</button>
            </form>
            <a href="/tanks/{{ $tank->slug }}" class="btn btn-primary btn-sm mr-2 float-right">More Info</a>
            <a href="/tanks/{{ $tank->id }}/edit" class="btn btn-warning btn-sm mr-2     float-right">Edit</a>

      </div>
    </div>
  </div>
    @empty
      <p>No hay tanques</p>
    @endforelse


@endsection
