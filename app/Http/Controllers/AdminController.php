<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function loginIndex() {
        return view('admin.index');
    }

    public function signIn(Request $request) {
        $email = $request->input('email');
        $password = $request->input('password');
        $adminsInfo = Admin::where('email',$email)->first();
        if ($adminsInfo && $password) {
            $request->session()->put('doneLogin',$adminsInfo->id);
            return redirect()->route('admin.myPage');
        }
        session()->flash('flash_massage','登録済みのEメールとパスワードが一致しません。');
        return redirect()->route('admin.loginIndex');
    }

    public function myPage() {
        return view('admin.myPage');
    }
}
