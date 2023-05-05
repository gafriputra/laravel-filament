<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function generate(Request $request, $id)
    {
        $order = Order::with('orderDetails.guestDetails')->find($id);

        $pdf = PDF::loadView('pdf.template', [
            'order' => $order,
        ]);
        return $pdf->download("reference_number_" . $order->reference_number . ".pdf");

        // return view('pdf.template', [
        //     'order' => $order,
        // ]);
    }
}
