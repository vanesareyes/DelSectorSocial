<?php

use App\Category;
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

Route::get('/', 'HomeController@index')->name('home');
// Categories
  Route::get('Categories/{country}', 'CategoryController@index')->name('Categories/{country}');//Mostrar todas las categorias que tenga el pais seleccionado.
  Route::get('CreateCategories', 'CategoryController@create')->name('CreateCategories')->middleware('auth');//Mostrar el formulario para crear la categoria.
  Route::post('CreateCategories', 'CategoryController@store')->name('CreateCategories')->middleware('auth');//Crear la categoria en la base de datos.
  Route::get('Categories/{country}/{id}', 'CategoryController@show')->name('Categories/{country}/{id}');//Mostrar una categogia especifica de un País.
  Route::get('EditCategories/{id}', 'CategoryController@edit')->name('EditCategories/{id}')->middleware('auth');//Ojo que hay que ver que tal vez solo los admin puedan hacer esto //Mostrar los detalles de la categoria para poder cambiarla.
  Route::put('EditCategories/{id}', 'CategoryController@update')->name('EditCategories/{id}')->middleware('auth');//...admin?//Editar la categoria en la base de datos.
  Route::delete('Categories/{id}', 'CategoryController@destroy')->name('Categories/{id}')->middleware('auth');//Para eliminar una categoria y las entradas que tenga. //En en el controlador lo podremos eliminar de la base de datos o solo de las vistas, pero para esto último tendríamos que agregar una/s columna/s en la tabla Categories.

// Entradas
    Route::get('createEntries', 'EntryController@create')->name('createEntries')->middleware('auth');
    Route::post('createEntries', 'EntryController@store')->name('createEntries')->middleware('auth');

    Route::get('categories', function(){
      return view('categories');
    })->name('categories');

// Entries
  Route::get('Entries/{country}', 'CategoryController@index')->name('Entries/{country}');//Mostrar todas las Entradas que tenga el pais seleccionado.
  Route::get('CreateEntries', 'CategoryController@create')->name('CreateEntries')->middleware('auth');//Mostrar el formulario para crear la Entrada.
  Route::post('CreateEntries', 'CategoryController@store')->name('CreateEntries')->middleware('auth');//Crear la Entrada en la base de datos.
  Route::get('Entries/{country}/{id}', 'CategoryController@show')->name('Entries/{country}/{id}')->middleware('auth');//Mostrar una Entrada especifica de una categoria y País.
  Route::get('EditEntries/{id}', 'CategoryController@edit')->name('EditEntries/{id}')->middleware('auth');//Mostrar los detalles de la Entrada para poder cambiarla.
  Route::put('EditEntries/{id}', 'CategoryController@update')->name('EditEntries/{id}')->middleware('auth');//Editar la Entrada en la base de datos.
  Route::delete('Entries/{id}', 'CategoryController@destroy')->name('Entries/{id}')->middleware('auth');//Para eliminar una Entrada.

//Users
  //Las rutas de LOGIN and REGISTER lo tenemos predefinido por lavavel, pero lo podemos modificar a gusto.
  Route::get('MyProfile', 'UserController@index')->name('MyProfile')->middleware('auth');
  Route::get('MyDates', 'UserController@show')->name('MyDates')->middleware('auth');
  Route::get('EditMyDates', 'UserController@Edit')->name('EditMydates')->middleware('auth');
  Route::put('EditMyDates', 'UserController@update')->name('EditMydates')->middleware('auth');
  Route::get('DeleteMyAccount', 'UserController@Edit')->name('EditMydates')->middleware('auth');
  Route::delete('DeleteMyAccount', 'UserController@Edit')->name('EditMydates')->middleware('auth');//En esta parte tendremos que ver si eliminamos al usuario solo de la "parte visual" como que ya no pueda entrar a la página con su cuenta, pero aún esté en la base de datos, porque si el usuario creó y/o editó entradas u otras cosas, afectarías las demás tablas.

//Administrators
  Route::get('ControlPanel', 'AdministratorController@index')->name('ControlPanel')->middleware('admin');//Esto es para mostrar un Panel con varios datos sobre las ususarios, entradas, categorias, etc, necesarias para un administrador.
  Route::get('CountryManager', 'AdministratorController@CountryManager')->name('CountryManager')->middleware('admin');//Vista para Administrar los países
  Route::get('CategoryManager', 'AdministratorController@CategoryManager')->name('CategoryManager')->middleware('admin');
  Route::get('EntryManager', 'AdministratorController@EntryManager')->name('EntryManager')->middleware('admin');
  Route::get('UserManager', 'AdministratorController@UserManager')->name('UserManager')->middleware('admin');
  
//Principal Admiistrator
  Route::get('AdministratorManager', 'AdministratorController@AdministratorManager')->name('AdministratorManager')->middleware('admin');//Esta parte sería para que el administrador principal pueda ver los datos y demás cosas de los administradores.

  