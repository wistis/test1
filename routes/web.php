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

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth' ])->prefix('dashboard')->group( function () {
     Route::get('/',  'App\Http\Controllers\HomeController@dashboard')->name('dashboard') ;
     Route::get('/dashboard/pdf',  'App\Http\Controllers\HomeController@getpdf')->name('dashboard.pdf') ;
     Route::resource('users',App\Http\Controllers\UserController::class);
}) ;



require __DIR__.'/auth.php';
