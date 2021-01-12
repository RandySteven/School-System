<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    // $table->foreignId('subject_id');
    //         $table->string('title');
    //         $table->text('desc');
    //         $table->string('thumbnail');
    //         $table->string('material_file');
    use HasFactory;

    protected $fillable = [
        'subject_id', 'title', 'desc', 'thumbnail', 'material_file'
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }
}
