<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use PhpParser\Node\Expr\Empty_;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table ="users";
    protected $fillable = [
        'name', 'email', 'password','phone','id_rollet','curp','grup','grade','specialty','ncontrol'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','phone'
    ];

    public function roles()
    {
        return $this->belongsTo('App\Role','id_rollet','id_rollet');
    }

    public function setPasswordAttribute($valor)
    {
        if (!Empty($valor))
        {
            $this->attributes['password'] = \Hash::make($valor);
        }
    }
}
