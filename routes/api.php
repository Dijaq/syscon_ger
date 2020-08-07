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

Route::get("cuenta-tipos", "CuentaTiposController@index");
Route::post("cuenta-tipos", "CuentaTiposController@store");
Route::get("cuenta-tipos/{id}", "CuentaTiposController@show");
Route::put("cuenta-tipos/{id}", "CuentaTiposController@update");
Route::delete("cuenta-tipos/{id}", "CuentaTiposController@destroy");

Route::get("canal-llegadas", "CanalLlegadasController@index");
Route::post("canal-llegadas", "CanalLlegadasController@store");
Route::get("canal-llegadas/{id}", "CanalLlegadasController@show");
Route::put("canal-llegadas/{id}", "CanalLlegadasController@update");
Route::delete("canal-llegadas/{id}", "CanalLlegadasController@destroy");

Route::get("cuentas", "CuentasController@index");
Route::post("cuentas", "CuentasController@store");
Route::get("cuentas/{id}", "CuentasController@show");
Route::put("cuentas/{id}", "CuentasController@update");
Route::delete("cuentas/{id}", "CuentasController@destroy");

Route::get("ubigeo_distritos", "UbigeoController@ubigeoDistritos");
