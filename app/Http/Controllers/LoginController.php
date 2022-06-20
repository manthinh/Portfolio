<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginIndex() {
        return view('loginIndex',);
    }

    public function form() {
        return view('Form',[
            'name' => '新規登録',
            'email' => '新規登録',
            'address' => '新規登録'
        ]);
    }

    public function signUp() {
        return view('Form');
    }

}
