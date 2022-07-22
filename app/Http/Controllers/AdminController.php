<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\clothPost;
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
     * 服の一覧表示
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('clothesPosts.index');
    }

    /**
     * 服の投稿機能
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(Request $request)
    {
        return view('clothesPosts.clothPost');
    }

    /**
     * 服の投稿保存機能
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        $cloth_id = $request->input('cloth_id');
        $name = $request->input('name');
        $description = $request->input('description');
        $image_type = $request->input('image_type');
        $img = $request->file('image_path');
        $path = $img->store('img', 'public');
        $post = clothPost::create([
            'image_path' => $path,
            'cloth_id' => $cloth_id,
            'name' => $name,
            'description' => $description,
            'image_type' => $image_type,
        ]);

        $request->session()->put('clothInfo',$post->cloth_id);

        session()->flash('completed_msg','服の投稿が完了しました。');
        return redirect()->route('cloth.create');
    }
}
