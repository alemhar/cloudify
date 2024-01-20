<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\RoundController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\RoundMatchController;
use App\Http\Controllers\TeamPlayerController;
use App\Http\Controllers\Api\CompanyController;
use App\Http\Controllers\RoundMatchTeamController;
use App\Http\Controllers\RoundMatchPlayerController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware('auth:sanctum')->group(function () {
    Route::get('/companies', [CompanyController::class, 'index']);
    Route::put('round/{id}/current', [RoundController::class, 'setCurrent']);
    Route::put('/round-match-team', [RoundMatchTeamController::class, 'update']);
    Route::put('round/{id}', [RoundController::class, 'update']);
    Route::post('/round-match/{id}/player', [RoundMatchPlayerController::class, 'store']);
    Route::post('/upload/potg', [RoundMatchPlayerController::class, 'upload']);
});


Route::get('/round-match/{id}/teams', [RoundMatchController::class, 'show']);
Route::get('/round/{id}', [RoundController::class, 'show']);
Route::get('/round-match/{id}/player', [RoundMatchPlayerController::class, 'show']);
Route::get('/teams/{id}/players', [TeamPlayerController::class, 'show']);
Route::get('/players', [PlayerController::class, 'index']);
Route::get('/ball-club/{id}/teams/players', [TeamPlayerController::class, 'index']);
Route::get('/teams/{id}/players', [PlayerController::class, 'show']);
Route::get('/ball-club/{id}/teams', [TeamController::class, 'index']);
