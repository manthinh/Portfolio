@extends('layouts.app')
@section('body')
@section('title','管理者ログイン画面')

<p>{{ session('flash_massage')}}</p>
<form action="{{ route('admin.signIn')}}" method="post">
    @csrf
    
    <h1>管理者ログイン画面</h1>  

    <p>Eメール、パスワードをご入力の上「ログイン」ボタンを押してください。</p>

    <input type="id" name="email" placeholder="Eメール" required>

    <input type="password" name="password" placeholder="パスワード" required>

    <input type="submit" value="ログイン"　class = button>
</form>
@endsection