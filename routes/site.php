<?php

use App\Events\TestEvent;
use App\Http\Livewire\Site\Home;
use App\Http\Livewire\Site\News;
use App\Http\Livewire\Site\GetIn;
use App\Http\Livewire\Site\Teams;
use App\Http\Livewire\Site\Drivers;
use App\Http\Livewire\Site\Download;
use App\Http\Livewire\Site\Schedule;
use App\Http\Livewire\Site\Standings;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Site\Drivers\Driver;

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
Route::get('/', Home::class)->name('home');
Route::get('/nieuws', News::class)->name('news');
Route::get('/kalender', Schedule::class)->name('schedule');
Route::get('/klassement', Standings::class)->name('standings');
Route::get('/rijders', Drivers::class)->name('drivers');
Route::get('/rijders/{driver}', Driver::class)->name('driver');
Route::get('/teams', Teams::class)->name('teams');
Route::get('/instappen', GetIn::class)->name('get-in');
Route::get('/download', Download::class)->name('download');

Route::get('/send', function () {
    event(new TestEvent());
});

Route::get('/socket', function () {
    return view('socket');
});
