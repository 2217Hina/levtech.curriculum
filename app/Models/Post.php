<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
   public function getPaginateByLimit(int $limit_count = 10)
    {
        // $this->インスタンス自身
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this::with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    protected $fillable = [
    'title',
    'body',
    'category_id'
    ];
}


