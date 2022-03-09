<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

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


////////////////////////////////////////////////////////////////////////////////////
//-------------------------- KUMPULAN ROUTES WEBSITE -----------------------------//
////////////////////////////////////////////////////////////////////////////////////

//LOGIN
Route::get('/login' , [SiteController::class, 'login']);
Route::post('/login' , [SiteController::class, 'do_login']);

//REGISTER
Route::get('/register' , [SiteController::class, 'register']);
Route::post('/register' , [SiteController::class, 'do_register']);

//HOME
Route::get('/' , [SiteController::class, 'home']);
Route::get('/home' , [SiteController::class, 'home']);

//KONSULTASI
Route::get('/konsultasi' , [SiteController::class, 'konsultasi']);

//SERVICE
Route::get('/service' , [SiteController::class, 'service']);


////////////////////////////////////////////////////////////////////////////////////
//---------------------------- KUMPULAN ROUTES ADMIN -----------------------------//
////////////////////////////////////////////////////////////////////////////////////

Route::prefix('admin')->group(function () {
    //DASHBOARD ADMIN
    Route::get('/dashboard' , [AdminController::class, 'dashboard']);

    //DATA TEKNISI
    Route::get('/datateknisi' , [AdminController::class, 'datateknisi']);
    // Route::get('/teknisi' , [AdminController::class, 'form_teknisi']);
    Route::post('/teknisi' , [AdminController::class, 'tambah_teknisi']);

    //DATA CUSTOMER
    Route::get('/datacustomer' , [AdminController::class, 'datacustomer']);
});


////////////////////////////////////////////////////////////////////////////////////
//-------------------------- KUMPULAN ROUTES CUSTOMER ----------------------------//
////////////////////////////////////////////////////////////////////////////////////

