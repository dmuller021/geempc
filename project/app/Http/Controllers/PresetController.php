<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Presets;
use App\Models\Build;
use App\Models\Component;
use Illuminate\Support\Facades\DB;
use Session;

class PresetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $presets = Model::select('presets.*', 'builds.components')
//            ->join('builds', 'presets.build_id', '=', 'builds.id')
//            ->get();

        $presets = DB::table('presets')
            ->join('builds', 'presets.build_id', '=', 'builds.id')
            ->get();

//        dd($presets);

        $count = count($presets);

        for ($y = 0; $y < $count; $y++) {
            $components[] = json_decode($presets[$y]->components); //'{"name":"Johny Carson","title":"CTO"}'
        }

        $count = count($components[0]);


//        dd($components[0]);

//        dd($components[0]->name);

//        dd($presets_final);


        return view('presets.presets',
            compact('components', 'presets'))
            ->with('presets', $presets)
            ->with('count', $count);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $os = $request->get('os');

        session::put('os', $os);

        return view('backend.builder-create2');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $name = $request->get('name');
        $desc = $request->get('desc');
        $price = $request->get('price');
        $level = $request->get('level');



        if (session()->has('cpu_admin','cpu_fan_admin', 'mobo_admin', 'ram_admin', 'cases_admin', 'fans_admin', 'psu_admin', 'storage_admin')) {
            $mobo = Session::get('mobo_admin');
            $cpu = Session::get('cpu_admin');
            $cpu_fan = Session::get('cpu_fan_admin');
            $gpu = Session::get('gpu_admin');
            $ram = Session::get('ram_admin');
            $case = Session::get('cases_admin');
            $fans = Session::get('fans_admin');
            $psu = Session::get('psu_admin');
            $storage = Session::get('storage_admin');
            $os = Session::get('os');
        } else {
            return redirect()->back()
                ->with('alert', 'Your build is missing some essential parts. (cpu, cpu fan, mobo, ram, case, fans, psu, storage)');
        }

        $product = array($mobo, $cpu, $cpu_fan, $gpu, $ram, $case, $fans, $psu, $storage);

        $count = count(array_filter($product));



        for ($x = 0; $x < $count; $x++) {
            $selected[] = Component::where('name', $product[$x])
                ->select('name AS component')
                ->get();
            $price[] = Component::where('name', $product[$x])
                ->select('price')
                ->get();
        }

//        array_push($selected);


        //only name
        $json = json_encode($selected);
//        dd($json);
        $jsonencode = json_decode($json);

        //price
        $jsonprice = json_encode($price, true);

        $jsonencode_price = json_decode($jsonprice);


        $total_price_preset = 0;

        foreach ($jsonencode_price as $item) {
            $total_price_preset += $item[0]->price;
        }

//        dd($total_price_preset);



        $build = Build::create([
            'components' => $json,
            'build_price' => $total_price_preset,
        ]);


        $build->save();
        $build_id = $build->id;

        Presets::create([
            'preset_name' => $name,
            'build_id' => $build_id,
            'level_id' => $level,
            'status'   => 'test'
        ]);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $presets = Presets::where('build_id', '=', $id)
        ->first();

        $build = Build::where('id', '=', $presets->build_id)
        ->get();

        return view('presets.show')
            ->with('presets', $presets)
            ->with('build_id', $build);
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
