<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'image',
        'detail',
        'category_id',
        ];
        public function category()
        {
        return $this->belongsTo(Category::class);
        }
        public function comments()
        {
        return $this->hasMany(Comment::class);
        }
}
