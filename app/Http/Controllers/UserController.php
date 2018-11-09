<?php

namespace App\Http\Controllers;
use App\Event;
use App\EventPicture;
use Storage;

use Illuminate\Http\Request;

class UserController extends Controller
{
	public function index(){
		// get events of user that has been approved by admin 
		$events = Event::where('owner', 1)->where('approved', 1)->get();
		return view('user.home', ['events' => $events]);
	}

	public function newEventPage(Request $request){
		return view('user.new-event');
	}

	public function orderedTicketsPage(){
		return view('user.tickets-ordered');
	}
	// new event
	public function storeEvent(Request $request){
		try {
			$event = Event::create([
				'name' => $request->event_name,
				'description' => $request->event_description,
				'type' => $request->event_type,
				'date1' => $request->start_date,
				'date2'  => $request->end_date,
				'quota' =>  $request->quota,
				'owner' => 1,
				'price' => $request->price
			]);
			// store the pictures
			$path = $request->file('event_pictures')->store('public/event_pictures');
			EventPicture::create([
				'location' => $path,
				'event_id' => $event->id
			]);


		} catch (\Exception $e) {
			return $e->getMessage();
			return "server error";
		}
		return back()->with('success', 'Event created successfully!');
	}
}
