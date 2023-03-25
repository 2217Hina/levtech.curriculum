<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $Post)
    {
        // 'posts'->blade内で使う変数,インスタンス化した$postを代入
        return view('posts/index')->with(['posts'=>$Post->getPaginateByLimit()]);
    }
}
