<x-app-layout>
    <x-slot name="header">
        　（ヘッダー名）
    </x-slot>
        <h1 class="title">
            {{ $post->title }}
        </h1>
        <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
        <div class="content">
            <!--なんで分けてる？-->
            <div class="content__post">
                <h3>本文</h3>
                  <!--シーダーで入れた改行を反映させるための記述-->
                <p>{!! nl2br(e($post->body)) !!}</p>    
            </div>
        </div>
        <div class="edit">
            <a href="/posts/{{ $post->id }}/edit">edit</a>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        
   </x-app-layout>