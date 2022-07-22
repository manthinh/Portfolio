@extends('layouts.app')
@section('body')
    @section('title','服投稿ページ')


    <form action="{{ route('cloth.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image_path">
        <input type="int" name="cloth_id" placeholder="画像id">
        <input type="text" name="name" placeholder="画像の名前">
        <input type="text" name="description" placeholder="画像の説明">
        <input type="text" name="image_type" placeholder="画像の拡張子">
        <input type="submit" value="アップロード">

    </form>
@endsection
