<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobController;
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

Route::group(['prefix' => 'admin'], function () {
    Route::get('login', function () {
        if (Session::get('admin')) {
            return redirect('/admin');
        } else {
            return view('admin.login');
        }
    });
    Route::post('login', function (Request $request) {
        if ($request->email === 'admin@gmail.com' && $request->password === 'password') {
            session()->put('admin', true);
            return redirect('admin');
        } else {
            return redirect()->back()->with('res', ['type' => 'danger', 'message' => 'credentials not matched']);
        }
    });
    Route::group(['middleware' => 'admin'], function () {
        Route::view('/', 'admin.index');
        Route::post('logout', function () {
            if (Session::get('admin')) {
                session()->forget('admin');
                return redirect('admin/login');
            } else {
                return redirect()->back();
            }
        });
        Route::resource('title', TitleController::class);
        Route::resource('category', CategoryController::class);
        Route::resource('company', CompanyController::class)->except(['edit','update']);
        Route::post('approve-company', [CompanyController::class, 'approveCompany'])->name('approve-company');
        Route::post('disapprove-company', [CompanyController::class, 'disapproveCompany'])->name('disapprove-company');

        // quiz related routes
        Route::get('quiz', [QuizController::class, 'getQuizzesByCategory']);
        Route::get('quiz/create/{category_id}', [QuizController::class, 'createQuizesByCategory']);
        Route::post('quiz/create', [QuizController::class, 'insertQuizesByCategory']);
        Route::delete('quiz/delete/{id}', [QuizController::class, 'deleteQuiz']);
    });
});



Route::group(['middleware' => 'company'], function () {
    Route::view('/', 'company.index');
    Route::get('company/{company}/edit',[CompanyController::class,'edit']);
    Route::post('company/{company}',[CompanyController::class,'update']);
    Route::post('/logout', function () {
        session()->forget('company');
        return redirect()->back();
    });
    Route::resource('job', JobController::class);
});

Route::get('registration', function () {
    if (Session::get('company')) {
        return redirect()->back();
    } else {
        return view('company.registration');
    }
});
Route::post('registration', [CompanyController::class, 'registration']);

Route::get('login', function () {
    if (Session::get('company')) {
        return redirect('/');
    } else {
        return view('company.login');
    }
});
Route::post('login', [CompanyController::class, 'login']);
