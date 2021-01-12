<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Collection;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'major_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function forums()
    {
        return $this->hasMany(Forum::class);
    }

    public function extracurriculars(){
        return $this->belongsToMany(Extracurricular::class);
    }

    public function classrooms()
    {
        return $this->belongsToMany(Classroom::class);
    }

    public function getRoleStudent(): Collection
    {
        return $this->roles->pluck('student');
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function degrees()
    {
        return $this->belongsToMany(Degrees::class);
    }

    public function major(){
        return $this->belongsTo(Major::class, 'major_id');
    }
}
