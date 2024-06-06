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
        <div class="content__post">
            <h3>本文</h3>
            <p>{{ $post->body }}</p>    
        </div>
    </div>
    <div class="footer">
        <a href="/posts">戻る</a>
    </div>
</x-app-layout>