<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //
    protected $guarded  = [];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function local()
    {
        return $this->belongsTo('App\Local');
    }
}
