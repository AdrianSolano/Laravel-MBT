@extends('layouts.app')

@section('title','EditTanks')
@section('content')
<form data-tank="{{ $tank->id }}" id="formulario" action="/tanks/{{ $tank->id }}" method="post" novalidate>

    @csrf
    @method('patch')


    @include('public.tanks.partials.form')

    <button id="botonSubmit" data-toggle="modal" data-target="#modal" data-target="#modalError" type="submit" class="btn btn-primary">Update tank</button>
</form>
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Loading...</h5>
            </div>
            <div class="modal-body">
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalError" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog bg-danger" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title text-white" id="modalLabel">There is an error in the form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>

@endsection
@push('scripts')
<script src="{{ mix('/js/edit/edit.js') }}" defer></script>
@endpush