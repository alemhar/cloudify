<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\TeamMatch;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function update(Request $request, $teamId)
    {
        try {
            $team = Team::findOrFail($teamId);
            
            if ($request->has('rank')) {
                $team->rank = $request->input('rank');
            }
            if ($request->has('wins')) {
                $team->wins = $request->input('wins');
            }
            if ($request->has('losses')) {
                $team->losses = $request->input('losses');
            }

            $team->save();
            return redirect()->back()->with('message', $team->name . ' stat updated.');
        } catch (\Exception $e) {
            return redirect()->back()->with('message', 'Unable to update team stat.');
        }
    }


    public function score(Request $request, $teamId)
    {
        try {
            $team = TeamMatch::findOrFail($teamId);
            
            if ($request->has('score')) {
                $team->final_score = $request->input('score');
            }

            $team->save();
            // return redirect()->back()->with('message', $team->name . ' score updated.');
        } catch (\Exception $e) {
            return redirect()->back()->with('message', 'Unable to update team score.');
        }
    }

    public function index(Request $request, $id)
    {
        $teams = Team::where('ball_club_id', $id)->get();
        return $teams;
    }
}
