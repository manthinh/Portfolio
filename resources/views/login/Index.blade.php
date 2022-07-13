@extends('layouts.app')
@section('body')
@section('title','ログイン画面')


            <h1>ログイン画面</h1>
            <a href="{{ route('sign-up.form')}}">新規登録はこちら</a>

<p>ユーザーID、パスワードをご入力の上「ログイン」ボタンを押してください。</p>

<input type="id" name="user_id" placeholder="ユーザーID">
<input type="password" name="password" placeholder="パスワード">
<input type="submit" value="ログイン"　class = button>
@endsection