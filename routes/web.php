<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\blobImg;
use App\Http\Controllers\PdfController;

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

Route::view('pdf-view','pdf-view');

Route::view('pdf-download','pdf_downl');

//Model - Controllers
Route::get('show-all',[UserController::class,'getData']);

Route::post('registration',[UserController::class,'addData']);

Route::get('fetch',[ListController::class,'fetching']);

Route::post('upload_file',[FileController::class,'uploads']);

Route::get('blobs',[blobImg::class,'blob_imgs']);

Route::get('edit/{id}',[ListController::class,'edit']);

Route::get('delete/{id}',[ListController::class,'delete']);

Route::get('pdf-downloader',[PdfController::class,'create_list']);

Route::get('pdf-gen',[PdfController::class,'create_pdf']);

Route::get('pdf-gen-sample',[PdfController::class,'gen_pdf_sample']);

