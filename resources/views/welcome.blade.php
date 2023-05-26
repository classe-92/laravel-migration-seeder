@extends('layouts.app')


@section('maincontent')
    <main>
        <h1>Hello</h1>
        <ul>
            @foreach ($houses as $house)
                <li>{{ $house->title }}</li>
            @endforeach
        </ul>
    </main>
    <p></p>
@endsection
