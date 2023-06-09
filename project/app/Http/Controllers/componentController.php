<?php

namespace App\Http\Controllers;

use App\Models\Chipsets;
use App\Models\componentModel;
use App\Models\ComponentType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;


class componentController extends Controller
{
    public function showComponents(Request $request) {

        //fetching all products from specific type id (mobo, gpu, cpu)
        $query = componentModel::select('id', 'name', 'description', 'price', 'specs', 'type_id', 'recommended')
            ->where('type_id', '=', $request->input('component'))
            ->get();

        return view('pc-builder.components')
            ->with('components', $query);
    }

    public function addComponent(Request $request) {


        $query = componentModel::where('id', '=', $request->input('id'))
            ->first();

        $type = ComponentType::where('id', '=', $request->input('type_id'))
            ->first();



        $component_name = $query->name;
        $component_type = $type->name;
        $component_chip = $query->chipset_id;

        $compatible = Chipsets::where('id', '=', $component_chip)
            ->first();

//        dd($component_type);

//        dd($component_name, $component_type);

//        dd($compatible);

//        if($compatible == null) {
//            return view('pc-builder.components');
//        }
//        else {

        if(Auth::check())
        {
            if(Auth::user()->role_id != 1) {
                Session::put($component_type, $component_name);
                return view('pc-builder.builder');
            }
            else{
                $adminpart = "{$component_type}_admin";

                Session::put($adminpart, $component_name);
                return view('backend.build-create');
            }
        }
        else
        {
            Session::put($component_type, $component_name);
            return view('pc-builder.builder');
        }
//        }
    }

    public function deleteSession (Request $request) {
        $request->session()->flush();


        return view('pc-builder.builder');
    }
}
