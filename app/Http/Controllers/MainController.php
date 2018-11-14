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
		$films = Film::take(5)->where('status', 1)->get();
		$events = Event::where('approved', 1)->where('sport_type', '=', null)->take(10)->get();
		$sports = Event::where('approved', 1)->where('sport_type', '!=', null)->take(10)->get();
        return view('welcome', compact('films','sports', 'events'));
	}

	public function single_ticket($id){
		$event = Event::find($id);
		if ($event) {
			$posted_by = User::find($event->id);
			return view('ticket', ['event' => $event, 'posted_by' => $posted_by]);
		}
		return redirect('/');
	}

	public function catSearch(Request $request){
		if ($request->categories=="Cinemas") {
			$films = Film::where('name', 'like', '%'.$request->keyword.'%')->orderBy('name')->paginate(10);
	        return view('movies', compact('films'));
		}
		elseif ($request->categories=="Events") {
			$events = Event::where('approved', 1)->where('sport_type', '=', null)->where('name', 'like', '%'.$request->keyword.'%')->paginate(10);
			return view('events', ['events' => $events]);
		}
		else{
			$events = Event::where('approved', 1)->where('sport_type', '!=', null)->where('name', 'like', '%'.$request->keyword.'%')->paginate(10);
			return view('events', ['events' => $events]);
		}
	}

	public function eventPage(){
		$events = Event::where('approved', 1)->where('sport_type', null)->paginate(10);
		return view('events', ['events' => $events]);
	}

	public function moviePage(){
		$films = Film::orderBy('name')->where('status', 1)->paginate(10);
		$filmsc = Film::where('status', 2)->get();
        return view('movies', compact('films','filmsc'));
	}

	public function moviePageSingle($id){
		$film = Film::find($id);
		$cinemas = Schedule::where('id_film',$id)->get();
        return view('movie', compact('film','cinemas'));
	}

	public function categoryMovie($category){
		$films = Film::orderBy('name')->where('genre',$category)->paginate(10);
        return view('movies', compact('films'));
	}

	public function sportPage(){
		$events = Event::where('approved', 1)->where('sport_type', '!=', null)->paginate(10);
		return view('events', ['events' => $events]);
	}
}
