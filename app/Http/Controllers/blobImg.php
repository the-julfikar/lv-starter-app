<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class blobImg extends Controller
{
    //

    public function blob_imgs()
    {
        //$data = DB::table('files')->get();
        $datas = DB::table('files')->where('name', 'dr_kamruzzaman.jpeg')->first(); //L-79152 copy.jpg
        return view('imgs', compact('datas'));
    }
}
