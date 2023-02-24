<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {

//     dd($request);

//     return $request->user();
// });



Route::get('/listAll', 'api\UsuariosController@listAll');
Route::post('/create', 'api\UsuariosController@create');
Route::get('/list/{id}', 'api\UsuariosController@list');
Route::put('/update/{id}', 'api\UsuariosController@update');
Route::delete('/delete/{id}', 'api\UsuariosController@delete');

