@extends('public.layout')

@section('title','CreateTanks')

@section('content')
<h1>Create Tanks</h1>
<form action="/tanks" method="post">

  @csrf

  @include('public.tanks.partials.form')

  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection
