<?php

use App\Http\Controllers\AttendancesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ApprentinceController;
use App\Http\Controllers\DailyActivityController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

// Dashboard
Route::get('/home', [HomeController::class, 'index'])->name('home');

// apprentince

Route::group(['controller' => ApprentinceController::class, 'prefix' => 'apprentince', 'as' => 'apprentince.'], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/index_request', 'index_request')->name('index_request');
    Route::get('/create', 'create')->name('create');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::get('/show/{id}', 'show')->name('show');
    Route::get('/accepted/{id}', 'accepted')->name('accepted');
    Route::get('/rejected/{id}', 'rejected')->name('rejected');
    Route::get('/datatable', 'datatable')->name('datatable');
    Route::get('/datatable_request', 'datatable_request')->name('datatable_request');
    Route::post('/store', 'store')->name('store');
    Route::post('/store_request', 'store_request')->name('store_request');
    Route::put('/update/{id}', 'update')->name('update');
    Route::put('/update_confirm/{id}', 'update_confirm')->name('update_confirm');
    Route::delete('/destroy/{id}', 'destroy')->name('destroy');
});

// User
Route::group(['controller' => UserController::class, 'prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/datatable', 'datatable')->name('datatable');
    Route::get('/create', 'create')->name('create');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::get('/show/{id}', 'show')->name('show');
    Route::post('/store', 'store')->name('store');
    Route::put('/update/{id}', 'update')->name('update');
    Route::delete('/destroy/{id}', 'destroy')->name('destroy');
});

// Role
Route::group(['controller' => RoleController::class, 'prefix' => 'role', 'as' => 'role.'], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/datatable', 'datatable')->name('datatable');
    Route::get('/create', 'create')->name('create');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::get('/show/{id}', 'show')->name('show');
    Route::post('/store', 'store')->name('store');
    Route::put('/update/{id}', 'update')->name('update');
    Route::delete('/destroy/{id}', 'destroy')->name('destroy');
});

// Daily Activity
Route::group(['controller' => DailyActivityController::class, 'prefix' => 'daily_activity', 'as' => 'daily_activity.'], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::get('/show/{id}', 'show')->name('show');
    Route::get('/accepted/{id}', 'accepted')->name('accepted');
    Route::get('/datatable', 'datatable')->name('datatable');
    Route::post('/store', 'store')->name('store');
    Route::put('/update/{id}', 'update')->name('update');
    Route::delete('/destroy/{id}', 'destroy')->name('destroy');
});


// Attendance

Route::group(['controller' => AttendancesController::class, 'prefix' => 'attendance', 'as' => 'attendance.'], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::get('/show/{id}', 'show')->name('show');
    Route::get('/datatable', 'datatable')->name('datatable');
    Route::post('/store', 'store')->name('store');
    Route::put('/update/{id}', 'update')->name('update');
    Route::delete('/destroy/{id}', 'destroy')->name('destroy');
});
