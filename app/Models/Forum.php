<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Class_;

class Forum extends Model
{
    // $table->string('title');
    // $table->text('body');
    // $table->foreignId('user_id');
    // $table->foreignId('major_id');
    // $table->foreignId('level_id');
    // $table->foreignId('class_id');
    // $table->string('slug');
    use HasFactory;

    protected $fillable = [
        'title', 'body', 'user_id', 'major_id', 'level_id', 'classroom_id', 'slug', 'subject_id'
    ];

    public function major()
    {
        return $this->belongsTo(Major::class, 'major_id');
    }

    public function level()
    {
        return $this->belongsTo(Level::class, 'level_id');
    }

    public function class()
    {
        return $this->belongsTo(Classroom::class, 'classroom_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }
}
