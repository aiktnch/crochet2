<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <link rel="stylesheet" href="{{ asset('css/index.css') }}?v={{ time() }}">
    </head>
    <body style="background-color: #D9E5FF;">
        <form action="/posts" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="title">
                <h2 style="color: #4B0082">タイトル</h2>
                <input type="hidden" name="post[user_id]" value="{{ Auth::id() }}"/>
                <input type="text" name="post[title]" placeholder="タイトル"/>
                <input type="hidden" name="post[category_id]" value="1"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="category">
                <h2 style="color: #4B0082">カテゴリー</h2>
                <select name="post[category_id]">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="summary">
                <h2 style="color: #4B0082">概要</h2>
                <textarea name="summary_body" placeholder="作品の概要"></textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <div class="summary-image">
                <input type="file" name="summary_image">
                
            <div class="ingredient">
                <h2 style="color: #4B0082">材料</h2>
                <textarea name="ingredient_body" placeholder="使用したものを書いてください"></textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <div class="ingredient-image">
                <input type="file" name="ingredient_image">
            
            <div class="body">
                <h2 style="color: #4B0082">編み図</h2>
                <textarea name="pattern_body" placeholder="編み図について、追記したい場合は書いてください"></textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <div class="pattern-image">
                <input type="file" name="pattern_image">
                
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>