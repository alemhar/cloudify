<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        
        $user = $request->user();
        $user->tokens()->delete();
        $appToken = $user->createToken($user->name);
        $appTokenText = $appToken->plainTextToken;
        
        return Inertia::render('Dashboard', ['user' => $user, 'access_token' => $appTokenText]);


        // $ballClub = auth()->user()->ballClub->load(['teams' => function ($query) {
        //     $query->orderBy('wins', 'desc');
        // }]);

        // $rounds = \App\Models\Round::where('ball_club_id', $ballClub->id)->orderBy('date', 'desc')->get();

        // $roundMatches = \App\Models\RoundMatch::where('round_id', $rounds[0]->id)->get();

        

        
        // $user = $request->user();
        // $user->tokens()->delete();
        // $appToken = $user->createToken($user->name);
        // $appTokenText = $appToken->plainTextToken;
        


        // return Inertia::render('Dashboard', ['ballClub' => $ballClub, 'rounds' => $rounds, 'round_matches' => $roundMatches->load(['teamMatches.team']), 'access_token' => $appTokenText ] );
    }
    
}
