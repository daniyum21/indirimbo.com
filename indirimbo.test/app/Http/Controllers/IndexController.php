<?php

namespace App\Http\Controllers;

use App\BookSubSection;

use App\Http\Requests;
use App\Indirimbo;

class IndexController extends Controller
{
    /**
     * @var
     */


    /**
     * Display a listing of the resource.
     * GET /index
     *
     * @return Response
     */
    public function index()
    {
        $subsections = BookSubSection::where('country_id',getCountryID())->pluck('SubSectionName');


        if(getCountryID()==1)//this is only for Rwanda
            return view("welcome", compact('subsections'));
        else
            return view("burundiwelcome", compact('subsections'));


    }


    public function turibande()
    {
        return  view('staticPages.turibande');
    }


    public function twandikire()
    {
         return view('staticPages.twandikire');
    }
}
