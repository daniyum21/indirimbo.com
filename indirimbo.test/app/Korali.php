<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Korali extends Model
{
    protected $table = 'Choir';
    protected $primaryKey = 'ChoirID';
    protected $fillable = ['ChoirName','ChurchName','Akarere','Intara'];
    public function getRouteKeyName()
    {
        return 'UUID';
    }
    public function  country()
    {
        return $this->belongsTo(Country::class, 'country_id','country_id');
    }

}
