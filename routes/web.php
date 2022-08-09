<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
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



Route::get('/',[LoginController::class, 'loginIndex'])->name('loginIndex');

//新規登録機能
Route::name('sign-up.')->group(function () {
    Route::get('/sign-up',[LoginController::class, 'form'])->name('form');
    Route::post('/store/sign-up',[LoginController::class, 'signUp'])->name('signUp');
    Route::get('/store/sign-up/confirm',[LoginController::class, 'confirm'])->name('confirm');
    
});

// ログイン機能
Route::name('login.')->group(function (){
    Route::post('/sign-in',[LoginController::class, 'signIn'])->name('signIn');
});

// マイページ
Route::name('myPage.')->group(function (){
    Route::get('/myPage',[LoginController::class, 'myPage'])->name('myPage');
});

//管理者ログイン画面
Route::name('admin.')->group(function (){
    Route::get('/admin',[AdminController::class, 'loginIndex'])->name('loginIndex');
    Route::post('/admin/sign-in',[AdminController::class, 'signIn'])->name('signIn');
    Route::get('/admin/myPage',[AdminController::class, 'myPage'])->name('myPage');
});







