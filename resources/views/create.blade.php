@extends('layouts.main-layout')

@section('title')
    CREATE
@endsection

@section('content')

    <div class="container mx-auto text-center my-5">
        <h1 class="py-2">NEW WATER BOTTLE</h1>
        <form
            method="POST"
            action="{{ route('store') }}"
        >

            @csrf
            @method("POST")

            <label for="name">Name</label>
            <br>
            <input type="text" name="name" id="name">
            <br>
            <label class="mt-2" for="code">Code</label>
            <br>
            <input type="text" name="code" id="code">
            <br>
            <label class="mt-2" for="price">Price</label>
            <br>
            <input type="text" name="price" id="price">
            <br>
            <label class="mt-2" for="centilitres">centilitres</label>
            <br>
            <input type="number" name="centilitres" id="centilitres">
            <br>
            <label class="mt-2" for="picture">picture</label>
            <br>
            <input type="text" name="picture" id="picture">
            <br>

            <input class="mt-4" type="submit" value="CREATE">

        </form>
    </div>

@endsection
