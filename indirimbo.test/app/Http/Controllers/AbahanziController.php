<?php

namespace App\Http\Controllers;

use App\Umuhanzi;
use Illuminate\Http\Request;
use Validator;

class AbahanziController extends Controller
{
    public function index()
    {


        //if you are admin, you see these, otherwise you see public

        $abahanzi=Umuhanzi::where('country_id', getCountryID())->get();
        return view('Account.dashboards.Admin.Abahanzi.index')->with('abahanzi',$abahanzi);
    }
    public function create()
    {

        return view('Account.dashboards.Admin.Abahanzi.create');
    }
    public function store(Request $request){
        /** @var \Illuminate\Contracts\Validation\Validator $validation */

        $request->validate([
            'FirstName' => 'required|max:255',
            'FirstName' => 'required',
            'LastName' => 'required',
            'StageName' => 'required'
        ]);


        $umuhanzi = new Umuhanzi();
        $umuhanzi->FirstName=$request->input('FirstName');;
        $umuhanzi->LastName=$request->input('LastName');;
        $umuhanzi->StageName=$request->input('StageName');;
        $umuhanzi->Twitter=$request->input('Twitter');
        $umuhanzi->Biography=$request->input('Biography');
        $umuhanzi->country_id=getCountryID();
        $umuhanzi->save();
        //redirect()->back()->withInput()->withErrors($validation);
        $request->session()->flash('alert-success', 'Artist was successful added!');
        return redirect()->back();//redirect()->route("photo.index");


    }
    public function edit($umuhanziUUID)
    {
        $umuhanzi = Umuhanzi::where('UUID',$umuhanziUUID)->first();

        return view('Account.dashboards.Admin.Abahanzi.update')->withUmuhanzi($umuhanzi);
    }
    public function update($UmuhanziUUID, Request $request)
    {
        $umuhanzi = Umuhanzi::where('UUID',$UmuhanziUUID)->first();


        $request->validate([
            'FirstName' => 'required',
            'LastName' => 'required',
            'StageName' => 'required'
        ]);

        $input = $request->all();

        $umuhanzi->fill($input)->save();

        //Session::flash('flash_message', 'Task successfully added!');
        $request->session()->flash('alert-success', 'Umuhanzi successfully updated!');

        return redirect()->back();
    }
    public function destroy($umuhanziUUID,Request $request)
    {
        $umuhanzi = Umuhanzi::where('UUID',$umuhanziUUID)->first();

        $umuhanzi->delete();

        //Session::flash('flash_message', 'Task successfully deleted!');
        $request->session()->flash('alert-success', 'Umuhanzi Has been deleted');


        return redirect()->back();
    }
}
