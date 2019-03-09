@extends('layouts.app')

@section('title','CreateEvents')

@section('content')
<h1>Create Events</h1>
<form action="/events" method="post">

  @csrf

  @include('public.events.partials.form')

  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection
