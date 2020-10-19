<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/","movies_controller@index")->name("guestIndex");
Route::get("/show/genre/{id}", "movies_controller@show_genre")->name("guestShowGenre");
Route::get("/show/movie/{id}","movies_controller@show_movie")->name("guestShowMovie");

Route::get("/admin/create/add_genres","movies_controller@add_genres")->name("adminAddGenre");

Route::get("/admin/create/add_movies","movies_controller@add_movies")->name("adminAddmovies");

Route::post("/admin/store/genres", "movies_controller@store_genres")->name("adminStoreGenres");

Route::post("/admin/store/movies", "movies_controller@store_movies")->name("adminStoreMovies");

Route::get("/admin/edit/{id}", "movies_controller@edit")->name("adminEdit");

Route::post("/admin/update", "movies_controller@update")->name("adminUpdate");

Route::post("/admin/delete", "movies_controller@delete")->name("adminDelete");

