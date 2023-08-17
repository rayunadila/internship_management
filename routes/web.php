<?php

use App\Http\Controllers\AttendancesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ApprentinceController;
use App\Http\Controllers\DailyActivityController;
use App\Http\Controllers\ApprentinceFileController;

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
    Route::get('/index_sertificate', 'index_sertificate')->name('index_sertificate');
    Route::get('/create', 'create')->name('create');
    Route::get('/accept/{id}', 'accept')->name('accept');
    Route::get('/create_accept/{id}', 'create_accept')->name('create_accept');
    Route::get('/reject/{id}', 'reject')->name('reject');
    Route::get('/create_reject/{id}', 'create_reject')->name('create_reject');
    Route::get('/create_request', 'create_request')->name('create_request');
    Route::get('/create_sertificate/{id}', 'create_sertificate')->name('create_sertificate');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::get('/show/{id}', 'show')->name('show');
    Route::put('/accepted/{id}', 'accepted')->name('accepted');
    Route::put('/rejected/{id}', 'rejected')->name('rejected');
    Route::get('/datatable', 'datatable')->name('datatable');

    // datapeserta utk user
    Route::get('/datatable_student', 'datatable_student')->name('datatable_student');
    Route::get('/datatable_request', 'datatable_request')->name('datatable_request');
    Route::get('/datatable_sertificate', 'datatable_sertificate')->name('datatable_sertificate');
    Route::get('/datatable_sertificate_student', 'datatable_sertificate_student')->name('datatable_sertificate_student');
    Route::post('/store', 'store')->name('store');
    Route::post('/store_request', 'store_request')->name('store_request');
    Route::put('/update/{id}', 'update')->name('update');
    Route::put('/update_confirm/{id}', 'update_confirm')->name('update_confirm');
    Route::put('/update_sertificate/{id}', 'update_sertificate')->name('update_sertificate');
    Route::delete('/destroy/{id}', 'destroy')->name('destroy');
});

// User
Route::group(['controller' => UserController::class, 'prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/datatable', 'datatable')->name('datatable');
    Route::get('/create', 'create')->name('create');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::get('/show/{id}', 'show')->name('show');
    Route::get('/profile/{id}', 'profile')->name('profile');
    Route::post('/store', 'store')->name('store');
    Route::put('/update/{id}', 'update')->name('update');
    Route::put('/update_profile/{id}', 'update_profile')->name('update_profile');
    Route::put('/update_password/{id}', 'update_password')->name('update_password');
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
    Route::get('/datatable_student', 'datatable_student')->name('datatable_student');
    Route::get('/report_pdf/{id}', 'report_pdf')->name('report_pdf');
    Route::post('/store', 'store')->name('store');
    Route::put('/update/{id}', 'update')->name('update');
    Route::delete('/destroy/{id}', 'destroy')->name('destroy');
});


// Attendance
Route::group(['controller' => AttendancesController::class, 'prefix' => 'attendance', 'as' => 'attendance.'], function () {
    // Route::get('/', 'index')->name('index');
    // Route::get('/report_pdf', 'report_pdf')->name('report_pdf');
    // Route::get('/create', 'create')->name('create');
    // Route::get('/show/{id}', 'show')->name('show');
    // Route::get('/datatable', 'datatable')->name('datatable');
    // Route::get('/datatable_student', 'datatable_student')->name('datatable_student');
    // Route::post('/store', 'store')->name('store');
    // Route::delete('/destroy/{id}', 'destroy')->name('destroy');

    /* Data Table */
    Route::get('/datatable', 'datatable')->name('datatable');
    Route::get('/datatable_student', 'datatable_student')->name('datatable_student');


    /* Store & Update */
    Route::post('/store_present_in', 'store_present_in')->name('store_present_in');
    Route::put('/store_present_out', 'store_present_out')->name('store_present_out');
    Route::delete('/destroy/{id}', 'destroy')->name('destroy');

    /* Views */
    Route::get('/', 'index')->name('index');
    Route::get('/create_present', 'create_present')->name('create_present');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::get('/show/{id}', 'show')->name('show');
    Route::get('/report_pdf', 'report_pdf')->name('report_pdf');
});

// Apprentince File
Route::group(['controller' => ApprentinceFileController::class, 'prefix' => 'apprentince_file', 'as' => 'apprentince_file.'], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::get('/show/{id}', 'show')->name('show');
    Route::get('/accepted/{id}', 'accepted')->name('accepted');
    Route::get('/not_complete/{id}', 'not_complete')->name('not_complete');
    Route::get('/datatable', 'datatable')->name('datatable');
    Route::get('/datatable_student', 'datatable_student')->name('datatable_student');
    Route::post('/store', 'store')->name('store');
    Route::put('/update/{id}', 'update')->name('update');
    Route::delete('/destroy/{id}', 'destroy')->name('destroy');
});
