<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function index() 
    {
        $pdf = PDF::loadView('pdf.sample', [
            'logo'    => public_path('img/logo.PNG'),
        ]);

        return $pdf->download('hotel-voucher.pdf');
    }
}