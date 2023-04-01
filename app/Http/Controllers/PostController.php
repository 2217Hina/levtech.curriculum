<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index(Post $Post)
    {
        // 'posts'->blade内で使う変数,インスタンス化した$postを代入
        return view('posts/index')->with(['posts'=>$Post->getPaginateByLimit()]);
    }
    
    public function show(Post $post)
    {
        return view('posts/show')->with(['post'=>$post]);
    }
    
     public function create(Category $category)
     {
         return view('posts/create')->with(['categories'=>$category->get()]);
     }
     
     public function store(PostRequest $request,Post $post)
     {
        //  'post'をキーに持つリクエストパラメータを取得
        $input = $request['post'] ;
        // 保存処理
        $post->fill($input)->save();
        return redirect('/posts/'.$post->id);
        
     }
     
     public function edit(Post $post)
     {
         return view('posts/edit')->with(['post'=>$post]);
     }
     
     public function update(PostRequest $request,Post $post)
     {
         $input_post = $request['post'];
         $post->fill($input_post)->save();
         
         return redirect('/posts/'.$post->id);
     }
     
     public function delete(Post $post)
     {
         $post->delete();
         return redirect('/');
     }
}
