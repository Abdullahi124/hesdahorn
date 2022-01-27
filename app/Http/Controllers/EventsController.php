<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('event_date', 'desc')->get();
        return view('events')->with('events', $events);
    }
    public function show(int $id)
    {
        $event = Event::find($id);
        return view('single-event')->with([
            'event' => $event
        ]);
    }
}
