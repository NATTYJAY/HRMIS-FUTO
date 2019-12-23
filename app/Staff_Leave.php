<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff_Leave extends Model
{
    //
    protected $table = 'leavetbl';
    protected $fillable = [
        'staff_id', 'leave_type', 'leave_applied_year',
        'leave_start_yr', 'leave_end_yr','leave_reasons',
        'leave_recommended_yr','status'
    ];

    public function getFnameAttribute($name)
    {
        return strtoupper($name);
    }
    public function getLnameAttribute($name)
    {
        return strtoupper($name);
    }

    public function user()
    {
        return $this->belongsTo('App\User','staff_id');
    }

    public function staff_work()
    {
        return $this->hasManyThrough(
            'App\staff_work',
            'App\User',
            'id', // Foreign key on users table...
            'staff_id', // Foreign key on posts table...
            'id', // Local key on countries table...
            'id' // Local key on users table...
        );

    }

//    public function staff_work()
//    {
//        return $this->belongsTo('App\staff_work','staff_id');
//    }

}
