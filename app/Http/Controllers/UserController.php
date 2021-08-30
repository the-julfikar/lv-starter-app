<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class UserController extends Controller
{
    //

    function getData()
    {
        return user::all();
    }

    function addData(Request $req)
    {
         $new_user=new user;

         $new_user->fullname=$req->fullname;
         $new_user->passwd=$req->passwd;
         $new_user->email=$req->email;
         $new_user->dept=$req->dept;
         $new_user->address=$req->address;
         $new_user->jobs="G";
         $new_user->sex="M";

         $new_user->save();

         //return $req->input(); //checked the request parameters are coming properly or not.

         return redirect('fetch');
    }
}
