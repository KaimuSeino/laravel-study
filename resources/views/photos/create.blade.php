@extends('layouts.default')

@section('title', '画像アップロード')
@section('content')
    @if (session()->has('success'))
        <p>{{ session()->get('success') }}</p>
    @endif
    <form action="{{ route('photos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">画像</label>
        <input type="file" name="image">
        <button>アップロード</button>
    </form>
@endsection
