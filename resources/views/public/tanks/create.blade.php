@extends('layouts.app')

@section('title','CreateTanks')

@section('content')
<h1>Create Tanks</h1>
<form id="formulario" action="/tanks" method="post">

  @csrf

  @include('public.tanks.partials.form')

  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

<div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
</div>

@endsection
@push('scripts')
    <script src="{{ mix('/js/validaciones/validacionTanque.js') }}" defer ></script>
    <script src="{{ mix('/js/createAjax/crear.js') }}" defer></script>
@endpush
