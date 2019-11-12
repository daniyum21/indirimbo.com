<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Umuhanzi extends Model
{
    protected $table = 'Umuhanzi';
    protected $primaryKey = 'UmuhanziID';
    protected $fillable = ['FirstName','LastName','StageName','Twitter','Biography'];
    public function getRouteKeyName()
    {
        return 'UUID';
    }
    public function  country()
    {
        return $this->belongsTo(Country::class, 'country_id','country_id');
    }

}
