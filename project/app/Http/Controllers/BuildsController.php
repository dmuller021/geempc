<?php

namespace App\Http\Controllers;

use App\Models\Component;
use App\Models\ComponentType;
use Illuminate\Http\Request;
use App\Models\Build;
use App\Models\Presets;
use Illuminate\Support\Facades\DB;

class BuildsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $build = DB::table('builds AS b')
        ->join('presets AS p', 'b.id', '=', 'p.build_id')
        ->get();

        return view('backend.builds',
            compact(['build']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parts = Component::all();

        $types = ComponentType::all();

        return view('backend.build-create', compact('parts', 'types'));
    }

    public function view($id)
    {
        $parts = Component::where('type_id', $id)
            ->get();

        return view('backend.build-components', compact('parts'));
    }

//    public function search($id)
//    {
//        // Search in the title and body columns from the posts table
//        $parts = Component::query()
//            ->select('components.*')
//            ->where('type_id', '=', $id)
//            ->get();
//        // Return the search view with the results compacted
//        return redirect()
//            ->back();
//    }

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
        $build = Build::find($id);
        $build->delete();
        return redirect()->back()
            ->with('alert', 'Preset has been deleted');
    }
}
