<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Login with Google, Facebook, Github //

Route::get('/auth/redirect/{provider}', [LoginController::class, 'redirectToProvider'])->name('social.login');
Route::get('/auth/callback/{provider}', [LoginController::class, 'handleProviderCallback'])->name('social.callback');