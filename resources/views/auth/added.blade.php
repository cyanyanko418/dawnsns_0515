@extends('layouts.logout')

@section('content')

<div id="clear">
    <h2>〇〇さん、</h2>
    <p>ようこそ！DAWNSNSへ</p>
    <div class="clear-text">
        <p>ユーザー登録が完了しました。</p>
        <p>さっそく、ログインをしてみましょう。</p>
    </div>

    <p class="clear-btn"><a href="/login">ログイン画面へ</a></p>
</div>

@endsection
