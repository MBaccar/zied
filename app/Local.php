<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $guarded  = [];
   
    
    public function offres()
    {
        return $this->hasMany('App\Offre');
    }
    public function place()
    {
        return $this->belongsTo('App\Place');
    }
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function photos()
    {
        return $this->hasMany('App\Photo');
    }
    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
    public function reservations()
    {
        return $this->hasMany('App\Reservation');
    }
  
}
