<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserMod;
use Validator;

class lv_api extends Controller
{
    //

    public function data()
    {
        return ["name"=>"lemon", "email"=>"lemon-cse2k11@gmail.com","age"=>18];
    }

    public function list()
    {
        return UserMod::all();
    }

    public function add(Request $req)
    {
        //return $req;

        $new_user=new UserMod;

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

        //return UserMod::find($req->id);

        $info_user = UserMod::find($req->id);
        
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


    public function minus($id)
    {
        $info_user = UserMod::find($id);

        $result=$info_user->delete();

        if($result)
        {
            return ["status"=>"success","result"=>"Record is updated successfully - ".$id];
        }
        else
        {
            return ["status"=>"failed","result"=>"Operation is failed."];
        }
        
    }

    public function search($condition)
    {
        //return UserMod::where("dept",$condition)->get();

        return UserMod::where("fullname","like","%".$condition."%")->get();
    }

    public function validity(Request $reqt)
    {
        $rules_=array(
            "fullname" => "required",
            "dept" => "required|min:2|max:4",
        );

        $validator=Validator::make($reqt->all(),$rules_);

        if($validator->fails())
        {
            //return $validator->errors();
            
            return response()->json($validator->errors(),401);
        }
        else
        {
            //Saving Data => add
            return ["status"=>"success","msg"=>"Validation is successful. :)"];
        }
    }
}
