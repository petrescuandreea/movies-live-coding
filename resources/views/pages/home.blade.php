@extends('layouts.main-layout')

@section('content')
    <section>
        <h3>
            <a href="{{ route('create') }}">
                Create new movie
            </a>
        </h3>

        <h2>Movies list:</h2>

        <ul>
            @foreach ($movies as $movie)

                <li>
                    <a href="{{ route('show', $movie -> id) }}"> 
                        {{ $movie -> title }} 
                    </a> 
                    - {{ $movie -> release_date }}
                    - <a href="{{ route('edit', $movie -> id) }}">EDIT</a>
                    - <a href="{{ route('delete', $movie -> id) }}">DELETE</a>
                </li>
                
            @endforeach
        </ul>
    </section>
@endsection