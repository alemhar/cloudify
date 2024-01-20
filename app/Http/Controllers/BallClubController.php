<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;

class BallClubController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $alias)
    {
        $ballClub = \App\Models\BallClub::where('alias', $alias)->firstOrFail();
        $currentRound = \App\Models\Round::where('ball_club_id', $ballClub->id)->where('is_current', true)->first();
        $previousRound = \App\Models\Round::where('ball_club_id', $ballClub->id)
            ->where('date', '<', $currentRound->date)
            ->orderBy('date', 'desc')
            ->first();

        if ($previousRound) {
            $previousRound->load(['roundMatches' => function ($query) {
                $query->orderBy('time_slot_start', 'asc');
            }]);
        }

        $rounds = \App\Models\Round::where('ball_club_id', $ballClub->id)
            ->where('date', '<=', $currentRound->date)
            ->orderBy('date', 'asc')
            ->get();

        $rounds->load(['roundMatches' => function ($query) {
            $query->orderBy('time_slot_start', 'asc');
        }]);    

        return Inertia::render('BallClub', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
            'ballClub' => $ballClub->load(['teams' => function ($query) {
                $query->orderBy('wins', 'desc');
            }]),
            'currentRound' => $currentRound ?? null,
            'previousRound' => $previousRound ?? null,
            'rounds' => $rounds,
        ]);
    }
}
