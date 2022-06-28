<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginUserCreateRequest;
// use App\Http\Requests\PostRequest;

use App\Models\User;

class LoginController extends Controller
{
    protected $loginUserCreateRequest;


    public function loginIndex() {
        return view('login.loginIndex');
    }

    public function form() {
        return view('login.form');
    }
    
    public function signUp(LoginUserCreateRequest $request) {
        $validated = $request->validated();
        dd($validated['name'],$validated['email']);
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'address' => $validated['address'] ,
            'password' => $validated['password'],
            ]);
            dd($user);

        return redirect()->route('loginIndex');
    }

}
