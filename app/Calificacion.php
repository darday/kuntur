<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    protected $fillable=[
        "calf_nombre","calf_descripcion"
    ];

    public function film(){
        return $this->belongsToMany('App\Film')->withTimestamps();

    }

    public function users(){
        return $this->belongsToMany('App\User')->withTimestamps();
    }
}
