<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Component;
use Illuminate\Support\Arr;
use App\Http\Controllers\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function submitBuild(Request $request)
    {
        if (session()->has('cpu','cpu_fan', 'mobo', 'ram', 'cases', 'fans', 'psu', 'storage')) {
            $mobo = Session::get('mobo');
            $cpu = Session::get('cpu');
            $cpu_fan = Session::get('cpu_fan');
            $gpu = Session::get('gpu');
            $ram = Session::get('ram');
            $case = Session::get('cases');
            $fans = Session::get('fans');
            $psu = Session::get('psu');
            $storage = Session::get('storage');
            $os = $request->get('os');
        } else {
            return redirect()->back()
                ->with('alert', 'Your build is missing some essential parts. (cpu, cpu fan, mobo, ram, case, fans, psu, storage)');
        }


        $product = array($mobo, $cpu, $cpu_fan, $gpu, $ram, $case, $fans, $psu, $storage, $os);

        $count = count(array_filter($product));



        for ($x = 0; $x < $count; $x++) {
            $selected[] = Component::where('name', $product[$x])
                ->get();
        }

        $json = json_encode($selected, true);



        $jsonencode = json_decode($json);

//        dd($jsonencode);


        $total_price_builder = 0;

        foreach ($jsonencode as $item) {
            $total_price_builder += $item[0]->price;
        }

        Session::put('total_price_builder', $total_price_builder);

        Session::put('currentbuild', $jsonencode);

//            Session::put('logged_in_user', );

        return view('cart')
            ->with('parts', $jsonencode);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
