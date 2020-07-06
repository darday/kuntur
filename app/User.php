<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    //this the forankey
    public function roles(){
        return $this->belongsToMany('App\permisos\Models\Role')->withTimestamps();
    }

    public function film(){
        return $this->belongsToMany('App\Film')->withTimestamps();

    }

    public function calificacion(){
        return $this->belongsToMany('App\Calificacion')->withTimestamps();
    }


//validar a los usuarios



public function authorizeRole($roles){
    if($this->hasAnyRole($roles)){
            return true;
    }
    return(false);
    //abort(401,'This action is unauthorized');

}

    ////some roles

    public function hasAnyRole($roles){
        if(is_array($roles)){
            foreach ($roles as $role){
                if($this->hasRole($role)){
                    return true;
                }
            }

        }else{
            if($this->hasRole($roles)){
                return true;
            }
        }

        return false;
    }

    //if an user have a rol determinate
    public function hasRole($role){
        if($this->roles()->where('name',$role)->first()){
            return true;
        }else{
            return false;
        }

    }

  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','rol',
    ];



    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    
}
