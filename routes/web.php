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

Route::get('/','DashboardController@index')
	->middleware(['auth'])
	->name('dashboard');

Route::middleware('auth')->get('api/docs', function(){
	return view('api/docs');
})->name('apiDocs');

require __DIR__.'/auth.php';
