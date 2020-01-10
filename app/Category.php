<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded  = [];
    public function locals()
    {
        return $this->hasMany('App\Local');
    }
}
