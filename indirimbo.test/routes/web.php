
<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::domain('burundi.indirimbo.test')->group(function () {


    Route::group(['middleware' => ['web','country:burundi']], function () {
        Route::get('/', ['uses'=>'IndexController@index','as'=>'home']);//->name('home');;
        Route::get('indirimbo','IndexController@index');
        Route::get('turibande',['as'=>'turibande','uses'=>'IndexController@turibande']);
        Route::get('twandikire',['as'=>'twandikire','uses'=>'IndexController@twandikire']);
        Route::get('support',['as'=>'support','uses'=>'IndexController@support']);
        Route::get('thankyou',['as'=>'thankyou','uses'=>'IndexController@thankyou']);

        Route::get('login','AccountController@loginForm')->name('LoginForm');
        Route::get('logout','AccountController@logout')->name('pages.Account.logout');
        Route::post('login','AccountController@login')->name('pages.Account.Login');
        Route::get('signup','AccountController@index')->name('pages.Account.SignupFormForm');


        Route::group(['middleware' => 'AdminAuth','prefix' => 'admin'], function()
        {

            Route::get('/',['as'=>'Admin_dashboard','uses'=>'AdminController@index']);

            //die('b');
            Route::post('/',['as'=>'Admin_dashboard','uses'=>'LoginController@loginUser']);
            //die('c');
            Route::resource('indirimbo', 'AdminController');
            Route::resource('abahanzi', 'AbahanziController');
            Route::resource('users', 'UsersController');
            Route::resource('choirs', 'ChoirsController');
            //Route::resource('abahanzi/songs', 'AdminIndirimboController');

            Route::get('indirimbo/umuhanzi/create','AdminController@createArtistSong');
            Route::post('indirimbo/umuhanzi/create',['as'=>'CreateUmuhanziSong','uses'=>'AdminController@saveArtistSong']);
            Route::get('indirimbo/korali/create','AdminController@createChoirSong');
            Route::post('indirimbo/korali/create',['as'=>'CreateKoraliSong','uses'=>'AdminController@saveChoirSong']);
            //Route::resource('indirimbo/{indirimboName}/{UUID}', 'AdminIndirimboController');
        });
        /*I could have used the route /indirimbo/{section}, but it would be a little awkward to type indirimbo.com/indirimbo/gushimisha
        I would rather have indirimbo.com/gushimisha, that way displays all the songs.
        */
        Route::get('search','IndexController@index');
        Route::post('search','IndirimboController@search');
        Route::get('/gushimisha', ['as'=>'gushimisha','uses'=>'IndirimboController@displayGushimisha']);

        Route::get('/agakiza', ['as'=>'agakiza','uses'=>'IndirimboController@displayAgakiza']);
        Route::get('login',['as'=>'Login','uses'=>'AccountController@LoginForm']);
        Route::post('login',['as'=>'Login','uses'=>'AccountController@Login']);
        Route::get('register',['as'=>'Registration','uses'=>'AccountController@SignupForm']);
        Route::post('register',['as'=>'Registration','uses'=>'AccountController@SignUp']);

        Route::get('Dashboard',['as'=>'User_dashboard','uses'=>'AccountController@UserHomepage']);
        Route::post('Dashboard',['as'=>'User_dashboard','uses'=>'AccountController@UserHomepage']);
        Route::get('logout','AccountController@Logout');

//
///*Testing Purposes*/
//Event::listen('illuminate.query', function() {
////    print_r(func_get_args());
//});

        Route::get('/abahanzi','IndirimboController@abahanzi');
        Route::get('/korali','IndirimboController@korali');

        Route::get('/umuhanzi/{umuhanziName}/{umuhanziID}','IndirimboController@umuhanzi');
        Route::get('/korali/{koraliName}/{koraliID}','IndirimboController@viewkorali');
        Route::get('/korali/{koraliName}/{SongName}/{SongID}','IndirimboController@viewkoraliSong');
        Route::get('/umuhanzi/{umuhanziName}/{SongName}/{SongID}','IndirimboController@viewUmuhanziSong');
        Route::get('/Audios/{songID}/{preventCache}','IndirimboController@displaySong');

        Route::get('/{BookSection}/{songName}/{songID}','IndirimboController@showSong');
        Route::get('/{BookSection}/{songName}/{songID}/{pdf}','IndirimboController@showSong');

        Route::get('/{subsectionName}',['as'=>'SubsectionListing','uses'=>'IndirimboController@subsectionListing']);




    });//->middleware('country:burundi');
});//

