<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    protected $fillable = [
        'fac_id',
        'dept_name',
        'dept_desc',
    ];

    public function setDept_nameAttribute($name)
    {
        $this->attributes['dept_name'] = strtoupper($name);
    }
    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }


}
