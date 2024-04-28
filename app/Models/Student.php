<?php

namespace App\Models;

use GuzzleHttp\RequestOptions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public $timestamps = false;


//    public function Category()
//    {
//        return $this->belongsTo(Category::class);
//    }

    public function Group()
    {
        return $this->belongsTo(Group::class);
    }
//    public function Course()
//    {
//        return $this->belongsTo(Course::class);
//    }


}
