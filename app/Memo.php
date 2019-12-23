<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    protected $fillable = [
        'staff_id', 'memo_type', 'memo_body', 'sender', 'memo_title'
    ];

    public function setMemo_typeAttribute($name)
    {
        $this->attributes['Memo_type'] = ucfirst($name);
    }
    public function setMemo_bodyAttribute($name)
    {
        $this->attributes['Memo_body'] = ucfirst($name);
    }

    public function user()
    {
        return $this->belongsTo('App\User','staff_id');
    }

}
