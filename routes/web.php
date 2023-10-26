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
Route::get('/allgames', function () {
    return view('allgames');
});
Route::get('/newgames', function () {
    return view('newgames');
});
Route::get('/popgames', function () {
    return view('popgames');
});
Route::get('/lategames', function () {
    return view('lategames');
});
Route::get('/goty', function () {
    return view('goty');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/payday', function () {
    return view('games/payday');
});
Route::get('/re4', function () {
    return view('games/re4');
});
Route::get('/spiderman', function () {
    return view('games/spiderman');
});
Route::get('/spidermanmm', function () {
    return view('games/spidermanmm');
});
Route::get('/startrek', function () {
    return view('games/startrek');
});
Route::get('/stellaris', function () {
    return view('games/stellaris');
});
Route::get('/search', function () {
    return view('search');
});