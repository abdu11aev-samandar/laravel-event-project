<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class SavedEventController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $events = Event::with('savedEvents')->whereHas('likes', function ($query) {
            $query->where('user_id', auth()->id());
        })->get();

        return view('events.savedEvents', compact('events'));
    }
}
