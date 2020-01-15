<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments';

    protected $fillable = ['name'];

    public function provinces(){
    	return $this->hasMany('App\Province');
    }
}
