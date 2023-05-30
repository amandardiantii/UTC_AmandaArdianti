<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    
    use HasFactory;
    public function Post(){
        return $this->belongsTo(Post::class);
    }
    public function Category(){
        return $this->belongsTo(Category::class);
    }
}
