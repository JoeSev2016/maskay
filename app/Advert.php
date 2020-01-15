<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    protected $table = 'adverts';

    public function district(){
        return $this->belongsTo('App\District');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function category(){
    	return $this->belongsTo('App\Category');
    }

    public function customer(){
        return $this->belongsTo('App\Customer');
    }

    public function images(){
    	return $this->hasMany('App\AdvertImage');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag');
    }

    public function getFeaturedImageAttribute(){
    	$featuredImage = $this->images()->where('featured', true)->first();
    	//En caso el anuncio no tenga imagen destacada
    	if (!$featuredImage) {
    		//Sera igual a la primera imagen asociada al anuncio
    		$featuredImage = $this->images()->first();
    	}
    	//Una vez encotrada la imagen asociada devolvemos la url
    	if ($featuredImage) {
    		return $featuredImage->url;
    	}
    	//Si no hay ni una imagen asociada
    	return '/storage/adverts/default.jpg';
    }

    public function scopeSearchTagName($query, $texto){
        if($texto)
            return $query->whereHas('tags', function($q) use ($texto) {
                        $q->where('name', 'LIKE', "%$texto%");
                });
    }

    public function scopeSearchDistrict($query, $idDis){
        if($idDis)
            return $query->where('district_id','=',$idDis);
    }

    public function scopeSearchCategory($query, $idCat){
        if($idCat)
            return $query->where('category_id','=',$idCat);
    }
}
