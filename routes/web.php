<?php

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

Route::get('/', 'UserController@home');
Route::get('/login', 'UserController@login');
Route::post('/credentials', 'UserController@credentials');

Route::middleware([
        \App\Http\Middleware\SecurityValidation::class]
)->group(function () {
    Route::get('/home', 'NotesController@home');
    Route::get('/notes', 'NotesController@getNotes');
    Route::get('/note/form/{id}', 'NotesController@form');
    Route::post('/note/form', 'NotesController@formSave');
});
