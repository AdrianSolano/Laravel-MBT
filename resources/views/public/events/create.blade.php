@extends('layouts.app')

@section('title','CreateEvents')

@section('content')
<h1>Create Events</h1>
<form id="form" action="/event" method="post">

  @csrf

  @include('public.events.partials.form')

  <button type="submit" class="btn btn-primary">Guardar
    <span id="spinner" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
  </button>
</form>

@endsection

@push('scripts')
<script src="{{ mix('/js/validaciones/validacionAjax.js') }}" defer></script>
@endpush