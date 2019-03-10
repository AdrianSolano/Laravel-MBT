@extends('layouts.app')

@section('title', 'Index MBT!')

@section('content')
<h1>Root</h1>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/24/Leopard_2_A5_der_Bundeswehr.jpg/1024px-Leopard_2_A5_der_Bundeswehr.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h5><i><b>Leopard2A5</b></i></h5>
                <p>...</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/30/Challenger_2_Main_Battle_Tank_patrolling_outside_Basra%2C_Iraq_MOD_45148325.jpg/1024px-Challenger_2_Main_Battle_Tank_patrolling_outside_Basra%2C_Iraq_MOD_45148325.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h5><i><b>Challenger 2</b></i></h5>
                <p>...</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/T-90_Bhisma_cropped.jpg/1024px-T-90_Bhisma_cropped.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h5><i><b>T-90Bhisma</b></i></h5>
                <p>...</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
@endsection 