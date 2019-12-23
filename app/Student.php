<?php

namespace App;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Database\Eloquent\Model;


class Student extends Model implements Authenticatable
{
    //
    use AuthenticableTrait;
    protected $table = 'students';
    protected $fillable = [
        'email',
        'password',
        'dept_id'
    ];

    public function getRegNoAttribute($name)
    {
        return strtoupper($name);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
