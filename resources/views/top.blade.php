@extends('layouts.app') <!-- layout.appを継承 -->
@section('title', 'Recipe App')<!-- タブに表示される -->

@section('content')


@include('components.carousel')

    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="mojiwhite">
                <div class="button-container">
                <a href="{{ route('signup') }}" class="gray-button">新規会員登録</a>
                </div>
                <div class="button-container">
                <a href="{{ route('login') }}" class="gray-button">ログイン</a>
                </div>
                </div>
            </div>
        </div>
    </div>


@endsection


<?php
    $hideHeader = true; // ヘッダーを非表示にするための変数セット
?>