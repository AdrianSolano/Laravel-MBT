@extends('layouts.app')

@section('title','CreateTanks')

@section('content')
<h1>Create Tanks</h1>
<form id="formulario" action="/tanks" method="post">

    @csrf

    @include('public.tanks.partials.form')

    <button type="submit" data-toggle="modal" data-target="#modal" class="btn btn-primary">Guardar</button>
</form>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Loading...</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

@endsection
@push('scripts')
<script src="{{ mix('/js/validaciones/validacionTanque.js') }}" defer></script>
<script src="{{ mix('/js/createAjax/crear.js') }}" defer></script>
@endpush 