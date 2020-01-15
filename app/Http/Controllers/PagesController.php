<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdvertImage;
use App\Category;
use App\District;
use App\Advert;
use Session;

class PagesController extends Controller
{

	//Funcion direcciona a la página inicial de todo el sistema
    public function getIndex(){
    	$adverts = Advert::all();
    	$images = AdvertImage::all();

        $categories = Category::all();
    	// AdvertImage::where('featured', true)->first();
    	// foreach ($images as $image) {
    	// 	$imgfeatured = $image::where('featured', true)->first();
    	// 	if(!$imgfeatured){
    	// 		$imgfeatured = $image::orderBy('created_at', 'desc')->first();
    	// 	}
    	// }
    	// dd($imgfeatured);
    	//Retorna la vista "start"
    	return view('pages.start')->with(compact('adverts','images','categories'));
    }

    //Obtiene los datos de un anuncio
    public function getSingle($slug){
        $advert = Advert::where('slug','=',$slug)->first();
        $advertId = $advert->id;
        $advertImages = AdvertImage::orderBy('featured', 'desc')->where('advert_id', $advertId)->get();
        return view('pages.single')->with(compact('advert', 'advertImages'));
    }

    public function getSearch(Request $request){
        
        if ($request->input('texto')==null && $request->input('category_id')==0 && $request->input('district_id')==0) {

            Session::flash('warning','Ingrese alguna palabra o seleccione una Categoria o un Distrito.');
            return back();

        }else{
            $categories = Category::all();
            $texto = $request->input('texto');
            $idCategory = $request->input('category_id');
            $adverts = Advert::orderBy('id', 'asc')->searchCategory($idCategory)->searchTagName($texto)->paginate(20);
            return view('pages.search')->withAdverts($adverts)->withCategories($categories);
        }

    }

}
