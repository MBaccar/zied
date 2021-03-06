<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $guarded  = [];
    public function local()
    {
        return $this->belongsTo('App\Local');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
