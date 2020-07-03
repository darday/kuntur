<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table = 'films';
    
        /*$usua -> Usu_Username = $request ->nombre;
        $usua -> Usu_Email = $request ->email;
        $usua -> Usu_Contrasenia = $request ->contrasenia;
        $usua -> Usu_Imagen = $request ->imagen;
        $usua ->save();*/
        
    protected $fillable=["film_id","film_Titulo","film_Director","film_Anio","film_Duracion",
                        "film_Ciudad","film_Categoria","film_Estado","film_imagen","film_Url","film_Descripcion"];
}
