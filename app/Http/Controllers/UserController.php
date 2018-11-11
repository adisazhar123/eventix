<?php

namespace App\Http\Controllers;
use App\Event;
use App\EventPicture;
use Storage;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
	public function index(){
		return view('user.home');
	}

	// get events of user that has been approved/ pending by admin
	public function getEvents(){
		$events = Event::where('owner', Auth::user()->id)->get();
		return response()->json(['data' => $events]);
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
				'owner' => Auth::user()->id,
				'price' => $request->price,
				'city' => ucfirst($request->city),
				'sport_type' => $request->sport_type
			]);
			// store the pictures
			foreach ($request->event_pictures as $pics) {
				$path = $pics->store('public/event_pictures');
				EventPicture::create([
					'location' => str_replace('public/', '', $path),
					'event_id' => $event->id
				]);
			}

		} catch (\Exception $e) {
			return $e->getMessage();
			return "server error";
		}
		return back()->with('success', 'Event created successfully!');
	}
	// delete event that is still pending
	public function deleteEvent($id){
		try {
			$event = Event::find($id);
			// check if event is owned by user
			if ($event->owner == Auth::user()->id) {
				$event->delete();
			}else{ //not owned by user
				return response()->json(['message' => 'unauthorised'], 401);
			}
		} catch (\Exception $e) {
			return response()->json(['message' => 'server error'], 500);
		}
		return response()->json(['message' => 'ok'], 200);

	}
}
