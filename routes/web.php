<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/client-management', function () {
    return view('client-management');
});

Route::get('/survey-management', function () {
    return view('survey-management');
});

Route::get('/training-session', function () {
    return view('training-session');
});

Route::get('/training-session/steps', function () {
    return view('train1');
});
