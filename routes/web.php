<?php

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

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/home', [EventController::class, 'home']);
Route::get('/createGoal', [EventController::class, 'createGoal']);

Route::post('events', [EventController::class, 'store']);
Route::delete('/events/{id}', [EventController::class, 'destroy']);
Route::get('events/pageEditGoal/{id}', [EventController::class,'edit']);
Route::put('events/update/{id}', [EventController::class,'update']);