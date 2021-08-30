<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class ListController extends Controller
{
    //
    function fetching()
    {
        //return user::all();

        $data= user::all();
        return view('show',['ls'=>$data]);
    }
}
