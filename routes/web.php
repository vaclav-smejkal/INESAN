<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SeedController;
use App\Http\Controllers\UserController;

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

Route::get('/', [DashboardController::class, 'index'])->middleware('auth')->name('home');

Route::get('/seed', [SeedController::class, 'index']);

Route::get('/user-create', [UserController::class, 'create'])->middleware('auth');
Route::post('/user-store', [UserController::class, 'store'])->middleware('auth');

Route::get('/user-list', [UserController::class, 'list'])->middleware('auth');

Route::get('/user-edit/{id}', [UserController::class, 'edit'])->middleware('auth');

Route::get('/project-create', [ProjectController::class, 'create'])->middleware('auth');
Route::post('/project-store', [ProjectController::class, 'store'])->middleware('auth');

Route::get('/project-list', [ProjectController::class, 'list'])->middleware('auth');

Route::get('/project-edit/{id}', [ProjectController::class, 'edit'])->middleware('auth');
