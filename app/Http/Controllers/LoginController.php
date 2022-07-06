<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginUserCreateRequest;
// use App\Http\Requests\PostRequest;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function loginIndex() {
        return view('login.Index');
    }

    public function form() {
        return view('login.form');
    }

    public function confirm() {
        return view('login.confirm');
    }
    


    public function signUp(LoginUserCreateRequest $request) {
        $validated = $request->validated();
        // dd($validated);
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'address' => $validated['address'],
            'password' => Hash::make($validated['password']),
            ]);
            // dd($user);

        return redirect()->route('sign-up.confirm');
    }

}
