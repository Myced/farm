<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    public function region()
    {
        return $this->belongsTo('App\Region');
    }

    public function subdivisions()
    {
        return $this->hasMany('App\SubDivision');
    }

    public function villages()
    {
        return $this->hasMany('App\Village');
    }

    public function farmers()
    {
        return $this->hasMany(\App\Farmer::class);
    }
}
