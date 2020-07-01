<?php

namespace App\permisos\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //

    protected $fillable = [
        'name', 'slug', 'description','full-acces',
    ];

    public function users(){
        return $this->belongsToMany('App\User')->withTimestamps();
    }
}
