<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\user;

class PdfController extends Controller
{
    //
    public function create_list()
    {
        $data= user::all();
        //return view('pdf_downl',compact('data'));
        return view('pdf-print',compact('data'));

    }

    public function create_pdf()
    {
        $data= user::all();
        
        //$pdf = PDF::loadView('pdf_downl', compact('data'));

        $pdf = PDF::loadView('pdf-print', compact('data'));
    
        return $pdf->download('ict_cell_list.pdf');
    }

    public function gen_pdf_sample()
    {
        $data = [
            'title' => 'Welcome to PDF Downloader of LV app.',
            'date' => date('m/d/Y')
        ];
          
        $pdf = PDF::loadView('pdf_content', $data);
    
        return $pdf->download('lv_pdf_sample.pdf');
    }
}
