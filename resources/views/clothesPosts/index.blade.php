@extends('layouts.app')
@section('body')
    @section('title','服一覧')

    <h1>商品一覧</h1>
    @foreach($items as $item)
        <img src="{{ \Illuminate\Support\Facades\Storage::url($item->image_path) }}" width="25%">
        <ul>
            <li>id: {{$item['cloth_id']}}</li>
            <li>名前: {{$item['name']}}</li>
            <li>説明: {{$item['description']}}</li>
            <li>画像の拡張子: {{$item['image_type']}}</li>
        </ul>
    @endforeach
@endsection
