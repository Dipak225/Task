<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Registration;
use Session;
use Crypt;
use Illuminate\Contracts\Routing\Registrar;

class RestoController extends Controller
{
    //
    function index()
    {
        return view('home');
    }
    function list()
    {
        $data= Registration::all();
        return view('list',["data"=>$data]);
    }
    function add(Request $req)
    {
        // return $req->input();
        $resto=new Registration;
        $resto->Name=$req->input('name');
        $resto->Address=$req->input('address');
        $resto->Contact=$req->input('contact');
        $resto->gender=$req->input('gender');
        $resto->DOB=$req->input('dob');
        $resto->Email=$req->input('email');
        $resto->Password=$req->input('password');
        $resto->save();
        $req->session()->flash('status','Resturant entered successfully');
        return redirect('list');
    }
    function delete($id)
    {
        Registration::find($id)->delete();
        Session::flash('status','Resturant deleted successfully');
        return redirect('list');
    }
    function edit($id)
    {
        $data= Registration::find($id);
        return view('edit',['data'=>$data]);
    }
    function update(Request $req)
    {
        // return $req->input();
        $resto=Registration:: find($req->input('id'));
        $resto->Name=$req->input('name');
        $resto->Address=$req->input('address');
        $resto->Contact=$req->input('contact');
        $resto->gender=$req->input('gender');
        $resto->DOB=$req->input('dob');
        $resto->Email=$req->input('email');
     
        $resto->save();
        $req->session()->flash('status','Resturant updated successfully');
        return redirect('list');
    }

    function register(Request $req)
    {
      
        $resto=new Registration;
        $resto->Name=$req->input('name');
        $resto->Address=$req->input('address');
        $resto->Contact=$req->input('contact');
        $resto->gender=$req->input('gender');
        $resto->DOB=$req->input('dob');
        $resto->Email=$req->input('email');
        $resto->Password=Crypt::encrypt($req->input('password'));
        $resto->save();
        $req->session()->put('user',$req->input('name'));
        return redirect('/');
    }
    function login(Request $req)
    {
        $us=Registration::where("Email",$req->input('email'))->get();
       if( Crypt::decrypt($us[0]->Password)==$req->input('password'))
       {
        $req->session()->put('user',$us[0]->Name);
        return redirect('/');
       }
    }
}