<?php

namespace App\Http\Controllers;

use App\Models\Round;
use Illuminate\Http\Request;

class RoundController extends Controller
{
    public function show($id)
    {
        $round = Round::find($id);
        return response()->json($round);
        
    }


    public function update(Request $request, $id)
    {
        $round = Round::find($id);
        $round->update($request->all());
        $round->save();
        return response()->json($round);
    }

    public function setCurrent(Request $request, $id)
    {
        
        $round = Round::find($id);
        $round->is_current = true;
        $round->save();

        // Include Season
        $previousRound = Round::where('ball_club_id', $round->ball_club_id)
                               ->where('id', '!=', $round->id)
                               ->where('is_current', true)
                               ->first();
        $previousRound->is_current = false;
        $previousRound->save();
        return response()->json($round);
    }

}
