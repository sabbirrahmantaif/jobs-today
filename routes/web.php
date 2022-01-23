<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\Jobs;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

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

Route::group(['middleware' => ['admin']], function () {
    Route::view('/', 'home');
    Route::post('logout', function (Request $request) {
        if (Session::get('admin')) {
            $request->session()->flush();
            return view('login');
        } else {
            return redirect()->back();
        }
    })->name('logout');

    Route::resource('location', LocationController::class);
    Route::resource('title', TitleController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('company', CompanyController::class);

    // quiz related routes
    Route::get('quiz', [QuizController::class,'getQuizzesByCategory']);
    Route::get('quiz/create/{category_id}',[QuizController::class,'createQuizesByCategory']);
    Route::post('quiz/create',[QuizController::class,'insertQuizesByCategory']);
    Route::delete('quiz/delete/{id}',[QuizController::class,'deleteQuiz']);
});

Route::post('login', [UserController::class, 'admin_login'])->name('login');
Route::get('login', function () {
    if (Session::get('admin')) {
        return redirect()->back();
    } else {
        return view('login');
    }
});
