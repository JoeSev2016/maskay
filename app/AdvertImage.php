<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdvertImage extends Model
{
    public function advert(){
    	return $this->belongsTo('App\Advert');
    }
}
