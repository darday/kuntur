<?php

namespace App\Http\Controllers;

use App\calificacion_film_user;
use App\Film;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CalificacionFilmUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( )
    {
        $id_user=Auth::user()->id;
        $votel['voto']=calificacion_film_user::where('user_id','=',$id_user)->get();
        $votel2['film']=Film::where('id','=',$id_user)->get();
        $count['cuenta']=calificacion_film_user::where('user_id','=',$id_user)->count();

        foreach($votel as $votel){
            $votel2['film']=Film::where('id','=',$id_user)->get();

        }
       return ('Estamos trabajando');
       // return view('user.listFilm',$votel,$votel2,$count);


        $datos['film']=Film::paginate(20);
        $count['count']=$film::count();
        return view('peliculas',$datos,$count);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\calificacion_film_user  $calificacion_film_user
     * @return \Illuminate\Http\Response
     */
    public function show(calificacion_film_user $calificacion_film_user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\calificacion_film_user  $calificacion_film_user
     * @return \Illuminate\Http\Response
     */
    public function edit(calificacion_film_user $calificacion_film_user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\calificacion_film_user  $calificacion_film_user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, calificacion_film_user $calificacion_film_user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\calificacion_film_user  $calificacion_film_user
     * @return \Illuminate\Http\Response
     */
    public function destroy(calificacion_film_user $calificacion_film_user)
    {
        //
    }
}
