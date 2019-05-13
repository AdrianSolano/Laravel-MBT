@forelse($tank as $tank)
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
        </div>
    </div>
</div>

@empty

<p>No hay tanques</p>

@endforelse