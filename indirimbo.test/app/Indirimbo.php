<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indirimbo extends Model
{
    protected $table='Indirimbo';
    protected $primaryKey = 'SongID';
    public $increments = true;
    protected $fillable = ['SongID','SongNumber','ImageUrl','Title','Description','SectionID','SubSectionID','SongLyrics','umubare','YoutubeLink'];

    protected $SongNumber,$ImageUrl,$Title,$Description,$SectionID,$SubSectionID;
    public function ibice()
    {
        return $this->hasMany("App\Chapter",'SongID','SongID')->orderBy('ChapterID','asc');
    }

    public function section()
    {

        return $this->belongsTo('App\BookSection','SectionID','SectionID');

    }
    public function SubSection()
    {
        return $this->belongsTo('App\BookSubSection','SubSectionID','SubSectionID');
    }
    public function getRouteKeyName()
    {
        return 'UUID';
    }
    public function  country()
    {
        return $this->belongsTo(Country::class, 'country_id','country_id');
    }


}
