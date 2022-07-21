@extends('layouts.app')
@section('body')
    @section('title','ログイン画面')

    <p>{{ session('flash_massage')}}</p>
    <form action="{{ route('login.signIn')}}" method="post">
        @csrf

        <h1>ログイン画面</h1>
        <p>
            <a href="{{ route('sign-up.form')}}">新規登録はこちら</a>
            <a href="{{ route('admin.loginIndex')}}">developer only</a>
        </p>

        <p>登録済みのEメール、パスワードをご入力の上「ログイン」ボタンを押してください。</p>

        <input type="email" name="email" placeholder="Eメール" required>


        <input type="password" name="password" placeholder="パスワード" required>

        <input type="submit" value="ログイン">
    </form>
@endsection
