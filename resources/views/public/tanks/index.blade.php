@extends('public.layout')

@section('title', 'Sobre MBT!')

@section('content')
<h1>Lista de tanques</h1>

    <div class="d-flex justify-content-center">
        {{ $tanks->links() }}
    </div>

    @forelse($tanks as $tank)
    <div class="card mb-2">
        <div class="card-header">
            {{ $tank->name }}
        </div>
        <div class="card-body">
            <h6 class="card-subtitle mbf-2 text-muted">{{ $tank->nation}}</h6>
            <p class="card-text">{{ str_limit($tank->description, 300) }}</p>

            <form action="/tanks/{{ $tank->id }}" method="post" class="mr-2 float-right">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger btn-sm">Delete Tank</button>
            </form>
            <a href="/tanks/{{ $tank->slug }}" class="btn btn-primary btn-sm mr-2 float-right">More Info</a>
            <a href="/tanks/{{ $tank->id }}/edit" class="btn btn-warning btn-sm mr-2     float-right">Edit</a>

      </div>
    </div>
    @empty
      <p>No hay libros</p>
    @endforelse

    <div class="d-flex justify-content-center">
        {{ $tanks->links() }}
    </div>
@endsection
