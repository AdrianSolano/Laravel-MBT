<div class="form-row">
<div class="form-group col-md-3">
    <label for="name">Name</label>
    <input type="text" class="form-control {{ $errors->has('name')?"is-invalid":"" }}" id="name" name="name" placeholder="Introduce the tank name" value="{{ isset($tank)?$tank->name:old('name') }}" required>
    @if( $errors->has('name'))
    <div class="invalid-feedback">
        {{ $errors->first('name') }}
    </div>
    @endif
</div>
<div class="form-group col-md-3">
    <label for="nation">Nation</label>
    <input type="text" class="form-control {{ $errors->has('nation')?"is-invalid":"" }}" id="nation" name="nation" placeholder="Introduce the tank nation" value="{{ isset($tank)?$tank->nation:old('nation') }}"required>
    @if( $errors->has('nation'))
    <div class="invalid-feedback">
        {{ $errors->first('nation') }}
    </div>
    @endif
</div>
<div class="form-group col-md-3">
    <label for="crew">Crew</label>
    <input type="text" class="form-control {{ $errors->has('crew')?"is-invalid":"" }}" id="crew" name="crew" placeholder="Introduce the tank crew" value="{{ isset($tank)?$tank->crew:old('crew') }}"required>
    @if( $errors->has('crew'))
    <div class="invalid-feedback">
        {{ $errors->first('crew') }}
    </div>
    @endif
</div>
</div>
<div class="form-row">
<div class="form-group col-md-4">
    <label for="hp">Horsepower</label>
    <input type="text" class="form-control {{ $errors->has('hp')?"is-invalid":"" }}" id="hp" name="hp" placeholder="Introduce the tank hp" value="{{ isset($tank)?$tank->hp:old('hp') }}"required>
    @if( $errors->has('hp'))
    <div class="invalid-feedback">
        {{ $errors->first('hp') }}
    </div>
    @endif
</div>

<div class="form-group col-md-4">
<label for="hp">Ammo</label>
<div class="input-group">

     <input type="text" class="form-control {{ $errors->has('ammo')?"is-invalid":"" }}" id="ammo" name="ammo" placeholder="Introduce the tank ammo" value="{{ isset($tank)?$tank->ammo:old('ammo') }}"required>
    
    <div class="input-group-append">
        <button type="button" class="btn btn-outline-primary" href="#">New Ammo</button>
        <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="/ammo">Example of Ammo</a>
        </div>
    </div>
</div>
    @if( $errors->has('ammo'))
    <div class="invalid-feedback">
        {{ $errors->first('ammo') }}
    </div>
    @endif
</div>

</div>
<div class="form-row">
<div class="form-group col-md-3">
    <label for="type">Type of tank</label>
    <input type="text" class="form-control {{ $errors->has('type')?"is-invalid":"" }}" id="type" name="type" placeholder="Introduce the tank type" value="{{ isset($tank)?$tank->type:old('type') }}"required>
    @if( $errors->has('type'))
    <div class="invalid-feedback">
        {{ $errors->first('type') }}
    </div>
    @endif
</div>

<div class="form-group col-md-3">
    <label for="mainweapon">Main Weapon</label>
    <input type="text" class="form-control {{ $errors->has('mainweapon')?"is-invalid":"" }}" id="mainweapon" name="mainweapon" placeholder="Tank main weapon" value="{{ isset($tank)?$tank->mainweapon:old('mainweapon') }}"required>
    @if( $errors->has('mainweapon'))
    <div class="invalid-feedback">
        {{ $errors->first('mainweapon') }}
    </div>
    @endif
</div>

<div class="form-group col-md-3">
    <label for="secondaryweapon">Secondary Weapon</label>
    <input type="text" class="form-control {{ $errors->has('secondaryweapon')?"is-invalid":"" }}" id="secondaryweapon" name="secondaryweapon" placeholder="Tank secondary weapon" value="{{ isset($tank)?$tank->secondaryweapon:old('secondaryweapon') }}"required>
    @if( $errors->has('secondaryweapon'))
    <div class="invalid-feedback">
        {{ $errors->first('secondaryweapon') }}
    </div>
    @endif
</div>
</div>



<div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control {{ $errors->has('description')?"is-invalid":"" }}" id="description" name="description" rows="3" placeholder="Tank Description" required>{{ isset($tank)?$tank->description:old('description') }}</textarea>
    @if( $errors->has('description'))
    <div class="invalid-feedback">
        {{ $errors->first('description') }}
    </div>
    @endif
</div>
