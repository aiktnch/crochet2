<x-app-layout>
    <x-slot name="title">
        トップページ
    </x-slot>
    <x-slot name="header">
        トップページ
    </x-slot>
    <h1 class="text-center" style="font-size: 50px;color: #4B0082;line-height:150px">編み物アプリ</h1>
    <a  href='/posts/create' style="background-color:#FF88FF;font-size: 20px;color: white;border: solid 3px white;padding: 3px;line-height:100px">★投稿する★</a>
    
    <div style="background-color: #FFEEFF;">
        @foreach ($posts as $post)
            <div class='post' style="line-height :2; border: dotted 1px #4B0082;">
                <h2 class='title' style="color: black font-size: 10px">
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                </h2>
                <p class='body' style="color: gray">{{ $post->summary->body }}</p>
                    <div class="summary-images" style="height:350px;width:400px">
            @foreach($post->summary->summary_images as $img)
                <img src="{{ $img->image_url }}" alt="画像が読み込めません。"/>
            @endforeach
        </div>
            </div>
        @endforeach
    </div>
    <div class='paginate'>
        {{ $posts->links() }}
    </div>
</x-app-layout>