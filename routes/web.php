<?php

use Illuminate\Support\Facades\Route;
use App\Entry;
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

Route::get('/', function () {
    return view('../auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Entradas
    Route::get('createEntries', 'EntryController@create')->name('createEntries')->middleware('auth');
    Route::post('createEntries', 'EntryController@store')->name('createEntries')->middleware('auth');

    Route::get('prueba', function () {
        $entry = Entry::find(5);//se tiene que tener desde antes una entrada que tenga el id 5 o solo ponerle un id que tengas en la base de datos
        $categories = $entry->categories()->attach(1);// acá entra a todas sus categorias y después con attach() se le manda el id de la categoria que se quiere vincular en la tabla pivot
        dd($entry);
    });