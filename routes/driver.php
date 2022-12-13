<?php

use App\Http\Livewire\Dash\Driver\Dashboard;
use App\Http\Livewire\Dash\Driver\Protesten;
use App\Http\Livewire\Dash\Driver\Team;
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

Route::get('/', Dashboard::class)->name('dashboard');
Route::get('/team', Team::class)->name('team');
Route::get('/protesten', Protesten::class)->name('protesten');
