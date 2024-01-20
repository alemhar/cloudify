<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BallClubController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\IndexPageController;
use App\Http\Controllers\RoundMatchController;
use App\Http\Controllers\Web\PlayerOfTheGameController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/', IndexPageController::class);

Route::get('/', function () {
    return redirect()->route(Auth::check() ? 'dashboard' : 'login');
});

Route::get('/dashboard', DashboardController::class)->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/new', [DeliveryController::class, 'create'])->middleware(['auth', 'verified'])->name('new');

Route::get('/companies', [CompanyController::class, 'index'])->middleware(['auth', 'verified'])->name('companies');

Route::get('/ball-club/{alias}', BallClubController::class)->where('alias', '[a-z-]+')->name('ball-club');





Route::get('ball-club/{alias}/potg', PlayerOfTheGameController::class)->name('potg');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::put('/teams/{team}', [TeamController::class, 'update']);
    Route::put('/team-score/{team}', [TeamController::class, 'score']);
    
});

require __DIR__.'/auth.php';
