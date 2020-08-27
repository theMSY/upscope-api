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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('api')->get('/clients/{id}/watch', "UpscopeController@watch");
Route::middleware('api')->get('/clients', "UpscopeController@listAllUsers");


Route::middleware('api')
    ->prefix('crank-wheel')
    ->group(function (){
        Route::post('/url', "CrankWheelController@createNoAuthUrl");
        Route::get('/managers', 'CrankWheelController@listManagers');
        Route::post('/user', 'CrankWheelController@createNewUser');
    });
