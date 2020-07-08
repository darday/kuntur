<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class calificacion_film_user extends Model
{

    protected $table = 'calificacion_film_users';
    protected $fillable=["calificacion_id","film_id","user_id"];


}
