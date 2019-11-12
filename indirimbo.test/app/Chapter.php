<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $table = 'Chapters';
    protected $primaryKey = 'ChapterID';
    protected $fillable = ['ChapterID','SongID','SongNumber','ChapterText','Chorus'];


    public function indirimbo()
    {

        return $this->belongsTo('App\Indirimbo','','SongID','SongID');
    }
    public function getRouteKeyName()
    {
        return 'UUID';
    }
}
