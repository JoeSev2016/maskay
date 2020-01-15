<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Province;
use App\District;
use App\Category;
use App\Advert;
use App\Customer;
use App\Tag;
use Session;

class AdvertController extends Controller
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
        $categories = Category::all();
        $adverts = Advert::orderBy('id', 'desc')->paginate(5);;
        return view('admin.adverts.index')->with(compact('adverts','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $tags = Tag::all();
        $categories = Category::all();
        $departments = Department::all();
        $customers = Customer::all();
        return view('admin.adverts.create')->with(compact('categories', 'departments','tags','customers'));
    }

    //AJAX
    public function byDepartment($id){
        return Province::where('department_id', $id)->get();
    }

    //AJAX
    public function byProvince($id){
        return District::where('province_id', $id)->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
          'category_id' => 'sometimes|exists:categories,id',
          'district_id' => 'sometimes|exists:districts,id',
          'customer_id' => 'sometimes|exists:customers,id',
          'title' => 'required|min:5',
          'extract' => 'required|string|max:255',
          'body' => 'required|min:15',
          'slug' => 'required|alpha_dash|min:5|max:255|unique:adverts,slug',
        ];

        $messages = [
          'category_id.exists' => 'La categoria seleccionada no existe en nuestra base de datos.',
          'district_id.exists' => 'El Distrito seleccionado no existe en nuestra base de datos.',
          'customer_id.exists' => 'El Cliente seleccionado no existe en nuestra base de datos.',
          'title.required' => 'Es necesario ingresar un titulo para el anuncio.',
          'title.min' => 'El titulo debe presentar al menos 5 caracteres.',
          'body.required' => 'Es necesario ingresar una descripcion para el anuncio.',
          'body.min' => 'La descripcion debe presentar al menos 5 caracteres.'
        ];

        $this->validate($request, $rules, $messages);

        $advert = new Advert();
        $advert->category_id = $request->input('category_id') ?: null;
        $advert->district_id = $request->input('district_id') ?: null;
        $advert->customer_id = $request->input('customer_id') ?: null;
        $advert->title = $request->input('title');
        $advert->extract = $request->input('extract');
        $advert->slug = $request->input('slug');
        $advert->body = $request->input('body');
        // $advert->client_id = auth()->user()->id;
        $advert->save();

        $advert->tags()->sync($request->tags, false);

        Session::flash('success',' El Anuncio se ha guardado con exito');
        return redirect()->route('adverts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Advert  $advert
     * @return \Illuminate\Http\Response
     */
    public function show(Advert $advert)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Advert  $advert
     * @return \Illuminate\Http\Response
     */
    public function edit(Advert $advert)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Advert  $advert
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Advert $advert)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Advert  $advert
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advert $advert)
    {
        //
    }
}
