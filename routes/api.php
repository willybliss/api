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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    
    return $request->user();
});

//list students
Route::get('students','StudentController@index');

Route::get('student/{id}','StudentController@show');

Route::post('student','StudentController@store');

Route::put('student','StudentController@store');

Route::delete('student/{id}','StudentController@destroy');


