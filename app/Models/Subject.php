<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    // $table->string('name');
//     $table->string('thumbnail');
//     $table->text('desc');
//     $table->foreignId('level_id');
//     $table->foreignId('major_id');
//     $table->string('slug');
    use HasFactory;

    protected $fillable = [
        'name', 'thumbnail', 'desc', 'level_id', 'major_id', 'slug'
    ];

    public function level()
    {
        return $this->belongsTo(Level::class, 'level_id');
    }

    public function major()
    {
        return $this->belongsTo(Major::class, 'major_id');
    }

    public function materials()
    {
        return $this->hasMany(Material::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function forums()
    {
        return $this->hasMany(Forum::class);
    }
}
