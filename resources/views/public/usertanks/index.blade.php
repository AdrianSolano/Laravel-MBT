@extends('layouts.app')

@section('title', 'About MBT!')

@section('content')
<h1>{{ $user->name }}'s Tank List</h1>

    <div class="d-flex justify-content-center">
        {{ $tanks->links() }}
    </div>

    @forelse($tank as $tank)
    <div class="card mb-2">
        <div class="card-header">
            {{ $tank->name }}
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $tank->user->name }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $tank->ammo}}</h6>
            <p class="card-text">{{ str_limit($tank->description, 300) }}</p>


            @auth
            <a href="/tanks/{{ $tank->id }}/edit" class="btn btn-warning btn-sm mr-2 float-right">Edit</a>
            <form action="/tanks/{{ $tank->id }}" method="post" class="mr-2 float-right">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger btn-sm">Delete tank</button>
            </form>
            @endauth
            <a href="/tanks/{{ $tank->slug }}" class="btn btn-primary btn-sm mr-2 float-right">More Info</a>
      </div>
    </div>
    @empty
      <p>No hay libros</p>
    @endforelse

    <div class="d-flex justify-content-center">
        {{ $tanks->links() }}
    </div>
@endsection
