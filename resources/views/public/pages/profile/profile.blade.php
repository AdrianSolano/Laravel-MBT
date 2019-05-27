@extends('layouts.app')

@section('title', 'Profiel ')

@section('content')
<h1>Perfil</h1>
<!-- Boton que muestre un alert con los datos del perfil -->
<ul class="nav nav-pills" id="myTabPill" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="myProfile" data-toggle="pill" role="tab" aria-controls="profile" aria-selected="true">Mis datos</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="myTanks" data-toggle="pill" role="tab" aria-controls="tanks" aria-selected="false">Mis tanques</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="myFriends" data-toggle="pill" role="tab" aria-controls="friends" aria-selected="false">Mis amigos</a>
    </li>
</ul>
<div class="tab-content" id="tabContentPill">
    <div class="tab-pane fade show active" id="contenido" role="tabpanel" aria-labelledby="profile-tab"> @include('public.pages.profile.myProfile') </div>
</div>

@endsection

@push('scripts')
<script src="{{ mix('/js/show/profile.js') }}" defer></script>
@endpush