<?php

use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Home;
use App\Http\Livewire\Kalender;
use App\Http\Livewire\Klassement;
use App\Http\Livewire\Rijders;
use App\Http\Livewire\Teams;
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

Route::get('/', Home::class)->name('home');

Route::get('/kalender', Kalender::class)->name('kalender');
Route::get('/klassement', Klassement::class)->name('klassement');
Route::get('/rijders', Rijders::class)->name('rijders');
Route::get('/teams', Teams::class)->name('teams');

Route::middleware('auth')->group(function ()
{
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
});
