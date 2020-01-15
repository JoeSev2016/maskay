<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    public function district(){
        return $this->belongsTo('App\District');
    }

    public function users(){
        return $this->belongsTo('App\User');
    }

    public function document_type(){
        return $this->belongsTo('App\DocumentType');
    }

    public function customers(){
        //Este modelo(User) tiene muchos Clientes
        return $this->hasMany('App\Customer');
    }
}
