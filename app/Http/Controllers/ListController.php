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

        //$data= user::all();
        $data= user::paginate(4); //For pagination
        //return view('show',['ls'=>$data]);
        return view('show',compact('data'));
    }

    function edit($id)
    {
        //return user::find($id);

        $info = user::find($id);

        if($info)
        {
           return response()->json([
               'status'=>200,
               'infos'=>$info
           ]);  
        }
        else
        {
            return response()->json([
                'status'=>404,
                'msg'=>'INFO_NOT_FOUND'
            ]);
        }
    }


    function delete($id)
    {
        return user::find($id);
    }
}
