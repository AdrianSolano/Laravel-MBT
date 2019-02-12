@extends('layouts.app')

@section('title','EditTanks')
@section('content')
<form action="/tanks/{{ $tank->id }}" method="post">

    @csrf
    @method('patch')


    @include('public.tanks.partials.form')

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection
