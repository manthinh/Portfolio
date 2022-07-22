@extends('layouts.app')
@section('body')
    @section('title','服投稿ページ')

    <p>{{ session('completed_msg')}}</p>
    <form action="{{ route('cloth.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image_path">
        <label>
            <input type="text" name="cloth_id" placeholder="画像id">
        </label>
        <label>
            <input type="text" name="name" placeholder="画像の名前">
        </label>
        <label>
            <input type="text" name="description" placeholder="画像の説明">
        </label>
        <label>
            <input type="text" name="image_type" placeholder="画像の拡張子">
        </label>
        <input type="submit" value="アップロード">
    </form>
    <p>
        <a href="{{ route('admin.myPage') }}">管理者ページに戻る</a>
    </p>
@endsection
