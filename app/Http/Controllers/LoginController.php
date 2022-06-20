<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Http\Requests\PostRequest;

class LoginController extends Controller
{
    public function loginIndex() {
        return view('loginIndex',);
    }

    public function form() {
        return view('form',[
            'name' => '新規登録',
            'email' => '新規登録',
            'address' => '新規登録'
        ]);
    }

    public function signUp(PostRequest $request) {
        $user = User::form([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
        ]);

        return redirect()->route('form');
    }

}
