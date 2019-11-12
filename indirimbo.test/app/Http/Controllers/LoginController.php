<?php
namespace App\Http\Controllers;


use App\Http\Requests;

class LoginController extends Controller {

    public function showForm()
    {
        if(Auth::check())
        {
            return Redirect::intended('admin');


        }
        return View::make('admin.login.loginForm');
    }

    public function logout()
    {

        Auth::logout();
        return Redirect::route('home');
    }
    public function loginUser()
    {

//die("Woooow!");

            //$this->loginForm->validate(Input::all());

        if ($this->isPostRequest()) {
            $validator = $this->getLoginValidator();
            if ($validator->passes()) {


                $credentials1 = $this->getLoginCredentials();
                if (Auth::attempt($credentials1,true)) {
                    $roleName = Auth::user()->Roles->first()->RoleName;//not even sure why, I can use
                    if(Auth::user()->isAdmin())
{
//die("Issue Happpening Here");
                        return Redirect::route('admin_home');
}
                    else
                        return Redirect::route("user/profile");
                    //return 'success';

                }
                //return 'Failed';
                //return Redirect::route("users/profile");

                return Redirect::back()->withErrors([
                    "password" => ["Invalid Username or password."]
                ]);
            } else {
                return Redirect::back()
                    ->withInput()
                    ->withErrors($validator);

            }
        }

        return View::make("hello");



    }

}
