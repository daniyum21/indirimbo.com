<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookSubSection extends Model
{
    protected $table = 'BookSubSections';
    protected $primaryKey = 'SubSectionID';


    protected $fillable = ['SubSectionName'];
    public function indirimbo()
    {
        return $this->hasMany('App\Indirimbo','SubSectionID','SubSectionID')->orderBy('SongNumber', 'asc');
    }
    public static function subSectionSongsCount($subsectionName)
    {

        //dd(self::where('SubSectionName','=',$subsectionName)->first()->SubSectionID);
        return self::where('SubSectionName','=',$subsectionName)->where('country_id',getCountryID())->first()->indirimbo->count();
    }
    public function getRouteKeyName()
    {
        return 'UUID';
    }
}
