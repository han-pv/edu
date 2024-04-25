<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [
        'id',
    ];

    public $timestamps = false;


    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function groups()
    {
        return $this->hasMany(Group::class);
    }

    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }
}
