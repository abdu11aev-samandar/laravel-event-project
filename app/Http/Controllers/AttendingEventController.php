<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class AttendingEventController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $events = Event::with('attendings')->whereHas('likes', function ($query) {
            $query->where('user_id', auth()->id());
        })->get();

        return view('events.attendingEvents', compact('events'));
    }
}
