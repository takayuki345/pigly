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
        <form class="login__form" action="">
            <div class="login__form-group">
                <label class="login__form-label" for="email">メールアドレス</label>
                <input class="login__form-input" type="text" name="name">
                <ul class="login__form-error">
                    <li>メールアドレスを入力してください</li>
                    <li>メールアドレスは「ユーザー名＠ドメイン」形式で入力してくたさい</li>
                </ul>
            </div>
            <div class="login__form-group">
                <label class="login__form-label" for="password">パスワード</label>
                <input class="login__form-input" type="text" name="name">
                <ul class="login__form-error">
                    <li>パスワードを入力してください</li>
                </ul>
            </div>
            <div class="login__form-group-btn">
                <button class="login__form-submit" type="submit">ログイン</button>
            </div>
            <div class="login__form-link">
                <a href="">アカウント作成はこちら</a>
            <div>
        </form>
    </div>
</div>
@endsection
