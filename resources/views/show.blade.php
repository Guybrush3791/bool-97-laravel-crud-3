@extends('layouts.main-layout')

@section('title')
    SHOW
@endsection

@section('content')

    <div class="text-center my-5">
        <h2 class="py-2">{{ $water -> name }}</h2>
        <img src="{{ $water -> picture }}" >
        <div class="container mx-auto row justify-content-between py-3">
            <span class="col bg-dark text-light mx-3 rounded">
                Price: {{ $water -> price / 100 }}$
            </span>
            <span class="col bg-dark text-light mx-3 rounded">
                Size: {{ $water -> centilitres / 100 }}L
            </span>
        </div>
    </div>


@endsection
