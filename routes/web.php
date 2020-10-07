<?php

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

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/loginpost', 'AuthController@loginpost');
Route::get('/logout', 'AuthController@logout')->name('logout');

Route::group(['middleware' => 'auth'], function(){
	Route::get('/', function () {
	    return view('dashboard');
	})->name('dashboard');

	Route::resource('users', 'UsersController', [
		'names' => [
			'index'  => 'users',
			'create' => 'users.add',
			'store'  => 'users.store'
		]
	]);

	Route::resource('apotik', 'ApotikController', [
		'names' => [
			'index'  => 'apotik',
			'create' => 'apotik.add',
			'store'  => 'apotik.store'
		]
	]);

	Route::resource('obat', 'ObatController', [
		'names' => [
			'index'  => 'obat',
			'create' => 'obat.add',
			'store'  => 'obat.store'
		]
	]);

	Route::resource('supply', 'SupplyController', [
		'names' => [
			'index'  => 'supply',
			'create' => 'supply.add',
			'store'  => 'supply.store'
		]
	]);

	Route::resource('penjualan', 'PenjualanController', [
		'names' => [
			'index'  => 'penjualan',
			'create' => 'penjualan.add',
			'store'  => 'penjualan.store'
		]
	]);

	Route::resource('pelaporan', 'PelaporanController', [
		'names' => [
			'index'  => 'pelaporan',
		]
	]);
});