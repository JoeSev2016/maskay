<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'provinces';

    protected $fillable = ['name', 'department_id'];

    public function districts(){
    	return $this->hasMany('App\District');
    }

    public function department(){
    	return $this->belongsTo('App\Department');
    }
}
