<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/advert/{id}/department','ComboLocationController@byDepartment');

Route::get('/advert/{id}/province','ComboLocationController@byProvince');

Route::get('/customer/{id}/department','ComboLocationController@byDepartment');

Route::get('/customer/{id}/province','ComboLocationController@byProvince');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
