@extends('layouts.app')
@section('body')
@section('title','ログイン画面')

<p>{{ session('flash_massage')}}</p>
<form action="{{ route('login.signIn')}}" method="post">
    @csrf

    <h1>ログイン画面</h1>        
    <a href="{{ route('sign-up.form')}}">新規登録はこちら</a>

    <p>登録済みのEメール、パスワードをご入力の上「ログイン」ボタンを押してください。</p>

    <input type="id" name="email" placeholder="Eメール" required>
    @if ($errors->has('email'))
        <li>{{$errors->first('email')}}</li>
    @endif

    <input type="password" name="password" placeholder="パスワード" required>
    @if ($errors->has('password'))
        <li>{{$errors->first('password')}}</li>
    @endif
    <input type="submit" value="ログイン"　class = button>
</form>
@endsection