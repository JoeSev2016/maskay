<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function district(){
        return $this->belongsTo('App\District');
    }

    public function customers(){
        //Este modelo(User) tiene muchos Customers
        return $this->hasMany('App\Customer');
    }

    public function adverts(){
        //Este modelo(User) tiene muchos Adverts
        return $this->hasMany('App\Advert');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'last_name', 'email', 'password', 'address', 'cellphone', 'district_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
