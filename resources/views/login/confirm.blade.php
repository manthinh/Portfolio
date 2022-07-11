@extends('layouts.app')
@section('body')
@section('title','新規登録確認画面')


<div>
    <div class="Title"><p>会員登録完了</p>
    <a href="{{ route('loginIndex')}}">ログイン画面に戻る</a>
    <p>登録内容確認</p>
    @foreach ($value as $partOfValue)
    <p>{{$partOfValue}}</p>
    @endforeach
</div>
</div>
