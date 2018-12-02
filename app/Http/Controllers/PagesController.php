<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	//Funcion direcciona a la página inicial de todo el sistema
    public function getIndex(){
    	//Retorna la vista "start"
    	return view('pages.start');
    }
}
