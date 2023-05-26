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
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque quam magni quo ex laudantium, id vitae sint molestiae
        cumque, repudiandae autem. Recusandae vero autem molestias. Nostrum nemo totam modi architecto quidem harum
        consequuntur et excepturi quis magni reprehenderit, recusandae eaque debitis minus facere voluptatem. Minima
        deserunt dolorem quisquam? Impedit, accusantium.</p>
@endsection
