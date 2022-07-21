<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function loginIndex()
    {
        return view('admin.index');
    }

    /**
     * 管理者ログイン機能
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function signIn(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $adminsInfo = Admin::where('email', $email)->first();
        if ($adminsInfo && $password) {
            $request->session()->put('doneLogin', $adminsInfo->id);
            return redirect()->route('admin.myPage');
        }
        session()->flash('flash_massage', '登録済みのEメールとパスワードが一致しません。');
        return redirect()->route('admin.loginIndex');
    }

    /**
     * マイページ表示
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function myPage()
    {
        return view('admin.myPage');
    }


    /**
     * 服の投稿機能
     *
     * @return void
     */
    public function clothPost() {

    }
}
