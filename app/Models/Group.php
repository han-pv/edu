<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public $timestamps = false;

    public static function withSum(string $string)
    {
    }


    public function Course()
    {
        return $this->belongsTo(Course::class);
    }

    public function Teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
