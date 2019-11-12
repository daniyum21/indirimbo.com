<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class UsersController extends Controller
{
    public function index()
    {
        $users=User::with('Role')->get();
       return view('Account.dashboards.Admin.Users.index')->with('users',$users);
        //return "List users";
    }
}
