<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use App\FilmPicture;

class CinemaController extends Controller
{
	public function index(){
		return view('cinema.dashboard');
	}

	public function newFilmPage(){
		return view('cinema.new-film');
	}

	public function listCinemas(){
		return view('cinema.cinemas');
	}

	public function listFilms(){
		$films = Film::all();
        return view('cinema.films', compact('films'));
	}

	public function storeFilm(Request $request){
		try {
			$film = Film::create([
				'name' => $request->film_name,
				'genre' => $request->film_genre,
				'director' => $request->film_director,
				'duration' => $request->film_duration,
			]);

			$path = $request->file('film_pictures')->store('public/film_pictures');
			FilmPicture::create([
				'location' => $path,
				'film_id' => $film->id
			]);

		} catch (\Exception $e) {
			return $e->getMessage();
			return "server error";
		}
		return back()->with('success', 'Film created successfully!');
	}
}
