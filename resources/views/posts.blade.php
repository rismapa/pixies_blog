@extends('layouts.main')

@section('container')

    @foreach ($posts as $p)
        <a href="/post/{{ $p->id }}"><h1>{{ $p['title'] }}</h1></a>
        <h5>{{ $p['author'] }}</h5>

        <p>{{ $p['body'] }}</p>
    @endforeach

    
@endsection