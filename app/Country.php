<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    

    public function state()
    {
        return $this->hasMany('App\State');
    }

    public function city()
    {
        return $this->hasManyThrough('App\City', 'App\State');
    }
}
