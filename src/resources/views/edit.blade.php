@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/edit.css') }}">
@endsection

@section('content')
<div class="edit__inner">
    <div class="edit__content">
        <h2 class="edit-title">Weight Log</h2>
        <form class="edit__form" action="/weight_logs/{{ $weightLog->id }}/update" method="post">
            @csrf
            <div class="edit__form-group">
                <label class="edit__form-label" for="date">日付<span>必須</span></label>
                <input class="edit__form-date" type="date" name="date" value="{{ old('date', $weightLog->date) }}">
                <ul class="edit__form-error">
                    @error('date')
                    <li>{{ $message }}</li>
                    @enderror
                </ul>
            </div>
            <div class="edit__form-group">
                <label class="edit__form-label" for="weight">体重<span>必須</span></label>
                <input class="edit__form-weight" type="text" name="weight" value="{{ old('weight', $weightLog->weight) }}"><span> kg</span>
                <ul class="edit__form-error">
                    @error('weight')
                    <li>{{ $message }}</li>
                    @enderror
                </ul>
            </div>
            <div class="edit__form-group">
                <label class="edit__form-label" for="calories">摂取カロリー<span>必須</span></label>
                <input class="edit__form-calories" type="text" name="calories" value="{{ old('calories', $weightLog->calories) }}"><span> cal</span>
                <ul class="edit__form-error">
                    @error('calories')
                    <li>{{ $message }}</li>
                    @enderror
                </ul>
            </div>
            <div class="edit__form-group">
                <label class="edit__form-label" for="exercise_time">運動時間<span>必須</span></label>
                <input class="edit__form-exercise-time" type="time" name="exercise_time"  value="{{ old('exercise_time', $weightLog->exercise_time) }}">
                <ul class="edit__form-error">
                    @error('exercise_time')
                    <li>{{ $message }}</li>
                    @enderror
                </ul>
            </div>
            <div class="edit__form-group">
                <label class="edit__form-label" for="exercise_content">運動内容<span>必須</span></label>
                <textarea class="edit__form-exercise-content" name="exercise_content" placeholder="運動内容を追加">{{ old('exercise_content', $weightLog->exercise_content) }}</textarea>
                <ul class="edit__form-error">
                    @error('exercise_content')
                    <li>{{ $message }}</li>
                    @enderror
                </ul>
            </div>
            <div class="edit__form-group-btn">
                <a class="edit__form-return" href="/weight_logs">戻る</a>
                <button class="edit__form-update" type="submit">更新</button>
            </div>
        </form>
        <form class="edit__form2" action="/weight_logs/{{ $weightLog->id }}/delete" method="post">
            @csrf
            <button class="edit__form-delete">
                <img src="{{ asset('../img/trash.svg') }}" alt="">
            </button>
        </form>
    </div>
</div>
@endsection
