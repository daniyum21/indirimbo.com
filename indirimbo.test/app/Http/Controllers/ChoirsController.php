<?php

namespace App\Http\Controllers;

use App\Korali;
use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;

class ChoirsController extends Controller
{
    public function index()
    {

        $choirs=Korali::where('country_id',getCountryID())->get();

        return view('Account.dashboards.Admin.Choirs.index')->with('choirs',$choirs);
        //return "List users";
    }
    public function create()
    {
        return view('Account.dashboards.Admin.Choirs.create');
    }
    public function store(Request $request){


        $request->validate([

            'ChoirName' => 'required',
            'ChurchName' => 'required',
            'Akarere' => 'required',
            'Intara' => 'required',
        ]);

        $korali = new Korali();



        $korali->ChoirName=$request->input('ChoirName');
        $korali->ChurchName=$request->input('ChurchName');
        $korali->Akarere=$request->input('Akarere');
        $korali->Intara=$request->input('Intara');
        $korali->country_id=getCountryID();

        $korali->save();
        //redirect()->back()->withInput()->withErrors($validation);
        $request->session()->flash('alert-success', 'Korali was successful added!');
        return redirect()->back();//redirect()->route("photo.index");


    }
    public function edit($koraliUUID)
    {
        $choir = Korali::where('UUID',$koraliUUID)->first();

        return view('Account.dashboards.Admin.Choirs.update')->withChoir($choir);
    }
    public function update($ChoirID, Request $request)
    {

        $request->validate([

            'ChoirName' => 'required',
            'ChurchName' => 'required',
            'Akarere' => 'required',
            'Intara' => 'required',
        ]);

        $choir = Korali::where('UUID',$ChoirID)->first();

        $input = $request->all();

        $choir->fill($input)->save();

        //Session::flash('flash_message', 'Task successfully added!');
        $request->session()->flash('alert-success', 'Choir successfully updated!');

        return redirect()->back();
    }
    public function destroy($CHoirID,Request $request)
    {
        $choir = Korali::where('UUID',$CHoirID)->first();

        $choir->delete();

        //Session::flash('flash_message', 'Task successfully deleted!');
        $request->session()->flash('alert-success', 'Korali Has been deleted');


        return redirect()->back();
    }
}
