<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $table = 'coursetbl';
    protected $fillable = [
                'courseCode',
                'courseName',
                'credit_unit',
                'semester',
                'dept_id',
    ];
    public function getcourseCodeAttribute($name)
    {
        return strtoupper($name);
    }
    public function getcourseNameAttribute($name)
    {
        return strtoupper($name);
    }

    public function dept()
    {
        return $this->belongsTo(Department::class);
    }

}
