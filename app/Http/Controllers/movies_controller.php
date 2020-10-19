<?php

namespace App\Http\Controllers;
use App\Genre;
use App\Movies;

use Illuminate\Http\Request;

class movies_controller extends Controller
{
    public function add_genres()
    {
        return view("Movies.createGenre");
    }

    public function add_movies()
    {
        return view("Movies.createMovies");
    }

    public function store_genres(Request $request)
    {
        return Genre::create([
            "Genre_name"=>$request->input("ganre")
        ]);
    }

    public function store_movies(Request $request)
    {
        return Movies::create([
            "title"=>$request->input("title"),
            "IMDB"=>$request->input("IMDB"),
            "description"=>$request->input("description"),
            "genre_id"=>$request->input("genre_id"),
            "picture"=>$request->input("picture")
        ]);
    }

    public function edit()
    {

    }

    public function update()
    {
    	
    }

    public function delete(Request $request)
    {
        return Movies::where("id", $request->input("id"))->delete();
    }

    public function index()
    {
        $Movies=Movies::get();
        return view("Movies.index", ["Movies"=>$Movies]);
    }

    public function show_genre()
    {

    }

    public function show_movie()
    {

    }
}
