<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\permisos\Models\Role;

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


/******************* USUARIOS*************** */

Route::get('/', function () {
    return view('index');
});

Route::get('/peliculas', 'FilmController@peliculas')->name('peliculas');
Route::get('/pelicula/{id}', 'FilmController@pelicula')->name('pelicula');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/******************************ADMIN*********************** */
//Route::get('/nosotros', 'HomeController@nosotros')->name('nosotros');
Route::get('/admin', 'FilmController@index')->name('admin');
Route::get('/create', 'FilmController@agregar')->name('create');
Route::post('/create', 'FilmController@store')->name('create');
Route::get('/listar', 'FilmController@show')->name('listar');
Route::get('/edit/{admin}/edit', 'FilmController@edit')->name('edit');
Route::patch('/edit/{admin}', 'FilmController@update')->name('edit');
Route::delete('/delete/{admin}', 'FilmController@destroy')->name('delete');





Route::get('/test', function () {
    
    /*return Role::create([
        'name'=>'admin',
        'slug'=>'admin',
        'description'=>'administrador',
        'full-acces'=>'yes'
    ]);*/

   /* return Role::create([
        'name'=>'user',
        'slug'=>'user',
        'description'=>'usuario',
        'full-acces'=>'no'
    ]);*/

    /*return Role::create([
        'name'=>'judge',
        'slug'=>'judge',
        'description'=>'juez',
        'full-acces'=>'no'
    ]);*/

   /* $user= User::find(1);
    //$user->roles()->attach([1,2,3]);
    //$user->roles()->detach([1,3]);
    $user->roles()->sync([1]);

    return $user->roles;*/
    
    

});

