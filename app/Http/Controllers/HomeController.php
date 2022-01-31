<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class HomeController extends Controller
{

    public function home() {

        $movies = Movie::all();
        return view('pages.home', compact('movies'));
    }

    public function show($id) {

        // dd($id);

        $movie = Movie::findOrFail($id);
        // dd($id, $movie);
        
        return view('pages.show', compact('movie'));
    }

    public function create() {

        return view('pages.create');
    }

    public function store(Request $request) {

        // validation 
        $data = $request -> validate([

            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'release_date' => 'required|date',
        ]);

        // create new element 
        $movie = Movie::create($data);

        // insert new element in home 
        // return redirect() -> route('home');

        // show new element details 
        return redirect() -> route('show', $movie -> id);
    }

    public function edit($id) {

        // find movie to edit 
        $movie = Movie::findOrFail($id);

        // go to update "page" 
        return view('pages.edit', compact('movie'));
    }

    public function update(Request $request, $id) {

        // validation 
        $data = $request -> validate([

            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'release_date' => 'required|date',
        ]);

        // element to update
        $movie = Movie::findOrFail($id);

        // updated element 
        $movie -> update($data);

        // show updated element's details 
        return redirect() -> route('show', $movie -> id);
    }

    public function delete($id) {

        // movie to delete 
        $movie = Movie::findOrFail($id);

        // delete movie 
        $movie -> delete();

        // return to home page 
        return redirect() -> route('home');
    }

}
