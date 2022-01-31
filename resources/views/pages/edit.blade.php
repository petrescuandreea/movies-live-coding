@extends('layouts.main-layout')

@section('content')

    <h1>Edit movie</h1>

    {{-- error  --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('update', $movie -> id) }}" method="POST">

        @method("POST")
        @csrf

        <label for="title">Title:</label>
        <input type="text" name="title" placeholder="title" value="{{ $movie -> title }}"><br>
        <label for="subtitle">Subitle:</label>
        <input type="text" name="subtitle" placeholder="subtitle" value="{{ $movie -> subtitle }}"><br>
        <label for="release_date">Release date:</label>
        <input type="date" name="release_date" value="{{ $movie -> release_Date }}"><br>
        <input type="submit" value="UPDATE">
    </form>
    
@endsection