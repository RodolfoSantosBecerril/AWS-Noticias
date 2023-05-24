@extends('layouts.app')

@section('content')
    <h1>Últimas noticias</h1>
    <ul>
        @foreach ($news as $item)
            <li>
                <h2>{{ $item->title }}</h2>
                <p>{{ $item->description }}</p>
                <a href="{{ $item->url }}">Leer más</a>
            </li>
        @endforeach
    </ul>
@endsection
