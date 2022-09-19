<?php

use App\Http\Livewire\Site\Home;
use App\Http\Livewire\Site\Teams;
use App\Http\Livewire\Site\Drivers;
use App\Http\Livewire\Site\Schedule;
use App\Http\Livewire\Dash\Dashboard;
use App\Http\Livewire\Site\Standings;
use Illuminate\Support\Facades\Route;

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
Route::domain('srvn.test')->group(function () {
    Route::get('/', Home::class)->name('home');
    Route::get('/kalender', Schedule::class)->name('schedule');
    Route::get('/klassement', Standings::class)->name('standings');
    Route::get('/rijders', Drivers::class)->name('drivers');
    Route::get('/teams', Teams::class)->name('teams');
});


Route::middleware(['auth', 'verified'])->domain('mijn.srvn.test')->group(function () {
    Route::get('/', Dashboard::class)->name('dashboard');
});
