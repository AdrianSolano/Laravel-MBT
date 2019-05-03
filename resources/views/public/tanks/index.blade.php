@extends('layouts.app')

@section('title', 'Sobre MBT!')

@section('content')
<h1>Lista de tanques</h1>


@include('public.tanks.partials.bread')

@if(session('message'))
<div class="alert alert-primary" role="alert">
    {{ session('message') }}
</div>
@endif

<form id="searchForm">
    <div class="form-group">

        <label for="busqueda">Buscar</label>
        <input id="busqueda" class="form-control" name="busqueda" type="text">

        <label for="selectBusqueda">Filtro</label>
        <select id="selectBusqueda" class="form-control" name="selectBusqueda">
            <option value="#">-----</option>
            <option value="Nation">Nation</option>
            <option value="Crew">Crew</option>
        </select>

    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkBox" id="checkBox1" value="option1">
        <label class="form-check-label" for="checkBox1">Ammo > 100</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="checkBox2" value="option2">
        <label class="form-check-label" for="checkBox2">Ammo < 30</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="checkBox3" value="option3">
        <label class="form-check-label" for="checkBox3">Ammo < 10</label>
    </div>
    <div class="form-group">
    <button id="botonBuscar" class="btn btn-primary" type="submit">Buscar
        <span id="spinner" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
    </button>
</div>

</form>

<div id="mostrarBusqueda">

</div>

<div id="alert" class="alert alert-success alert-dismissible fade hide" role="alert">
    <strong>You deleted a tank</strong>
</div>

@forelse($tank as $tank)
<div data-eliminar="{{ $tank->id }}" class="card-deck">
    <div class="card">
        <div class="card-header">
            {{ $tank->name }}
        </div>
        <div class="card-body">

            <div class="col-2">
                <img class="img-fluid" src="{{ $tank->cover }}" alt="">
            </div>

            <h5 class="card-subtitle ">Nation: {{ $tank->nation }}</h5>
            <h6 class="card-subtitle ">Crew: {{ $tank->crew }}</h6>
            <h6 class="card-subtitle ">HP:( {{ $tank->hp }} )</h6>
            <p class="card-text">{{ str_limit($tank->description, 100) }}</p>
            <p class="card-text">

                @include('public.tanks.partials.buttons')
                <button id="show" data-accion='show' data-tank="{{ $tank->id }}" class="btn btn-primary btn-sm mr-2 float-right">More Info</button>


        </div>
    </div>
</div>

@empty

<p>No hay tanques</p>

@endforelse

<div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                You are going to eliminate a tank. Are you sure?
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formDeletus" data-accion="deletus" action="" method="post">
                    @csrf
                    @method('delete')
                    <button id="deletus" type="submit" data-tank="" data-dismiss="modal" aria-label="Close" class="btn btn-danger btn-sm mr-2 float-right">Yes</button>
                    <button type="submit" data-dismiss="modal" aria-label="Close" class="btn btn-primary btn-sm mr-2 float-right">
                        No
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalCarga" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
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

<div class="modal fade" id="modalShow" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                Tanque
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="datos" class="modal-body">

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
<script src="{{ mix('/js/deleteAjax/delete.js') }}" defer></script>
<script src="{{ mix('/js/show/show.js') }}" defer></script>
<script src="{{ mix('/js/search/search.js') }}" defer></script>
@endpush