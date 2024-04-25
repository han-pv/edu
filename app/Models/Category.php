<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [
    'id',
];

    public $timestamps = false;


    public function courses()
    {
        return $this->hasMany(Course::class);
    }

}