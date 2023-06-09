<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;

class orderhistory extends Controller
{
    public function index()
    {
        $orders = \App\Models\afrekenen::all();
        return view('admin.orders')
            ->with('order', $orders);


    }}
