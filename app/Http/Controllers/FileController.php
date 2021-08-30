<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\file;
//use Illuminate\Support\Facades\Validator;

class FileController extends Controller
{
    //
    function uploads(Request $req)
    {   
        /*
        $req->validate([
            'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
            ]);
    
            $fileModel = new file;
    
            if($req->file('file')) {
                $fileName = $req->file('file')->getClientOriginalName(); #time().'_'.$req->file->getClientOriginalName();
                $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');
    
                $fileModel->name = $req->file('file')->getClientOriginalName();
                $fileModel->file = base64_encode(file_get_contents($req->file('file')->getRealPath()));
                $fileModel->mime = $req->file('file')->getMimeType();
                $fileModel->size = $req->file('file')->getSize();

                $fileModel->save();
    
            
                return back()
                ->with('success','File has been uploaded.')
                ->with('file', $fileName);
                
            }
        */

        //dd($req);

        $req->validate([
            'file' => 'required|mimes:csv,txt,jpg,pdf|max:2048'
            ]);

        $fileModel = new file;

        $fileModel->name = $req->file('file')->getClientOriginalName();
        $fileModel->file = base64_encode(file_get_contents($req->file('file')->getRealPath()));
        $fileModel->mime = $req->file('file')->getMimeType();
        $fileModel->size = $req->file('file')->getSize();
        $fileModel->save();

        //return $req->file('file')->store('pdfs');
        return $req->file('file')->storeAs('uploads', $req->file('file')->getClientOriginalName(), 'public');
    
    }
}
