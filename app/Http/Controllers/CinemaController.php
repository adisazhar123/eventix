<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use App\Cinema;
use App\Schedule;
use App\FilmPicture;

class CinemaController extends Controller
{
	public function index(){
		$schedules = Schedule::orderBy('id_cinema')->get();
		$cinemas = Cinema::select('id', 'name')->orderBy('name')->get();
		$films = Film::select('id', 'name')->orderBy('name')->get();
		return view('cinema.dashboard',compact('schedules','cinemas','films'));
	}

	public function newFilmPage(){
		return view('cinema.new-film');
	}

	public function listCinemas(){
		$cinemas = Cinema::orderBy('name')->get();
		return view('cinema.cinemas',compact('cinemas'));
	}

	public function listFilms(){
		$films = Film::orderBy('name')->get();
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

	public function storeSchedule(Request $request){
		try {
			$film = Schedule::create([
				'id_cinema' => $request->cinema_id,
				'id_film' => $request->film_id,
			]);

		} catch (\Exception $e) {
			return $e->getMessage();
			return "server error";
		}
		return back()->with('success', 'Schedule added successfully!');
	}
}
