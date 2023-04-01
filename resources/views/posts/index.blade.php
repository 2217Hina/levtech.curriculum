<x-app-layout>
    <x-slot name="header">
        　（ヘッダー名）
    </x-slot>
        <h1>Blog Name</h1>
         <a href='/posts/create'>create</a>
        <div class='posts'>
            <!--コントローラーで渡した'posts'を$postsとして使用-->
            @foreach($posts as $post)
            <div class='post'>
                <h2 class='title'>
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                </h2>
                    <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                <!--シーダーで入れた改行を反映させるための記述-->
                    <p class='body'>{!! nl2br(e($post->body)) !!}</p>
                <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deletePost({{ $post->id }})">delete</button> 
                </form>
            </div>
            @endforeach
        </div>
        <!--ブログ投稿作成画面へ-->
        
        
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        
        
        <script>
        function deletePost(id) {
            'use strict'
    
            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
            }
        }
    </script>
    </x-app-layout>