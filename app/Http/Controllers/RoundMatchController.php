<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Round;
use App\Models\RoundMatch;
use Illuminate\Http\Request;

class RoundMatchController extends Controller
{
    public function show($id)
    {
        $round = Round::find($id);
        
        $roundMatchs = RoundMatch::where('round_id', $round->id)->orderBy('time_slot_start', 'asc')->get();
        if ($roundMatchs->count() > 0) {
            return response()->json($roundMatchs->load(['teamMatches.team', 'playerOfTheGame.player']));
        } else {
            return response()->json([]);
        }
    }
}
