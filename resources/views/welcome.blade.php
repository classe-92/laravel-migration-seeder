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
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, commodi.</p>
    <h1>Ciao</h1>
@endsection
