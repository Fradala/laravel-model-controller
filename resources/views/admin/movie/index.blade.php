@extends('layout.app')
    <h2>
        Movie
    </h2>

    <ul>
        @foreach ($movies as $movie )

            <li>
                {{ $movie -> title }}
            </li>
            
        @endforeach
    </ul>

@section('main-content')

@endsection