<x-app-layout>
    <x-slot name="title">
        {{ $post->title }}
    </x-slot>
    <x-slot name="header">
        {{ $post->title }}
    </x-slot>
    <h1 class="title" style="background-color: #D9E5FF;">
        {{ $post->title }}
    </h1>
    <div class="content" style="background-color: #D9E5FF;">
        <div class="flex">
            <div class="summary-images" style="height:400px;width:400px;display: flex;justify-content: space-between;width: 50%">
                @foreach($post->summary->summary_images as $img)
                    <img src="{{ $img->image_url }}" alt="画像が読み込めません。"/>
                @endforeach
            </div>
            <div class="summary-body">
                <h3 style="color: #4B0082;font-size: 30px">概要</h3>
                <p>{{ $post->summary->body }}</p>
            </div>
        </div>
        <div>
        <p style="border-bottom:solid"></p>
        </div>
        
        <div class="flex">
            <div class="ingredient-images" style="height:400px;width:400px;display: flex;justify-content: space-between;width: 50%">
                @foreach($post->ingredient->ingredient_images as $img)
                    <img src="{{ $img->image_url }}" alt="画像が読み込めません。"/>
                @endforeach
            </div>
            <div class="ingredient-body">
                <h3 style="color: #4B0082;font-size: 30px">材料</h3>
                <p>{{ $post->ingredient->body }}</p>    
            </div>
        </div>
        <div>
        <p style="border-bottom:solid"></p>
        </div>
        
        <div class="flex">
            <div class="pattern-images" style="height:400px;width:400px;display: flex;justify-content: space-between;width: 50%">
                @foreach($post->pattern->pattern_images as $img)
                    <img src="{{ $img->image_url }}" alt="画像が読み込めません。"/>
                @endforeach
            </div>
            <div class="pattern-body">
                <h3 style="color: #4B0082;font-size: 30px">編み図</h3>
                <p>{{ $post->pattern->body }}</p>    
            </div>
        </div>
        <div>
        <p style="border-bottom:solid"></p>
        </div>
       
        
    </div>
    <div class="footer">
        <a href="/posts" style="font-size:20px">戻る</a>
    </div>
</x-app-layout>