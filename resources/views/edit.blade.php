@extends('layouts.main-layout')

@section('title')
    EDIT
@endsection

@section('content')

    <div class="container mx-auto text-center my-5">
        <h1 class="py-2">EDIT WATER BOTTLE</h1>
        <form
            method="POST"
            action="{{ route('update', $water -> id) }}"
        >

            @csrf
            @method("PUT")

            <label for="name">Name</label>
            <br>
            <input
                type="text"
                name="name"
                id="name"
                value="{{ $water -> name }}">
            <br>
            <label class="mt-2" for="code">Code</label>
            <br>
            <input
                type="text"
                name="code"
                id="code"
                value="{{ $water -> code }}">
            <br>
            <label class="mt-2" for="price">Price</label>
            <br>
            <input
                type="text"
                name="price"
                id="price"
                value="{{ $water -> price }}">
            <br>
            <label class="mt-2" for="centilitres">centilitres</label>
            <br>
            <input
                type="number"
                name="centilitres"
                id="centilitres"
                value="{{ $water -> centilitres }}">
            <br>
            <label class="mt-2" for="picture">picture</label>
            <br>
            <input
                type="text"
                name="picture"
                id="picture"
                value="{{ $water -> picture }}">
            <br>

            <input class="mt-4" type="submit" value="UPDATE">

        </form>
    </div>

@endsection
