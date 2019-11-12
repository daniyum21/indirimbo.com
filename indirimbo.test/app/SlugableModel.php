<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class SlugableModel extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    public static function boot()
    {
        parent::boot();
        static::creating(function($instance){

            $instance->slug=str_slug($instance->title);
            $latestSlug=
                static::whereRaw("slug RLIKE '^{$instance->slug}(-[0-9]*)?$'")
                    ->latest($instance->getKeyName())
                    ->pluck('slug');
            if($latestSlug->isNotEmpty())
            {

                $pieces=explode('-',$latestSlug);
                $number=intval(end($pieces));
                $instance->slug.='-'.($number+1);
            }

        });
    }
}
