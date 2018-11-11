<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Film;
use App\Cinema;
use App\Schedule;
use App\User;

class MainController extends Controller
{
	public function index(){
		$films = Film::take(5)->get();
        return view('welcome', compact('films'));
	}

	public function single_ticket($id){
		$event = Event::find($id);
		if ($event) {
			$posted_by = User::find($event->id);
			return view('ticket', ['event' => $event, 'posted_by' => $posted_by]);
		}
		return redirect('/');
	}

	public function eventPage(){
		// get approved events and still in date range
		// TODO: query based on events, sports etc
		$events = Event::where('approved', 1)->paginate(10);
		return view('events', ['events' => $events]);
	}

	public function moviePage(){
		$films = Film::orderBy('name')->get();
        return view('movies', compact('films'));
	}

	public function moviePageSingle($id){
		$film = Film::find($id);
		$cinemas = Schedule::where('id_film',$id)->get();
        return view('movie', compact('film','cinemas'));
	}
}
