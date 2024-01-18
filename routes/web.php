<?php

use App\Models\Persona;
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

Route::get('/', 'App\Http\Controllers\PersonaController@index')->name("persona.index");
Route::get('/persona', 'App\Http\Controllers\PersonaController@create')->name("persona.create");
Route::post('/persona', 'App\Http\Controllers\PersonaController@store')->name("persona.store");
Route::get('/persona/edit', 'App\Http\Controllers\PersonaController@edit')->name("persona.edit");
Route::put('/persona/{id}', 'App\Http\Controllers\PersonaController@update')->name("persona.update");
Route::delete('/persona/{id}', 'App\Http\Controllers\PersonaController@destroy')->name("persona.delete");
