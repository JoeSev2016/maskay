<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentType extends Model
{
	//Representa a la tabla document_types
    protected $table = 'document_types';

    //Tiene muchos clientes
    public function customers(){
    	//Este modelo(DocumentType) tiene muchos clientes
    	return $this->hasMany('App\Customer');
    }
}
