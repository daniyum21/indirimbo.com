<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table="Countries";

    public function indirimbo()
    {
        return $this->hasMany(Indirimbo::class, 'country_id','country_id');
    }
}
