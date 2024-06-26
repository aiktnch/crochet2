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
        <h1 style="color: #4B0082">編み物サイト</h1>
        <h2 style="color: #4B0082">編み物好きのためのサイトです♪</h2>
        <img src="https://res.cloudinary.com/diekfnvoz/image/upload/v1719392504/662923_m_ijnp3h.jpg" alt="Example Image" style="height:350px;width:500px">

        <div class="login">
            <a href="/login">ログイン</a>
        </div>
        <div class="register">
            <a href="/register">新規登録</a>
        </div>
    </body>
</html>
