@extends('layouts.app')

@section('content')
    <h1>Últimas noticias</h1>
    <ul>
        @foreach ($articles as $article)
            <li>
                <h2>{{ $article['title'] }}</h2>
                <p>{{ $article['description'] }}</p>
                <a href="{{ $article['url'] }}">Leer más</a>
            </li>
        @endforeach
    </ul>
@endsection
