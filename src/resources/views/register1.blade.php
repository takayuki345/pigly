@extends('layouts.app2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register1.css') }}">
@endsection

@section('content')
<div class="register1__inner">
    <div class="register1__content">
        <div class="register1__menu">
            <h1 class="register1-title">PiGLy</h1>
            <h2 class="register1-subtitle">新規会員登録</h2>
            <div  class="register1-step">STEP1 アカウント情報の登録</div>
        </div>
        <form class="register1__form" action="">
            <div class="register1__form-group">
                <label class="register1__form-label" for="name">お名前</label>
                <input class="register1__form-input" type="text" name="name">
                <ul class="register1__form-error">
                    <li>名前を入力してください</li>
                </ul>
            </div>
            <div class="register1__form-group">
                <label class="register1__form-label" for="email">メールアドレス</label>
                <input class="register1__form-input" type="text" name="name">
                <ul class="register1__form-error">
                    <li>メールアドレスを入力してください</li>
                    <li>メールアドレスは「ユーザー名＠ドメイン」形式で入力してくたさい</li>
                </ul>
            </div>
            <div class="register1__form-group">
                <label class="register1__form-label" for="password">パスワード</label>
                <input class="register1__form-input" type="text" name="name">
                <ul class="register1__form-error">
                    <li>パスワードを入力してください</li>
                </ul>
            </div>
            <div class="register1__form-group-btn">
                <button class="register1__form-submit" type="submit">次に進む</button>
            </div>
            <div class="register1__form-link">
                <a href="">ログインはこちら</a>
            <div>
        </form>
    </div>
</div>
@endsection
