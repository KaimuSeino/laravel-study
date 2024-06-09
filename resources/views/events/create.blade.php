@extends('layouts.default')

@section('title', 'イベント登録')
@section('content')
    @if (session()->has('success'))
        <p>{{ session()->get('success') }}</p>
    @endif
    <form action="{{ route('events.store') }}" method="POST">
        @csrf
        <label for="">イベント名</label>
        <input type="text" name="title">
        <button type="submit">送信</button>
    </form>
@endsection