Route::group(['middleware' => ['web']], function () {
    Route::get('/', ['uses'=>'IndexController@index','as'=>'home']);//->name('home');;
    Route::get('indirimbo','IndexController@index');
    Route::get('turibande',['as'=>'turibande','uses'=>'IndexController@turibande']);
    Route::get('twandikire',['as'=>'twandikire','uses'=>'IndexController@twandikire']);
    Route::get('support',['as'=>'support','uses'=>'IndexController@support']);
    Route::get('thankyou',['as'=>'thankyou','uses'=>'IndexController@thankyou']);

    Route::get('login','AccountController@loginForm')->name('LoginForm');
    Route::get('logout','AccountController@logout')->name('pages.Account.logout');
    Route::post('login','AccountController@login')->name('pages.Account.Login');
    Route::get('signup','AccountController@index')->name('pages.Account.SignupFormForm');





//group and protect admin routes
    Route::group(['middleware' => 'AdminAuth','prefix' => 'admin'], function()
    {

        Route::get('/',['as'=>'Admin_dashboard','uses'=>'AdminController@index']);

        //die('b');
        Route::post('/',['as'=>'Admin_dashboard','uses'=>'LoginController@loginUser']);
        //die('c');
        Route::resource('indirimbo', 'AdminController');
        Route::resource('abahanzi', 'AbahanziController');
        Route::resource('users', 'UsersController');
        Route::resource('choirs', 'ChoirsController');
        //Route::resource('abahanzi/songs', 'AdminIndirimboController');

        Route::get('indirimbo/umuhanzi/create','AdminController@createArtistSong');
        Route::post('indirimbo/umuhanzi/create',['as'=>'CreateUmuhanziSong','uses'=>'AdminController@saveArtistSong']);
        Route::get('indirimbo/korali/create','AdminController@createChoirSong');
        Route::post('indirimbo/korali/create',['as'=>'CreateKoraliSong','uses'=>'AdminController@saveChoirSong']);
        //Route::resource('indirimbo/{indirimboName}/{UUID}', 'AdminIndirimboController');
    });
    /*I could have used the route /indirimbo/{section}, but it would be a little awkward to type indirimbo.com/indirimbo/gushimisha
    I would rather have indirimbo.com/gushimisha, that way displays all the songs.
    */
    Route::get('search','IndexController@index');
    Route::post('search','IndirimboController@search');
    Route::get('/gushimisha', ['as'=>'gushimisha','uses'=>'IndirimboController@displayGushimisha']);

    Route::get('/agakiza', ['as'=>'agakiza','uses'=>'IndirimboController@displayAgakiza']);
    Route::get('login',['as'=>'Login','uses'=>'AccountController@LoginForm']);
    Route::post('login',['as'=>'Login','uses'=>'AccountController@Login']);
    Route::get('register',['as'=>'Registration','uses'=>'AccountController@SignupForm']);
    Route::post('register',['as'=>'Registration','uses'=>'AccountController@SignUp']);

    Route::get('Dashboard',['as'=>'User_dashboard','uses'=>'AccountController@UserHomepage']);
    Route::post('Dashboard',['as'=>'User_dashboard','uses'=>'AccountController@UserHomepage']);
    Route::get('logout','AccountController@Logout');

//
///*Testing Purposes*/
//Event::listen('illuminate.query', function() {
////    print_r(func_get_args());
//});

    Route::get('/abahanzi','IndirimboController@abahanzi');
    Route::get('/korali','IndirimboController@korali');

    Route::get('/umuhanzi/{umuhanziName}/{umuhanziID}','IndirimboController@umuhanzi');
    Route::get('/korali/{koraliName}/{koraliID}','IndirimboController@viewkorali');
    Route::get('/korali/{koraliName}/{SongName}/{SongID}','IndirimboController@viewkoraliSong');
    Route::get('/umuhanzi/{umuhanziName}/{SongName}/{SongID}','IndirimboController@viewUmuhanziSong');
    Route::get('/Audios/{songID}/{preventCache}','IndirimboController@displaySong');

    Route::get('/{BookSection}/{songName}/{songID}','IndirimboController@showSong');
    Route::get('/{BookSection}/{songName}/{songID}/{pdf}','IndirimboController@showSong');

    Route::get('/{subsectionName}',['as'=>'SubsectionListing','uses'=>'IndirimboController@subsectionListing']);




});
