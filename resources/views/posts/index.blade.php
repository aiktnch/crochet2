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
                    <form action="/like" method="POST" class="mb-2 flex justify-end">
                        <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                        @csrf
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <button type="submit" class="px-4 mb-2">
                                @if($post->likes->contains('user_id', Auth::id()))
                                    <!-- いいね済み -->
                                    <svg class="h-8 w-8 text-red-500"  fill="red" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                    </svg>
                                @else
                                    <!-- 未いいね -->
                                    <svg class="h-8 w-8 text-gray-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                    </svg>
                                @endif
                            </button>
                            <div class="mr-2 ">{{ $post->likes->count() }}</div>
                    </form>


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