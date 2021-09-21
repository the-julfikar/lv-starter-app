<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserMod;

class UserController extends Controller
{
    //

    function getData()
    {
        return UserMod::all();
    }

    function addData(Request $req)
    {
         $new_user=new UserMod;

         $request = $req->validate([
            'fullname' => 'required',
            'passwd' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'dept' => 'required',
            'address' => 'required|max:100'
        ], [
            'fullname.required' => 'FullName is required',
            'passwd.required' => 'Passwd is required, plz',
            'email.required' => 'Email format is incorrect | missing'
        ]);

        //$validatedData['password'] = bcrypt($validatedData['password']);
        //$usr = UserMod::create($requests); //not working XXX

         $new_user->fullname=$req->fullname;
         $new_user->passwd=$req->passwd;
         $new_user->email=$req->email;
         $new_user->dept=$req->dept;
         $new_user->address=$req->address;
         $new_user->jobs="G";
         $new_user->sex="M";
         $new_user->save();

         //return $req->input(); //checked the request parameters are coming properly or not.

         //return redirect('fetch');

         return back()->with('success', 'Registration is done successfully.');
    }
}
