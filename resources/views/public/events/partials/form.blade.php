<div class="form-row">
<div class="form-group col-md-3">
    <label for="nameEvent">Event name</label>
    <input type="text" class="form-control {{ $errors->has('nameEvent')?"is-invalid":"" }}" id="nameEvent" name="nameEvent" placeholder="Introduce the event name" value="{{ isset($event)?$event->nameEvent:old('nameEvent') }}" required>
    @if( $errors->has('nameEvent'))
    <div class="invalid-feedback">
        {{ $errors->first('nameEvent') }}
    </div>
    @endif
</div>
<div class="form-group col-md-3">
    <label for="year">Year</label>
    <input type="text" class="form-control {{ $errors->has('year')?"is-invalid":"" }}" id="year" name="year" placeholder="Introduce the event year" value="{{ isset($event)?$event->year:old('year') }}"required>
    @if( $errors->has('year'))
    <div class="invalid-feedback">
        {{ $errors->first('year') }}
    </div>
    @endif
</div>

<div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control {{ $errors->has('description')?"is-invalid":"" }}" id="description" name="description" rows="3" placeholder="Event Description" required>{{ isset($event)?$event->description:old('description') }}</textarea>
    @if( $errors->has('description'))
    <div class="invalid-feedback">
        {{ $errors->first('description') }}
    </div>
    @endif
</div>
</div>