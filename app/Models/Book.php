<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'desc', 'category_id', 'writter_name', 'pages', 'slug', 'thumbnail', 'book_file'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
