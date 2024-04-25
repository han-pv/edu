<?php

namespace App\Models;

use GuzzleHttp\RequestOptions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = [
        'id',
    ];

    public $timestamps = false;


    public function Group()
    {
        return $this->belongsTo(Group::class);
    }
}
