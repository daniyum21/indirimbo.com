<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Validator;
use App\User;
use Illuminate\Support\Facades\Hash;
use Mail;

//use hisorange\BrowserDetect\Facade\Parser as BrowserDetect;

class AccountController extends Controller
{


    public function SignupForm()
    {

        return view('Account.SignupForm');
    }
    public function SignUp(Request $request)
    {


//        /** @var \Illuminate\Contracts\Validation\Validator $validation */
//        $messages = array('Email.required' => 'Email address ni ngombwa.',
//            'Email.email' => 'Email address watanze ntiyemewe.',
//            'Email.unique' => 'Iyi email yarafashwe.',
//            'FirstName.required' => 'First Name ni ngombwa.',
//            'LastName.required' => 'Last Name ni ngombwa.',
//            'Password.required' => 'Password ni ngombwa.',
//            'PasswordConfirm.required' => 'Password confirm ni ngombwa.',
//            'Password.regex' => 'Password igomba nibura umubare umwe,inyuguti nkuru n\'inyuguti nto.'
//
//
//        );




        $request->validate([
            'Email' => 'required|email|unique:Users,Email',
            'FirstName' => 'required|profanityCheck',
            'LastName' => 'required|profanityCheck',
            'Password' => array(
                'required',
                'min:8',
                'max:32',
                'regex:/^(?=.*[a-z|A-Z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/'),
            'PasswordConfirm'=>'required|same:Password'
        ]);




        /*
         * At this point everything is valid, save the data
         * */

            $user = new User();
            $user->Email=$request->input('Email');
            $user->FirstName=$request->input('FirstName');
            $user->LastName=$request->input('LastName');
            $user->Password=Hash::make($request->input('Password'));
            $user->RoleID=2;//for now no one is admin
        $user->save();
        Auth::login($user);
        //$roleName = Auth::user()->Role()->first()->RoleName;
        if(Auth::user()->isAdmin())
            return Redirect::route('Admin_dashboard');
        else
            return Redirect::route("User_dashboard");
            //$user->save();
            //
            //return redirect()->route('Dashboard') ;



    }
    public function LoginForm(Request $request)
    {

        if(Auth::user()) {
            //$roleName = Auth::user()->Roles->first()->RoleName;

            //$user=Auth::user();
            if(Auth::user()->isAdmin())
                return Redirect::route('Admin_dashboard')->with('success', 'Welcome back ' . $user->FirstName . ' ' . $user->LastName);
            else
                return Redirect::route("User_dashboard")->with('success', 'Welcome back ' . $user->FirstName . ' ' . $user->LastName);

            //return redirect()->route('Dashboard')->with('success', 'Welcome back ' . $user->FirstName . ' ' . $user->LastName);
        }



        return view('Account.LoginForm');


    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function Login(Request $request)
    {

        $request->validate([
            'Email' => 'required',
            'Password' =>'required'
        ]);



/*
 * Now Log User In
 * */

        if (Auth::attempt(['Email' => $request->input('Email'), 'password' => $request->input('Password')]))
        {


           // dd($user->Role->RoleName);
            //$this->logUser($request,"Successfully logged in.");
            $roleName = Auth::user()->Role->first()->RoleName;

            //if($roleName=='Administrator')
            if(Auth::user()->isAdmin())
{


 return Redirect::route('Admin_dashboard')->with('success', 'Welcome back ' . Auth::user()->FirstName . ' ' . Auth::user()->LastName);
}
            else
                return Redirect::route("User_dashboard")->with('success', 'Welcome back ' . Auth::user()->FirstName . ' ' . Auth::user()->LastName);


            //return redirect()->route('Dashboard')->with('success','Welcome back '.$user->FirstName.' '.$user->LastName);

        }
        else {
            //$this->logUser($request,"Failed due to wrong credentials");
            return Redirect::back()->withInput(Input::all())->with('error', 'Please check your username and/or password and try again.');
        }


    }
    public function dashboard()
    {
        //return view('Account.dashboards.User.home');
        if(Auth::user()->isAdmin())
        return view('Account.dashboards.Admin.Home');
        else
            return view('Account.dashboards.User.Home');


    }
    public function ChangePasswordForm()
    {
        //return view('Account.dashboards.User.ChangePassword');
        return view('Account.dashboards.Admin.ChangePassword');


    }
    public function ChangePassword(Request $request)
    {
        $user=Auth::user();

        if($user)
        {

            $request->validate([
                'NewPassword' => array(
                    'required',
                    'min:8',
                    'max:32',
                    'regex:/^(?=.*[a-z|A-Z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/'),
                'OldPassword'=>'required',
                'NewPasswordConfirm'=>'required|same:NewPassword'
            ]);



        if($user->Password!=Hash::make($request->input('OldPassword')))
        {
           // $this->logUser($request,"Failed changing password due to wrong credentials");
            return Redirect::back()->withInput(Input::all())->with('error','Wrong Old Password. Please use password associated with your account.');

        }


        /*
         * At this point everything is valid, save the data
         * */


            /*
             * Check Password Count
             *
             * We get the last 5 password password, order by time, if our new password is there, decline
             * */
            $allPassword=UserHistory::where('UserID',$user->UserID)->where('FieldName','Password')->orderBy('UserHistoryID', 'DESC')->take(4)->get();
            foreach($allPassword as $passwordObject)
            {
                if($passwordObject->NewValue==Hash::make($request->input('NewPassword'))) {
                    //$this->logUser($request,"Failed to update password due to recently used password");
                    return Redirect::back()->withInput(Input::all())->with('error', 'For security, please do not reuse the same password you have used the last 4 times your password has been changed.');
                }
            }


        $user->Password=Hash::make($request->input('NewPassword'));

        $user->save();

            /*
             * Save The History Data
             * */
            $userHistory = new UserHistory();
            $userHistory->UserID=$user->UserID;
            $userHistory->FieldName='Password';
            $userHistory->OriginalValue=Hash::make($request->input('OldPassword'));
            $userHistory->NewValue=Hash::make($request->input('NewPassword'));
            $userHistory->ModBy=$user->UserID;
            $userHistory->save();

            //$this->logUser($request,"succeeded updating password");
        return redirect()->route('Dashboard')->with('success','Password updated successfully');
        }
        else
        {
            return redirect()->route('Login');


        }

    }
    public function Logout()
    {

        Auth::logout();
        return redirect()->route('home');
    }
    public function getPasswordResetForm()
    {
        return view ('Account.ForgotPasswordForm');
    }
    public function getPasswordReset(Request $request)
    {



        $request->validate([
            'Email' => 'required|email',
        ]);

            $user = User::where('UserEmail', '=', $request->input('Email'))->first();;

            if ($user) {
                //die("Found");
                $Token=JWTAuth::fromUser($user);
               // die($Token);
                    //return 'invalid_credentials';
                //}
                $user->remember_token=$Token;
                $user->save();

                Mail::send('auth.emails.reminder', ['user' => $user,'Token'=>$Token], function ($message) use ($user) {
                    $message->from("dev@apptasticsolutions.com", $name = "Apptastic Solutions");
                    $message->sender("dev@apptasticsolutions.com", $name = "apptastic security team");
                    $message->to($user->UserEmail, $name = $user->FirstName . ' ' . $user->LastName);
                    $message->subject("Reset Password Link");

                });
                $this->logUser($request,"succeeded requesting password reset link");

            }
        return Redirect::back()->with("success","Email has been sent. Please check your email and follow instructions");


    }

    /**
     * @param Request $request
     * @param $result
     */
    private function logUser(Request $request, $result)
    {

        $logger= new UserLoginHistory();
        $logger->UserEmail=$request->input('Email');
        $logger->Results=$result;
        $location = $this->geoTag->getLocation();

        $logger->IPAddress=$request->ip();

        $logger->Country=$location['country'];
        $logger->City=$location['city'];
        $logger->State=$location['state'];

        $logger->UserLongitude=$location['lon'];
        $logger->UserLatitude=$location['lat'];

        $user = User::where('UserEmail', '=', $request->input('Email'))->first();
        if($user)
        {
            $logger->UserID=$user->UserID;

        }

        $logger->DeviceTypeName="Desktop";
        $logger->DeviceName=BrowserDetect::browserName()." ".BrowserDetect::browserVersion(); // return 'Firefox 3.6' string.

        $logger->save();


    }

    public function getAdminInterface()
    {
        return view('Account.dashboards.Admin.Home');

    }
    public function getdashboard()
    {
        return view('Account.dashboards.Admin.Dashboard');

    }
public function getformElements()
    {
        return view('Account.dashboards.Admin.FormELements');

    }
public function getmaps_basics()
    {
        return view('Account.dashboards.Admin.MapsBasics');

    }
public function getui_alert()
    {
        return view('Account.dashboards.Admin.UiAlert');

    }
    public function getProfile()
    {
        return view('Account.dashboards.Admin.Profile');

    }
    public function UserHomepage()
    {

        return view('Account.dashboards.User.home');
    }
}
