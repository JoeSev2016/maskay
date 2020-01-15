<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Esta ruta dirige a la vista principal del sistema
Route::get('/', 'PagesController@getIndex');

Route::get('/search', 'PagesController@getSearch');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Pagina Principal
Route::get('advert/{slug}', ['as' => 'pages.single', 'uses' => 'PagesController@getSingle'])->where('slug', '[\w\d\-\_]+');

//Categorias
Route::resource('categories','CategoryController', ['except' => ['create']]);//Or only

//Anuncios
Route::resource('adverts','AdvertController');//Or only

//Customers
Route::resource('customers','CustomerController');//Or only

//Tags
Route::resource('tags','TagController');//Or only

//Users
Route::resource('users','UserController');//Or only

//Imagenes
Route::resource('images','AdvertImageController', ['except' => ['destroy']]);//Or only
Route::delete('images/{idImg}/{idAdv}',['as'=>'images.destroy', 'uses'=>'AdvertImageController@destroy']);
Route::get('images/select/{idImg}/{idAnu}',['as'=>'images.select', 'uses'=>'AdvertImageController@select']);
Route::post('upload','AdvertImageController@upload')->name('upload');//Or only