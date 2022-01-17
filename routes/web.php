<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\Jobs;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PeopleController;
use Illuminate\Support\Facades\Http;

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

Route::view('/','home');
Route::view('login','login');
Route::view('registration','registration');

// Route::view('location','location');
// Route::view('create-location','createLocation');
// Route::post('create-location',[LocationController::class,'create']);

Route::resource('location',LocationController::class);
