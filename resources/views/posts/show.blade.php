<x-app-layout>
    <x-slot name="title">
        {{ $post->title }}
    </x-slot>
    <x-slot name="header">
        {{ $post->title }}
    </x-slot>
    <h1 class="title">
        {{ $post->title }}
    </h1>
    <div class="content">
        <div class="summary-body">
            <h3>概要</h3>
            <p>{{ $post->summary->body }}</p>    
        </div>
        <div class="summary-images">
            @foreach($post->summary->summary_images as $img)
                <img src="{{ $img->image_url }}" alt="画像が読み込めません。"/>
            @endforeach
        </div>
        <div class="ingredient-body">
            <h3>材料</h3>
            <p>{{ $post->ingredient->body }}</p>    
        </div>
        <div class="ingredient-images">
            @foreach($post->ingredient->ingredient_images as $img)
                <img src="{{ $img->image_url }}" alt="画像が読み込めません。"/>
            @endforeach
        </div>
        <div class="pattern-body">
            <h3>編み図</h3>
            <p>{{ $post->pattern->body }}</p>    
        </div>
        <div class="pattern-images">
            @foreach($post->pattern->pattern_images as $img)
                <img src="{{ $img->image_url }}" alt="画像が読み込めません。"/>
            @endforeach
        </div>
        
    </div>
    <div class="footer">
        <a href="/posts">戻る</a>
    </div>
</x-app-layout>