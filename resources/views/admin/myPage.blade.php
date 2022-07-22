@extends('layouts.app')
@section('body')
@section('title','管理者画面')
<h1>管理画面</h1>
<p>ここは商品投稿などができるページです。</p>
    <a href="{{ route('cloth.index') }}">服投稿一覧</a>
    <a href="{{ route('cloth.create') }}">服の投稿</a>
@endsection
