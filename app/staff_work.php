<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class staff_work extends Model
{
    use Notifiable;
    //
    protected $fillable = [
        'staff_id', 'status', 'rank', 'date_assumption_duty', 'date_ractification','step','date_confirm','status_first_appoint'
    ];

//    public function staff_leave()
//    {
//        return $this->belongsTo('App\Staff_Leave','staff_id');
//    }

//    public function staffleave()
//    {
//        return $this->hasMany(staff_Leave::class);
//    }


}
