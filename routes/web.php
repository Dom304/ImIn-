<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\OpenAIController;
use app\Http\Controllers\JobsController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [UserController::class, 'home']);
Route::get('/login', [UserController::class, 'index']);



Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
Route::get('/profile/{user_id}', [UserController::class, 'profile'])->name('userProfile');

Route::get('/jobs', [JobsController::class, 'list'])->name('jobs');

Route::post('/analyze-questionnaire', [OpenAIController::class, 'analyze'])->name('analyzeData');
