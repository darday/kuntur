<?php

use App\Film;
use Illuminate\Support\Facades\Route;
use App\User;
use App\Calificacion;
use App\permisos\Models\Role;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


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
Route::post('/vote/{id}', 'FilmController@vote')->name('vote');

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

    $id_user =  User::where('id',1)->first();
    //dd($id_user->id);
    $id_film =  Film::where('id',1)->first();
    $id_calif =  Calificacion::where('id',1)->first();

    
    DB::table('calificacion_film_user')->insert([
        'calificacion_id' => '1',
        'film_id' => '1',
        'user_id' =>'1',
        
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
       
        //'tutor_id' => 0
    ]);

    return redirect('/create')->with('Mensaje','Film Agregado con Exito');
    

    //$user= User::find(1);
    //dd($user->id);

    //$user->film()->attach([1,1]);
    //$user->roles()->detach([1,3]);
    //$user->film()->sync([1]);
    

    //$user->califficacion()->sync([1]);

    return $id_calif  ;
    
    

});

