<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Component;
use App\Models\Chipsets;
use Carbon\Carbon;

use Illuminate\Support\Facades\DB;

class ComponentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.components');
    }

    public function part_index(Request $request)
    {
        $type_id = $request->get('type_id');

        $parts = DB::table('components')
            ->where('Type_id','=', $type_id)
            ->get();

        $comp = DB::table('component_type')
            ->where('id','=', $type_id)
            ->pluck('name')
            ->first();

        return view('backend.part',
            compact(['parts', 'comp', 'type_id']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $type_id = $id;

        $comp = DB::table('component_type')
            ->where('id','=', $type_id)
            ->pluck('name')
            ->first();

        $chipset = Chipsets::all();

        return view('backend.part-create',
            compact(['comp', 'type_id', 'chipset']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type_id = $request->get('type_id');

        $name = $request->get('name');
        $desc = $request->get('desc');
        $price = $request->get('price');
        $specs = $request->get('specs');
        $chipy = strip_tags($request->get('chipset'));
        $recommend = $request->get('recommended');

        $dup = DB::table('components')
            ->where('Name','=', $name)
            ->select('id', 'Name')
            ->get()
            ->toArray();

        $chipset = Chipsets::select("id")
            ->where("chipset", '=', $chipy)
            ->get()
            ->toArray();

        $chipcount = count($chipset);

        if ($dup != null)
        {
            //is a duplicate
            return redirect()
                ->back()
                ->with('alert', 'This record already exists');
        }
        else
        {
            if ($chipcount == 0) {
                //create new chipset
                $newchip = Chipsets::create([
                    'chipset' => $chipy
                ]);

                //SOMETHING GOES WRONG HERE AND IDK WHY
                $newchipid = $newchip->id;

                Component::create([
                    'Name' => $name,
                    'Description' => $desc,
                    'Price' => $price,
                    'Type_id' => $type_id,
                    'Specs' => $specs,
                    'chipset_id' => $newchipid,
                    'recommended' => $recommend
                ]);

                return redirect()
                    ->route('comp.part', ['type_id' => $type_id])
                    ->with('alert', 'added succesfully');
            }
            else
            {
                $insert = Component::create([
                    'Name' => $name,
                    'Description' => $desc,
                    'Price' => $price,
                    'Type_id' => $type_id,
                    'Specs' => $specs,
                    'chipset_id' => $chipset[0]['id'],
                    'recommended' => $recommend
                ]);
                $insert->save();

                return redirect()
                    ->route('comp.part', ['type_id' => $type_id])
                    ->with('alert', 'added succesfully');
            }
        }
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
    public function edit(Request $request, $id)
    {
        $type_id = $request->get('type_id');

        $comp = Component::find($id);
        $comp->get();

        $type_name = DB::table('component_type')
            ->where('id','=', $type_id)
            ->first();

        $types = DB::table('component_type')
            ->get();

        return view('backend.part-edit',
            compact(['comp', 'type_name', 'type_id', 'types']));
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
        $type_id = $request->get('type_id');

        $name = $request->get('name');
        $desc = $request->get('desc');
        $price = $request->get('price');
        $specs = $request->get('specs');

        $dup = DB::table('components')
            ->where('Name','=', $name)
            ->select('id', 'Name')
            ->get()
            ->toArray();

        if($dup != null)
        {
            return redirect()
                ->back()
                ->with('alert', 'This record already exists');
        }
        else
        {
            Component::where('id', $id)
                ->where('type_id', $type_id)
                ->update([
                    'Name' => $name,
                    'Description' => $desc,
                    'Price' => $price,
                    'Type_id' => $type_id,
                    'Specs' => $specs
                ]);

            return redirect()
                ->route('comp.part', ['type_id' => $type_id])
                ->with('alert', 'Edited successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comp = Component::find($id);
        $comp->delete();
        return redirect()->back()
            ->with('alert', 'Part has been deleted');
    }
}
