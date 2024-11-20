<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController; 
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Auth;

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

// Halaman awal (landing page atau welcome page)
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Rute resource untuk projects
Route::resource('projects', ProjectController::class);

// Rute resource untuk tasks
Route::resource('tasks', TaskController::class);

// Rute resource untuk clients
Route::resource('clients', ClientController::class);

Auth::routes();