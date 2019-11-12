<?php

/**
 * Created by PhpStorm.
 * User: daniyum21
 * Date: 7/31/16
 * Time: 12:44 PM
 */
namespace App\Http\ViewComposers;

use App\Korali;
use App\Umuhanzi;
use Illuminate\View\View;

class NavigationComposer
{
    public $navigationArtists;
    public $navigationChoirs;
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct()
    {

       $this->navigationArtists=Umuhanzi::where('country_id',getCountryID())->take(5)->get();
        $this->navigationChoirs=Korali::where('country_id',getCountryID())->take(5)->get();
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {

        $view->with('NavigationAbahanzi', end($this->navigationArtists));
        $view->with('navigationChoirs', end($this->navigationChoirs));
    }
}
