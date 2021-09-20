<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class lv_api extends Controller
{
    //

    public function data()
    {
        return ["name"=>"lemon", "email"=>"lemon-cse2k11@gmail.com","age"=>18];
    }

    public function list()
    {
        return user::all();
    }

    public function add(Request $req)
    {
        //return $req;

        $new_user=new user;

        $new_user->fullname=$req->fullname;
        $new_user->passwd=$req->passwd;
        $new_user->email=$req->email;
        $new_user->dept=$req->dept;
        $new_user->address=$req->address;
        $new_user->jobs=$req->jobs;
        $new_user->sex=$req->sex;

        $result=$new_user->save();

        if($result)
        {
            return ["status"=>"success","result"=>"Record is added successfully."];
        }
        else
        {
            return ["status"=>"failed","result"=>"Operation is failed."];
        }
    }

    public function modify(Request $req)
    {
        //return $req;

        //return user::find($req->id);

        $info_user = user::find($req->id);
        
        $info_user->fullname=$req->fullname;
        $info_user->address=$req->address;

        $result=$info_user->save();

        if($result)
        {
            return ["status"=>"success","result"=>"Record is updated successfully."];
        }
        else
        {
            return ["status"=>"failed","result"=>"Operation is failed."];
        }
        
    }
}
