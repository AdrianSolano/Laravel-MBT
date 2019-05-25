@extends('layouts.app')

@section('title','CreateEvents')

@section('content')
<h1>Create Events</h1>
<form id="form" name="form" action="#" method="post" novalidate>

  @csrf

  @include('public.events.partials.form')

  <button type="submit" class="btn btn-primary">Guardar
    <span id="spinner" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
  </button>
</form>

<div class="eventData" id="eventData">

</div>

@endsection

@push('scripts')
<script src="{{ mix('/js/validaciones/validacionAjax.js') }}" defer></script>
@endpush