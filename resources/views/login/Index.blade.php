@extends('layouts.app')
@section('body')
@section('title','ログイン画面')
<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title') -ログイン画面</title>
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>


            <h1>ログイン画面</h1>
            <a href="{{ route('sign-up.form')}}">新規登録はこちら</a>

<p>ユーザーID、パスワードをご入力の上「ログイン」ボタンを押してください。</p>

<input type="id" name="user_id" placeholder="ユーザーID">
<input type="password" name="password" placeholder="パスワード">
<input type="submit" value="ログイン"　class = button>