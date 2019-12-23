<?php

namespace App;
use App\Department;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use Notifiable;
    //protected $table = 'faculties';
    protected $primaryKey = "id";

    protected $fillable = [
        'fac_name', 'fac_desc'
    ];

    public function setNameAttribute($facname)
    {
        $this->attributes['fac_name'] = strtoupper($facname);
    }

    public function dept()
    {
        return $this->belongsTo(Department::class);
    }
}
