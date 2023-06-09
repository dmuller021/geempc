<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class afrekenen extends Controller
{

    public function index()
    {
        return view('backend.afrekenen');
    }

    public function afrekenen(Request $request)
    {
        $naam = $request->get('naam');
        $email = $request->get('email');
        $adress = $request->get('adress');
        $house = $request->get('house_address');

        $data = array([
            'naam' => $naam,
            'email' => $email,
            'address' => $adress,
            'house' => $house,
        ]);

//        $pdf = PDF::loadView('myPDF',[
//            'data' => $data,
//        ]);
//        $pdf->download('invoice.pdf');

        \App\Models\afrekenen::create([
            'Name' => $naam,
            'email' => $email,
            'address' => $adress,
            'house_number'=>$house,
//            'factuur'=>$pdf
        ]);
}
}
