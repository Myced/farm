<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    public function region()
    {
        return $this->belongsTo('App\Region');
    }

    public function division()
    {
        return $this->belongsTo('App\Division');
    }

    public function subDivision()
    {
        return $this->belongsTo('App\SubDivision');
    }

    public function farmers()
    {
        return $this->hasMany(\App\Farmer::class);
    }
}
