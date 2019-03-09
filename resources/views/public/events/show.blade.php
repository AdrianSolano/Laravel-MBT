@extends('layouts.app')

@section('title','ShowEvents')
@section('content')
 <h2>{{ $event->name }}</h2>
 <h4>{{ $event->nation }}</h4>
 <p>{{ $event->description }}</p>


@endsection

@push('scripts')
    <script src="{{ mix('/js/toolTip/tool.js') }}" defer ></script>
@endpush
