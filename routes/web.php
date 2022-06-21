<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;

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


//認証機能
Auth::routes();


Route::get('/',[LoginController::class, 'loginIndex'])->name('loginIndex');

Route::get('/sign-up',[LoginController::class, 'form'])->name('form');
Route::post('store/sign-up',[LoginController::class, 'signUp'])->name('signUp');







