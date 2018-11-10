<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class MainController extends Controller
{
	public function index(){
		return view('welcome');
	}

	public function single_ticket($id){
		$event = Event::find($id);
		return view('ticket', ['event' => $event]);
	}

	public function eventPage(){
		// get approved events and still in date range
		$events = Event::where('approved', 1)->get();
		return view('events', ['events' => $events]);
	}
}
