@forelse($tanks as $tank)
<div data-eliminar="{{ $tank->id }}" class="card-deck">
    <div class="card">
        <div class="card-header">
            <h3>{{ $tank->name }}</h3>
        </div>
        <div class="card-body">
            <h4>{{ $tank->nation }}</h4>
            <h4>{{ $tank->ammo}}</h4>
            <h4>Event: {{ $tank->event->nameEvent }}</h4>
            <p>{{ $tank->description }}</p>

            @include('public.tanks.partials.buttons')
            <button id="show" data-accion='show' data-tank="{{ $tank->id }}" class="btn btn-primary btn-sm mr-2 float-right">More Info</button>
        </div>
    </div>
</div>

@empty

<p>No hay tanques</p>

@endforelse
@push('scripts')
<script src="{{ mix('/js/deleteAjax/delete.js') }}" defer></script>
<script src="{{ mix('/js/show/show.js') }}" defer></script>
<script src="{{ mix('/js/search/search.js') }}" defer></script>
@endpush