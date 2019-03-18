@extends('layouts.app')

@section('title','CreateTanks')

@section('content')
<h1>Create Tanks</h1>
<form id="formulario" action="/tanks" method="post">

  @csrf

  @include('public.tanks.partials.form')

  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection
@push('scripts')
    <script src="{{ mix('/js/validaciones/validacionTanque.js') }}" defer ></script>
@endpush
