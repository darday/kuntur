<?php

namespace App\Http\Controllers;

use App\Film;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function agregar(){
        return view('admin.createFilm');
    }

    public function peliculas(Film $film)
    {
        $datos['film']=Film::paginate(20);
        $count['count']=$film::count();
        return view('peliculas',$datos,$count);
    }

    public function pelicula(Film $film, $id)
    {
        //return ('pelicula');
        $datos['film']=Film::findOrFail($id);
       // $count['count']=$film::count();
        return view('pelicula',$datos);
    }

    
    public function index(Request $request)
    {
        //$request = user()->queryRole('admin');
        
        //return $role;    
        $request->user()->authorizeRole('admin');
        $films=Film::all();
        

        
        
        return view('admin.admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->user()->authorizeRole('admin');   
        $request->user()->authorizeRole('admin');
        $usuario = request() ->except('_token');
        
        if($request->file('film_imagen')){
           
            $usuario['film_imagen']=$request->file('film_imagen')->store('uploads','public');
        }
      Film::insert($usuario);
        return redirect('/create')->with('Mensaje','Film Agregado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function show(Film $film)
    {
        $datos['film']=Film::paginate(20);
        return view('admin.listFilm',$datos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $film=Film::findOrFail($id);
        $estado['estado']=Film::findOrFail($id);
        if($estado['estado']->film_Estado == 0){
            $estado['estado']='Deshabilitado';
        }else{
            $estado['estado']='Habilitado';
        }
        return view('admin.editfilm',compact('film'),$estado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $film2 = request() ->except(['_token','_method']); 
       
        $film=Film::findOrFail($id);
        if($request->file('film_imagen')){
            Storage::delete('public/'. $film->film_imagen);
            $film2['film_imagen']=$request->file('film_imagen')->store('uploads','public');
        }
        
        $film->update($film2);
        //return $usuario2['Usu_Imagen'] ;
       // $usuario['Usu_Imagen']->update($usuario['Usu_Imagen']);
      
        return redirect('/edit/'.$id.'/edit')->with('Mensaje','Película Modificadas con Exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       // return ('destroy;');
        $film=Film::findOrFail($id);
        if(Storage::delete('public/'. $film->film_imagen)){
            Film::destroy($id);
        } 
        Film::destroy($id);

        
        return redirect('/listar')->with('Mensaje','Película eliminada con Exito');
    }
    
}
