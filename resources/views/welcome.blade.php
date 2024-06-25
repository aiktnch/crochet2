<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>編み物アプリ</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body style="background-color: #D9E5FF;">
        <h1 style="color: #4B0082">編み物アプリ</h1>
        <h2 style="color: #4B0082">説明</h2>
        <img src="{{ asset('images/662923_m.jpg') }}" alt="Example Image">

        <div class="login">
            <a href="/login">ログイン</a>
        </div>
        <div class="register">
            <a href="/register">新規登録</a>
        </div>
    </body>
</html>
