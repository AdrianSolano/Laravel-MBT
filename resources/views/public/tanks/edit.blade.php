@extends('layouts.app')

@section('title','EditTanks')
@section('content')
<form data-tank="{{ $tank->id }}" id="formulario" action="/tanks/{{ $tank->id }}" method="post" novalidate>

    @csrf
    @method('patch')


    @include('public.tanks.partials.form')

    <button id="botonSubmit" type="submit" class="btn btn-primary">Update tank</button>
</form>

@endsection
@push('scripts')
    <script src="{{ mix('/js/edit/edit.js') }}" defer ></script>
@endpush