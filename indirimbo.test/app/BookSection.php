<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookSection extends Model
{
    protected $table='BookSections';
    protected $primaryKey = 'SectionID';
    protected $fillable = [];


    public function indirimbo()
    {
        return $this->hasMany('App\Indirimbo','SectionID','SectionID')->orderBy('SongNumber', 'asc');
    }
    public function getRouteKeyName()
    {
        return 'UUID';
    }
}
