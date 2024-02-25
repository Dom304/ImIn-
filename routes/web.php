<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\Auth\UserController;



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

Route::get('/', function () {
    return view('home');
});
Route::post('/login', 'Auth\UserController@login')->name('login');
Route::post('/logout', 'Auth\UserController@logout')->name('logout');

Route::get('/profile/{user_id}', 'Auth\UserController@profile')->name('userProfile');

Route::get('/jobs', 'JobsController@list')->name('jobs');

