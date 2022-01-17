<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\Jobs;
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

// Route::view('/','welcome');
Route::get('/', function () {
    // return view('welcome');
    return redirect('login');
});
Route::view('login','login');
Route::view('registration','registration');

// Route::view('company','company');
Route::get('company',[CompanyController::class,'index']);
Route::post('company',[CompanyController::class,'create']);
Route::get('company/edit/{id}',[CompanyController::class,'edit']);
Route::post('company/update/{id}',[CompanyController::class,'update']);
Route::get('company/delete/{id}',[CompanyController::class,'delete']);

Route::get('jobs/{title?}/{location?}/{category?}',[Jobs::class,'get']);

Route::get('todos', function ()
{
    // return Http::get('https://jsonplaceholder.typicode.com/todos');
    $todos = Http::get('https://jsonplaceholder.typicode.com/todos');
    // return json_decode(($todos));
    // return $todos;
    return view('todo',["todos"=>json_decode($todos)]);
});

Route::get('user', [PeopleController::class,'get']);
Route::post('user', [PeopleController::class,'insert']);

Route::get('category',[CategoryController::class,'index']);
