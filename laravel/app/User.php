<?php

namespace Cinema;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //Esta función es para conservar el password al momento de editar un usuario. El Hash:make es para que podamos encriptar dicho password y le pasamos el $valor
    public function setPasswordAttribute($valor){
        if (!empty($valor)) {
            $this->attributes['password'] = \Hash::make($valor);
        }
    }
}
