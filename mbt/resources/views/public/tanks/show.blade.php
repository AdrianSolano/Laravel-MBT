@extends('public.layout')

@section('title','ShowTanks')
@section('content')
 <h2>{{ $tank->name }}</h2>
 <h4>{{ $tank->nation }}</h4>
 <p>{{ $tank->description }}</p>
@endsection
