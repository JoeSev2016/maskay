<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'districts';

    protected $fillable = ['name', 'province_id'];

    public function province(){
    	return $this->belongsTo('App\Province');
    }

    public function users(){
    	//Este modelo(District) tiene muchos Usuarios
    	return $this->hasMany('App\User');
    }

    public function customers(){
    	//Este modelo(Distrito) tiene muchos Clientes
    	return $this->hasMany('App\Customer');
    }

    public function adverts(){
    	//Este modelo(Distrito) tiene muchos Anuncios
    	return $this->hasMany('App\Advert');
    }
}
