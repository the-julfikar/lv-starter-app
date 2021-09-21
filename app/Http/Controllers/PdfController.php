<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\UserMod;

class PdfController extends Controller
{
    //
    public function create_list()
    {
        $data= UserMod::all();
        //return view('pdf_downl',compact('data'));

        $path=public_path('ruet-hd.png');
        $type=pathinfo($path,PATHINFO_EXTENSION);
        $data_=file_get_contents($path);
        $pic='data:image/'. $type . ';base64,' . base64_encode($data_);
        
        return view('pdf-print',compact('data','pic'));

    }

    public function create_pdf()
    {
        $data= UserMod::all();
        
        //$pdf = PDF::loadView('pdf_downl', compact('data'));

        /*
        $pdf->getDomPDF()->setHttpContext(
            stream_context_create([
                'ssl' => [
                    'allow_self_signed'=> TRUE,
                    'verify_peer' => FALSE,
                    'verify_peer_name' => FALSE,
                ]
            ])
        );
        */

        $path=public_path('ruet-hd.png');
        $type=pathinfo($path,PATHINFO_EXTENSION);
        $data_=file_get_contents($path);
        $pic='data:image/'. $type . ';base64,' . base64_encode($data_);

        //$info['img']=$pic;
        //$info['ls']=$data;

        $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]) ->loadView('pdf-print', compact('pic','data'));

    
        //return $pdf->download('ict_cell_list.pdf');
        return $pdf->stream('ict_cell_list.pdf');
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
