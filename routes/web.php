<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\blobImg;

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

Route::get('/', function () {
    return view('welcome');
});

Route::view('index','index');

Route::view('registration','registration');

//Route::view('show','show');

Route::view('file-process','file_process');

Route::view('tables','tables'); //Sample bootstrap tables | Bootstrap

Route::view('icons','icons');

Route::view('navicon','navicon');

Route::view('images','imgs');

Route::view('modals','modals');
Route::view('modals-f','modals-form');

//Model - Controllers
Route::get('show-all',[UserController::class,'getData']);

Route::post('registration',[UserController::class,'addData']);

Route::get('fetch',[ListController::class,'fetching']);

Route::post('upload_file',[FileController::class,'uploads']);

Route::get('blobs',[blobImg::class,'blob_imgs']);
