<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginUserCreateRequest;



use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function loginIndex() {
        return view('login.Index');
    }

    public function signIn(Request $request) {
        $email =  $request->input('email');
        $password =  $request->input('password');
        $userInfo = User::where('email',$email)->first();
        if ($userInfo && Hash::check($password,$userInfo->password)) {
            $request->session()->put('doneLogin',$userInfo->id);
            return redirect()->route('myPage.myPage');
        }
        session()->flash('flash_massage','登録済みのEメールとパスワードが一致しません。');
        return redirect()->route('loginIndex');
        
    }

    public function myPage() {
    return view('myPage');
    }

    public function form() {
        return view('login.form');
    }
    
    public function signUp(LoginUserCreateRequest $request) {
        $validated = $request->validated();
        $request->session()->put('usersInfo',$validated);
        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'address' => $validated['address'],
            'password' => Hash::make($validated['password']),
            ]);
            return redirect()->route('sign-up.confirm');
        }
        
        public function confirm(Request $request) {
            $value = $request->session()->get('usersInfo');
            return view('login.confirm',compact('value'));
        }

}
