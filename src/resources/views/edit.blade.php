@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/edit.css') }}">
@endsection

@section('content')
<div class="edit__inner">
    <div class="edit__content">
        <h2 class="edit-title">Weight Log</h2>
        <form class="edit__form" action="">
            <div class="edit__form-group">
                <label class="edit__form-label" for="date">日付<span>必須</span></label>
                <input class="edit__form-date" type="date" name="date">
                <ul class="edit__form-error">
                    <li>日付を入力してください</li>
                </ul>
            </div>
            <div class="edit__form-group">
                <label class="edit__form-label" for="weight">体重<span>必須</span></label>
                <input class="edit__form-weight" type="text" name="weight"><span> kg</span>
                <ul class="edit__form-error">
                    <li>体重を入力してください</li>
                    <li>４桁までの数字で入力してください</li>
                    <li>小数点は１桁で入力してください</li>
                </ul>
            </div>
            <div class="edit__form-group">
                <label class="edit__form-label" for="calories">摂取カロリー<span>必須</span></label>
                <input class="edit__form-calories" type="text" name="calories"><span> cal</span>
                <ul class="edit__form-error">
                    <li>摂取カロリ－を人力してください</li>
                    <li>数字で入力してくたさい</li>
                </ul>
            </div>
            <div class="edit__form-group">
                <label class="edit__form-label" for="exercise-time">運動時間<span>必須</span></label>
                <input class="edit__form-exercise-time" type="text" name="exercise-time">
                <ul class="edit__form-error">
                    <li>運動時間を入力してください</li>
                </ul>
            </div>
            <div class="edit__form-group">
                <label class="edit__form-label" for="exercise-content">運動内容<span>必須</span></label>
                <textarea class="edit__form-exercise-content" name="exercise-content" placeholder="運動内容を追加"></textarea>
                <ul class="edit__form-error">
                    <li>１２０文字以内で入力してください</li>
                </ul>
            </div>
            <div class="edit__form-group-btn">
                <a class="edit__form-return" href="#">戻る</a>
                <button class="edit__form-update" type="submit">更新</button>
            </div>
        </form>
        <form class="edit__form2" action="">
            <button class="edit__form-delete">
                <img src="{{ asset('../img/trash.svg') }}" alt="">
            </button>
        </form>
    </div>
</div>
@endsection
