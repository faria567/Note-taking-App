<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
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

// routes/web.php
Route::middleware('auth')->group(function () {
    Route::get('/notes', 'NoteController@index');
    Route::get('/notes/create', 'NoteController@create'); 
    Route::post('/notes', 'NoteController@store');
    Route::get('/notes/{note}/edit', 'NoteController@edit');
    Route::put('/notes/{note}', 'NoteController@update');
    Route::delete('/notes/{note}', 'NoteController@destroy');
    Route::get('/search', 'NoteController@search')->name('notes.search');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
