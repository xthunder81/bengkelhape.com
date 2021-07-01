<?php

use App\Http\Controllers\AdminAuthController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', function() {
    return view('admin/home');
})->name('test');

Route::group(['middleware' => 'guest:pegawai'], function () {
    Route::get('admin', 'AdminAuthController@login')->name('admin.login');
    Route::post('admin', 'AdminAuthController@postLogin')->name('admin.prosesLogin');
});

Route::group([ 'prefix' => 'pegawai', 'middleware' => 'auth:pegawai'], function () {
    Route::get('admin', 'AdminController@index')->name('admin.home');

    Route::post('logout', 'AdminAuthController@logout')->name('admin.logout');
});
