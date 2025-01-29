@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/edit2.css') }}">
@endsection

@section('content')
<div class="edit2__inner">
    <div class="edit2__content">
        <h2 class="edit2-title">目標体重設定</h2>
        <form class="edit2__form" action="">
            <div class="edit2__form-group">
                <input class="edit2__form-weight" type="text" name="weight"><span> kg</span>
                <ul class="edit2__form-error">
                    <li>体重を入力してください</li>
                    <li>４桁までの数字で入力してください</li>
                    <li>小数点は１桁で入力してください</li>
                </ul>
            </div>
            <div class="edit2__form-group-btn">
                <a class="edit2__form-return" href="#">戻る</a>
                <button class="edit2__form-submit" type="submit">更新</button>
            </div>
        </form>
    </div>
</div>
@endsection
