@extends('layouts.app')
@section('body')
@section('title','新規登録確認画面')



<p><h1>会員登録完了</h1></p>
<h3><a href="{{ route('loginIndex')}}">ログイン画面に戻る</a></h3>
<p><h2>登録内容確認</h2></p>
@foreach ($value as $partOfValue)
<li>{{$partOfValue}}</li>
@endforeach

