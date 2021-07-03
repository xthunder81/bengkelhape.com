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
    return view('welcome2');
})->name('test');

Route::group(['middleware' => 'guest:pegawai'], function () {
    Route::get('admin', 'AdminAuthController@login')->name('admin.login');
    Route::post('admin', 'AdminAuthController@postLogin')->name('admin.prosesLogin');
});

Route::group([ 'prefix' => 'admin', 'middleware' => 'auth:pegawai'], function () {
    Route::get('admin', 'AdminController@index')->name('admin.home');

    Route::get('bagian', 'BagianController@index')->name('admin.bagian');
    Route::get('bagian/create', 'BagianController@create')->name('admin.bagian.create');
    Route::post('bagian/store', 'BagianController@store')->name('admin.bagian.store');
    Route::get('bagian/edit/{id}', 'BagianController@edit')->name('admin.bagian.edit');
    Route::patch('bagian/update/{id}', 'BagianController@update')->name('admin.bagian.update');
    Route::delete('bagian/destroy/{id}', 'BagianController@destroy')->name('admin.bagian.destroy');

    Route::get('pegawai', 'AdminController@pegawaiView')->name('admin.pegawai');
    Route::get('pegawai/create', 'AdminController@pegawaiCreate')->name('admin.pegawai.create');
    Route::post('pegawai/store', 'AdminController@PegawaiStore')->name('admin.pegawai.store');
    Route::get('pegawai/edit/{id}', 'AdminController@pegawaiEdit')->name('admin.pegawai.edit');
    Route::patch('pegawai/update/{id}', 'AdminController@pegawaiUpdate')->name('admin.pegawai.update');
    Route::delete('pegawai/destroy/{id}', 'AdminController@pegawaiDestroy')->name('admin.pegawai.destroy');

    Route::get('service', 'ServiceController@index')->name('admin.service');
    Route::get('service/create', 'ServiceController@create')->name('admin.service.create');
    Route::post('service/store', 'ServiceController@store')->name('admin.service.store');
    Route::get('service/edit/{id}', 'ServiceController@edit')->name('admin.service.edit');
    Route::patch('service/update/{id}', 'ServiceController@update')->name('admin.service.update');
    Route::delete('service/destroy/{id}', 'ServiceController@destroy')->name('admin.service.destroy');

    Route::post('logout', 'AdminAuthController@logout')->name('admin.logout');
});
