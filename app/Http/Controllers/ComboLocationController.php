<?php

namespace App\Http\Controllers;
use App\Province;
use App\District;

use Illuminate\Http\Request;

class ComboLocationController extends Controller
{
    //AJAX
    public function byDepartment($id){
        return Province::where('department_id', $id)->get();
    }

    //AJAX
    public function byProvince($id){
        return District::where('province_id', $id)->get();
    }
}
