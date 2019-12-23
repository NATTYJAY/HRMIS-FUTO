<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class assignCourse extends Model
{
    //
    protected $table = 'assigncourse';
    protected $fillable = [
        'dept_id',
        'staff_id',
        'course_id',
        'clasSize'
    ];
    public function getfnameAttribute($name)
    {
        return strtoupper($name);
    }
    public function courses()
    {
        return $this->hasOne('App\Course','course_id');
    }


}
