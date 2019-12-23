<?php

namespace App;
use App\Department;
use App\Memo;
use App\staff_work;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname', 'email', 'password', 'lname', 'dept_id','staff_idNo'
    ];

    public function setFnameAttribute($name)
    {
        $this->attributes['fname'] = strtoupper($name);
    }
    public function setLnameAttribute($name)
    {
        $this->attributes['lname'] = strtoupper($name);
    }

    public function getFnameAttribute($name)
    {
        return strtoupper($name);
    }
    public function getLnameAttribute($name)
    {
        return strtoupper($name);
    }

    //This is one to many relationship. Here it means that department ID from the department table is in User table
    public function dept()
    {
        return $this->belongsTo(Department::class);
    }

//    public function memo()
//    {
//        return $this->hasOne(Memo::class);
//    }

//    public function leave()
//    {
//        return $this->belongsTo(Staff_Leave::class);
//    }


//    public function staffLeave()
//    {
//        return $this->hasOne(Staff_Leave::class);
//    }

//    public function staffWork()
//    {
//        return $this->hasOne(staff_work::class);
//    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
