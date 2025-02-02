@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/edit2.css') }}">
@endsection

@section('content')
<div class="edit2__inner">
    <div class="edit2__content">
        <h2 class="edit2-title">目標体重設定</h2>
        <form class="edit2__form" action="/weight_logs/goal_setting" method="post">
            @csrf
            <div class="edit2__form-group">
                @if(isset($weightTarget))
                <input class="edit2__form-weight" type="text" name="target_weight" value="{{ old('target_weight', $weightTarget->target_weight) }}">
                @else
                <input class="edit2__form-weight" type="text" name="target_weight" value="{{ old('target_weight', '') }}">
                @endif
                <span> kg</span>
                <ul class="edit2__form-error">
                    @error('target_weight')
                    <li>{{ $message }}</li>
                    @enderror
                </ul>
            </div>
            <div class="edit2__form-group-btn">
                <a class="edit2__form-return" href="/weight_logs">戻る</a>
                <button class="edit2__form-submit" type="submit">更新</button>
            </div>
        </form>
    </div>
</div>
@endsection
