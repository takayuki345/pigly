@extends('layouts.app2')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/register2.css') }}">
@endsection

@section('content')
    <div class="register2__inner">
        <div class="register2__content">
            <div class="register2__menu">
                <h1 class="register2-title">PiGLy</h1>
                <h2 class="register2-subtitle">新規会員登録</h2>
                <div class="register2-step">STEP2 体重データの入力</div>
            </div>
            <form class="register2__form" action="">
                <div class="register2__form-group">
                    <label class="register2__form-label" for="weight">現在の体重</label>
                    <input class="register2__form-input" type="text" name="weight"><span> kg</span>
                    <ul class="register2__form-error">
                        <li>現在の体重を入力してください</li>
                        <li>４桁までの数字で入力してください</li>
                        <li>小数点は１桁で入力してください</li>
                    </ul>
                </div>
                <div class="register2__form-group">
                    <label class="register2__form-label" for="target-weight">目標の体重</label>
                    <input class="register2__form-input" type="text" name="target-weight"><span> kg</span>
                    <ul class="register2__form-error">
                        <li>目標の体重を入力してください</li>
                        <li>４桁までの数字で入力してください</li>
                        <li>小数点は１桁で入力してください</li>
                    </ul>
                </div>
                <div class="register2__form-group-btn">
                    <button class="register2__form-submit" type="submit">アカウント作成</button>
                </div>
            </form>
        </div>
    </div>
@endsection
