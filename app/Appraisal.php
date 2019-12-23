<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appraisal extends Model
{
    //
    protected $table = 'appraisal';
    protected $fillable = [
        'staff_id',
        'student_id',
        'course_id',
        'totalScore'
    ];
}
