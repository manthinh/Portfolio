@extends('layouts.app')
@section('body')
@section('title','新規登録フォーム')
<form action="{{ route('sign-up.signUp')}}" method="post">
    @csrf
    
    <h1>新規登録フォーム</h1>
    

    
    <div class="wrap">
        <h2>名前：</h2>
        <div class="form"><input type="text" name="name" placeholder="名前"></div>
        @if ($errors->has('name'))
        <li>{{$errors->first('name')}}</li>
        @endif

        <h2>Eメール：</h2>
        <div class="form"><input type="email" name="email" placeholder="eメール"></div>
        @if ($errors->has('email'))
        <li>{{$errors->first('email')}}</li>
        @endif
                
        <h2>住所：</h2>
        <div class="form"><input type="text" name="address" placeholder="住所"></div>
        @if ($errors->has('address'))
        <li>{{$errors->first('address')}}</li>
        @endif

        <h2>パスワード：</h2>
        <div class="form"><input type="password" name="password" placeholder="パスワード"></div>
        @if ($errors->has('password'))
        <li>{{$errors->first('password')}}</li>
        @endif

        <h2>パスワード確認用：</h2>
        <div class="form"><input type="password" name="confirm-password" placeholder="パスワード確認用"></div>
        @if ($errors->has('confirm-password'))
        <li>{{$errors->first('confirm-password')}}</li>
        @endif
            
    </div>
    <p><input type="submit" value="登録"　class="button"></p>
</form>
@endsection