<x-app-layout>
    <x-slot name="title">
        トップページ
    </x-slot>
    <x-slot name="header">
        トップページ
    </x-slot>
    <h1>Blog Name</h1>
    <a href='/posts/create'>create</a>
    <div class='bg-red-300'>
        @foreach ($posts as $post)
            <div class='post'>
                <h2 class='title'>
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                </h2>
                <p class='body'>{{ $post->summary->body }}</p>
            </div>
        @endforeach
    </div>
    <div class='paginate'>
        {{ $posts->links() }}
    </div>
</x-app-layout>