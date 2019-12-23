<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class studentCourses extends Model
{
    //
    protected $table = 'student_course_tbl';
    protected $fillable = [
        'student_id',
        'course_id',

    ];

}
