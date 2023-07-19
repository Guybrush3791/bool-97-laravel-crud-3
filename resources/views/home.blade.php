@extends('layouts.main-layout')

@section('title')
    HOME
@endsection

@section('content')

    <div class="text-center my-5">
        <h1 class="py-2">
            Waters
            <a href="{{ route('create') }}">+</a>
        </h1>
        <ul class="list-unstyled">
            @foreach ($waters as $water)
                <li class="py-3">
                    <a href="{{ route('show', $water -> id) }}">
                        {{ $water -> name }}
                    </a>
                    <br>
                    <a
                        class="btn btn-primary"
                        href="{{ route('edit', $water -> id)}}"
                    >
                        EDIT
                    </a>
                    <form
                        method="POST"
                        action="{{ route('delete', $water -> id) }}"
                        class="d-inline"
                    >

                        @csrf
                        @method("DELETE")

                        <input class="btn btn-primary" type="submit" value="DELETE">
                    </form>
                </li>
            @endforeach
        </ul>
    </div>


@endsection
