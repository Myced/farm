<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public function divisions()
    {
        return $this->hasMany('App\Division');
    }

    public function subDivisions()
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
