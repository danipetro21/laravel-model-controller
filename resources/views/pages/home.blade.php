@extends('layouts.base')

@section('content')
    <h1>FILM LIST:</h1>

    <ul>
        @foreach ($movies as $movie)

        <li>{{ $movie -> title }}</li>
            
        @endforeach
    </ul>
@endsection