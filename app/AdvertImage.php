<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Advert;

class AdvertImage extends Model
{
    public function advert(){
    	return $this->belongsTo('App\Advert');
    }

    //Accesor
    public function getUrlAttribute($slug){
        $advert = Advert::find($this->image->advert_id);
        $advertSlug = Advert::where('slug','==',$slug);

    	if (substr($this->image, 0, 4) == "http") {
    		return $this->image;
    	}

    	return '/storage/adverts/'. $advert->slug . '/' . $this->image;
    }
}
