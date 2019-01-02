<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubDivision extends Model
{
    public function region()
    {
        return $this->belongsTo('App\Region');
    }

    public function division()
    {
        return $this->belongsTo('App\Division');
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
