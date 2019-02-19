@extends('layouts.app')

@section('title', 'Ammo MBT!')

@section('content')
<h1>Example of type of ammo</h1>
<div class="offset-3 col-6 pt-4 pb-4">
    
    <div class="card-group">
  <div class="card text-white bg-secondary mb-3">
    <img class="card-img-top" src="https://wiki.warthunder.com/images/3/33/Icon_AP_Shot.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">AP</h5>
      <p class="card-text">Armor Piercing</p>
    </div>
  </div>
  <div class="card text-white bg-secondary mb-3">
    <img class="card-img-top" src="https://wiki.warthunder.com/images/8/8e/Icon_HE_Shell.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">HE</h5>
      <p class="card-text">High Explosive</p>
    </div>
  </div>
  <div class="card text-white bg-secondary mb-3">
    <img class="card-img-top" src="https://wiki.warthunder.com/images/3/34/Icon_HEAT_Shell.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">HEAT</h5>
      <p class="card-text">High Explosive Anti-Tank</p>
    </div>
  </div>
</div>  
    </div>
</div>
@endsection
