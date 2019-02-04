<!-- $table->increments('id');
$table->string('name');
$table->string('nation');
$table->tinyInteger('crew');
$table->mediumInteger('hp');
$table->smallInteger('ammo');
$table->text('type');
$table->string('mainweapon');
$table->string('secondaryweapon');
$table->longText('description');
$table->timestamps(); -->

<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control {{ $errors->has('name')?"is-invalid":"" }}" id="name" name="name" placeholder="Introduce the tank name" value="{{ isset($tank)?$tank->name:old('name') }}" required>
    @if( $errors->has('name'))
    <div class="invalid-feedback">
        {{ $errors->first('name') }}
    </div>
    @endif
</div>
<div class="form-group">
    <label for="nation">Nation</label>
    <input type="text" class="form-control {{ $errors->has('nation')?"is-invalid":"" }}" id="nation" name="nation" placeholder="Introduce the tank nation" value="{{ isset($tank)?$tank->nation:old('nation') }}"required>
    @if( $errors->has('nation'))
    <div class="invalid-feedback">
        {{ $errors->first('nation') }}
    </div>
    @endif
</div>
<div class="form-group">
    <label for="crew">Crew</label>
    <input type="text" class="form-control {{ $errors->has('crew')?"is-invalid":"" }}" id="crew" name="crew" placeholder="Introduce the tank crew" value="{{ isset($tank)?$tank->crew:old('crew') }}"required>
    @if( $errors->has('crew'))
    <div class="invalid-feedback">
        {{ $errors->first('crew') }}
    </div>
    @endif
</div>

<div class="form-group">
    <label for="hp">Horsepower</label>
    <input type="text" class="form-control {{ $errors->has('hp')?"is-invalid":"" }}" id="hp" name="hp" placeholder="Introduce the tank hp" value="{{ isset($tank)?$tank->hp:old('hp') }}"required>
    @if( $errors->has('hp'))
    <div class="invalid-feedback">
        {{ $errors->first('hp') }}
    </div>
    @endif
</div>

<div class="form-group">
    <label for="ammo">Amount of ammo</label>
    <input type="text" class="form-control {{ $errors->has('ammo')?"is-invalid":"" }}" id="ammo" name="ammo" placeholder="Introduce the tank ammo" value="{{ isset($tank)?$tank->ammo:old('ammo') }}"required>
    @if( $errors->has('ammo'))
    <div class="invalid-feedback">
        {{ $errors->first('ammo') }}
    </div>
    @endif
</div>

<div class="form-group">
    <label for="type">Type of tank</label>
    <input type="text" class="form-control {{ $errors->has('type')?"is-invalid":"" }}" id="type" name="type" placeholder="Introduce the tank type" value="{{ isset($tank)?$tank->type:old('type') }}"required>
    @if( $errors->has('type'))
    <div class="invalid-feedback">
        {{ $errors->first('type') }}
    </div>
    @endif
</div>

<div class="form-group">
    <label for="mainweapon">Main Weapon</label>
    <input type="text" class="form-control {{ $errors->has('mainweapon')?"is-invalid":"" }}" id="mainweapon" name="mainweapon" placeholder="Introduce the tank mainweapon" value="{{ isset($tank)?$tank->mainweapon:old('mainweapon') }}"required>
    @if( $errors->has('mainweapon'))
    <div class="invalid-feedback">
        {{ $errors->first('mainweapon') }}
    </div>
    @endif
</div>

<div class="form-group">
    <label for="secondaryweapon">Secondary Weapon</label>
    <input type="text" class="form-control {{ $errors->has('secondaryweapon')?"is-invalid":"" }}" id="secondaryweapon" name="secondaryweapon" placeholder="Introduce the tank secondaryweapon" value="{{ isset($tank)?$tank->secondaryweapon:old('secondaryweapon') }}"required>
    @if( $errors->has('secondaryweapon'))
    <div class="invalid-feedback">
        {{ $errors->first('secondaryweapon') }}
    </div>
    @endif
</div>


<div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control {{ $errors->has('description')?"is-invalid":"" }}" id="description" name="description" rows="10" placeholder="Tank Description" required>{{ isset($tank)?$tank->description:old('description') }}</textarea>
    @if( $errors->has('description'))
    <div class="invalid-feedback">
        {{ $errors->first('description') }}
    </div>
    @endif
</div>
