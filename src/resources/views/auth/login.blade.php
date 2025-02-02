@extends('layouts.app2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="login__inner">
    <div class="login__content">
        <div class="login__menu">
            <h1 class="login-title">PiGLy</h1>
            <h2 class="login-subtitle">ログイン</h2>
        </div>
        <form class="login__form" action="/login" method="post">
            @csrf
            <div class="login__form-group">
                <label class="login__form-label" for="email">メールアドレス</label>
                <input class="login__form-input" type="text" name="email" value="{{ old('email') }}">
                <ul class="login__form-error">
                    @error('email')
                    <li>{{ $message }}</li>
                    @enderror
                </ul>
            </div>
            <div class="login__form-group">
                <label class="login__form-label" for="password">パスワード</label>
                <input class="login__form-input" type="text" name="password">
                <ul class="login__form-error">
                    @error('password')
                    <li>{{ $message }}</li>
                    @enderror
                </ul>
            </div>
            <div class="login__form-group-btn">
                <button class="login__form-submit" type="submit">ログイン</button>
            </div>
            <div class="login__form-link">
                <a href="/register/">アカウント作成はこちら</a>
            <div>
        </form>
    </div>
</div>
@endsection
