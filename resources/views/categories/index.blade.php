<x-app-layout>
    <x-slot name="header">
        　（ヘッダー名）
    </x-slot>
        <h1>Category</h1>
        @foreach($posts as $post)
        <h2 class='title'>
            <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
        </h2>
        @endforeach
    </x-app-layout>