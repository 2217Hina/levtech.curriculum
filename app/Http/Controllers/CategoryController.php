<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Category;

class CategoryController extends Controller
{
   public function getByCategory(int $limit_count = 5)
        {
             return $this->posts()->with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
        }
        
    public function index(Category $category)
    {
        return view('categories.index')->with(['posts'=>$category->getByCategory()]);
    }
}
