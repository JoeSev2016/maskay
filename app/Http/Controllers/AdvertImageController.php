<?php

namespace App\Http\Controllers;

use App\Advert;
use App\AdvertImage;
use Illuminate\Http\Request;
use App\Http\Requests\ImageRequest;
use File;
use Session;

class AdvertImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Guardar la imagen en el proyecto
        $file = $request->file('image');
        $path = public_path() . "/images/adverts";
        $fileName = uniqid() . $file->getClientOriginalName();
        $moved = $file->move($path, $fileName);

        //Si se ha guardado la img se crea el registro
        if ($moved) {
           //Crear 1 registro en la tabla advert_images
            $advertImage = new AdvertImage();
            $advertImage->image = $fileName;
            // $advertImage->featured = false;
            $advertImage->advert_id = $request->advert_id;
            $advertImage->save(); 
        }

        return back();
    }

    public function upload(ImageRequest $request){

        if ($request->hasFile('image')) {

            $imagename = uniqid() . $request->image->getClientOriginalName();
            $stored = $request->image->storeAs('public/adverts/' . $request->advert_slug, $imagename);

            if($stored){
                $advertImage = new AdvertImage();
                $advertImage->image = $imagename;
                $advertImage->advert_id = $request->advert_id;
                $advertImage->save(); 
            }

        }

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AdvertImage  $advertImage
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $advert = Advert::find($id);
        $images = $advert->images;
        return view('admin.adverts.images.index')->with(compact('advert','images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AdvertImage  $advertImage
     * @return \Illuminate\Http\Response
     */
    public function edit(AdvertImage $advertImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AdvertImage  $advertImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdvertImage $advertImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AdvertImage  $advertImage
     * @return \Illuminate\Http\Response
     */
    public function destroy($idImg, $idAdv)
    {
        //Primero eliminamos el archivo
        $advertImage = AdvertImage::find($idImg);
        $advert = Advert::find($idAdv);
        if (substr($advertImage->image, 0, 4) == "http") {
            $deleted = true;
        }else{
            $fullPath = public_path() . '/storage/adverts/'. $advert->slug . '/' . $advertImage->image;
            $deleted = File::delete($fullPath);
        }
        //Segundo eliminamos la img en la bd
        if ($deleted) {
            $advertImage->delete();
        }

        return back();
    }

    public function select($idImg, $idAnu)
    {
        AdvertImage::where('advert_id',$idAnu)->update([
            'featured' => false
        ]);
        $advertImage = AdvertImage::find($idImg);
        $advertImage->featured = true;
        $advertImage->save();
        return back();
    }
}
