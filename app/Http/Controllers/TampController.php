<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use setasign\Fpdi\Fpdi;
class TampController extends Controller
{
    public function prod(Request $request)
    {
        $nama=$request->nama;
        $outputfile=public_path().'dcc.pdf';
        $this->fillPDF(public_path().'/sertfikas/dcc.pdf',$outputfile,$nama);

        return response()->file($outputfile);
    }

    public function fillPDF($file,$outputfile,$nama)
    {
        $fodi= new Fpdi();
        $fodi->setSourceFile($file);
        $template =$fodi->importPage(1);
        $size =$fodi->getTemplateSize($template);
        $fodi->AddPage($size['orientation'],array($size['width'],$size['height']));
        $fodi->useTemplate($template);
        $top=95;
        $right=125;
        $name=$nama;
        $fodi->setFont("helvetica","b",17);
        $fodi->setTextColor(25,26,25);
        $fodi->Text($right,$top,$nama);
        return $fodi->Output($outputfile,'F');
    }

    public function index()
    {
        return view('sertifikat.index');
    }
}

//instal dulu 
//composer require setasign/fpdf
//composer require setasign/fpdi