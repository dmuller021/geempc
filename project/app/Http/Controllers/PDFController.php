<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->all();
        $pdf = PDF::loadView('myPDF',[
            'data' => $data,
        ]);

        return $pdf->download('invoice-test.pdf');
    }
}
