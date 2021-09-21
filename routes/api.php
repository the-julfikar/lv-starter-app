<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\lv_api;
use App\Http\Controllers\ApisController;
use App\Http\Controllers\UserLoginController;

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

Route::get('data',[lv_api::class,'data']);

Route::get('ls',[lv_api::class,'list']);

Route::post('entry',[lv_api::class,'add']);

Route::put('modify',[lv_api::class,'modify']);

Route::delete('minus/{id}',[lv_api::class,'minus']);

Route::get('search/{condition}',[lv_api::class,'search']);

Route::post('valid',[lv_api::class,'validity']);

//api with resources
Route::apiResource("api_resource",ApisController::class);

//api with sanctum
Route::post("creds",[UserLoginController::class,'index']);

