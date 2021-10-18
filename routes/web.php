<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;


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
    return view('index');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'admin','auth'], function () {

    Route::get('/admin', function() {
        return view('admin.dashboard');
    });

    Route::get('/role-register','App\Http\Controllers\Admin\DashboardController@registered');
    Route::get('/role-edit/{id}','App\Http\Controllers\Admin\DashboardController@registerededit');
    Route::put('/role-register-update/{id}','App\Http\Controllers\Admin\DashboardController@registeredupdate');
    Route::delete('/role-delete/{id}','App\Http\Controllers\Admin\DashboardController@registereddelete');
        
    
    

});
