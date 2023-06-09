<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class repair extends Controller
{
public function repair(Request $request){
    \App\Models\repair::create($request->all());
    return redirect()->back();
}
}
