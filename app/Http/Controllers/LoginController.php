<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
// use App\Http\Requests\PostRequest;

class LoginController extends Controller
{
    public function loginIndex() {
        return view('loginIndex',);
    }

    public function form() {
        return view('login.form');
    }
    
    public function signUp(Request $request) {
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'password' =>$request->input('password'),
            ]);

            $validate_rule = $request->validate([
                'name' => 'required|max10',
                'email' => 'required|max10',
                'address' => 'required|max10',
                'password' => 'required|max6',
            ]);

        return redirect()->route('loginIndex');
    }

}
