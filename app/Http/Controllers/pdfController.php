<?php

namespace App\Http\Controllers;

use App\Models\appointmentControllerModel;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class pdfController extends Controller
{

    public function gPdf(){
      $data=appointmentControllerModel::all();
      
        $pdf=Pdf::loadView('PdfAppoinment',compact('data'));
        return $pdf->download('Appoinment.pdf');
    }
}
