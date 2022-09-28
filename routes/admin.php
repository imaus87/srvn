<?php

use App\Http\Livewire\Dash\Admin\Dashboard;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Dash\Admin\Users\EditUsers;
use App\Http\Livewire\Dash\Admin\Users\ShowUsers;
use App\Http\Livewire\Dash\Admin\Users\IndexUsers;
use App\Http\Livewire\Dash\Admin\Roles\EditRoles;
use App\Http\Livewire\Dash\Admin\Roles\ShowRoles;
use App\Http\Livewire\Dash\Admin\Roles\IndexRoles;
use App\Http\Livewire\Dash\Admin\Roles\CreateRoles;
use App\Http\Livewire\Dash\Admin\Permissions\EditPermissions;
use App\Http\Livewire\Dash\Admin\Permissions\ShowPermissions;
use App\Http\Livewire\Dash\Admin\Permissions\IndexPermissions;
use App\Http\Livewire\Dash\Admin\Permissions\CreatePermissions;

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

Route::get('/', Dashboard::class)
    ->name('dashboard');

Route::get('/rijders', IndexUsers::class)
    ->name('index-users');
Route::get('/rijders/{slug}', ShowUsers::class)
    ->name('show-users');
Route::get('/rijders/{slug}/edit', EditUsers::class)
    ->name('edit-users');

Route::get('/permissions', IndexPermissions::class)
    ->name('index-permissions');
Route::get('/permissions/{slug}', ShowPermissions::class)
    ->name('show-permissions');
Route::get('/permissions/create', CreatePermissions::class)
    ->name('create-permissions');
Route::get('/permissions/{slug}/edit', EditPermissions::class)
    ->name('edit-permissions');

Route::get('/roles', IndexRoles::class)
    ->name('index-roles');
Route::get('/roles/{slug}', ShowRoles::class)
    ->name('show-roles');
Route::get('/roles/create', CreateRoles::class)
    ->name('create-roles');
Route::get('/roles/{slug}/edit', EditRoles::class)
    ->name('edit-roles');
