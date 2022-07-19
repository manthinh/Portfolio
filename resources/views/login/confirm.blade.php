@extends('layouts.app')
@section('body')
@section('title','新規登録確認画面')



<h1>会員登録完了</h1>
<h3><a href="{{ route('loginIndex')}}">ログイン画面に戻る</a></h3>
<h2>登録内容確認</h2>

<ul>
    <li>名前：{{$value['name']}}</li>
    <li>Eメール：{{$value['email']}}</li>
    <li>住所：{{$value['address']}}</li>
    <li>パスワード：{{$value['password']}}</li>
</ul>
@endsection


