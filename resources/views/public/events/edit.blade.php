@extends('layouts.app')

@section('title','EditEvents')
@section('content')
<form action="/event/{{ $event->id }}" method="post">

    @csrf
    @method('patch')


    @include('public.events.partials.form')

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection
