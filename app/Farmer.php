<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    public function region()
    {
        return $this->belongsTo('App\Region');
    }

    public function division()
    {
        return $this->belongsTo('App\Division');
    }

    public function subdivision()
    {
        return $this->belongsTo('App\SubDivision');
    }

    public function village()
    {
        return $this->belongsTo('App\Village');
    }

    public function crops()
    {
        return $this->hasMany('App\Crop');
    }
}
