<?php

use App\Http\Livewire\Dash\Team\Dashboard;
use App\Http\Livewire\Dash\Team\Information;
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

Route::get('/info', Information::class)->name('info');
