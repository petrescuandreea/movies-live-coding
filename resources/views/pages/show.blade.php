@extends('layouts.main-layout')

@section('content')
    <section>
        <h2>
            Movie: {{ $movie -> title}}
        </h2>
    
        <p>
            Subtitle: {{ $movie -> subtitle}} <br>
            Released on : {{ $movie -> release_date}}
        </p>
    </section>
@endsection