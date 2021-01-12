<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extracurricular extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'thumbnail', 'desc', 'slug'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
