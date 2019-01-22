<?php

namespace App\Http\Controllers;

use App\Region;
use App\Village;
use App\Division;
use App\SubDivision;

use Illuminate\Http\Request;

class VillageController extends Controller
{
    public function index()
    {
        $villages = Village::orderBy('name', 'asc')->get();
        $subDivisions  = SubDivision::orderBy('name', 'asc')->get();
        $divisions = Division::orderBy('name', 'asc')->get();
        $regions = Region::orderBy('name', 'asc')->get();

        return view('admin.villages', compact('divisions', 'regions', 'subDivisions', 'villages'));
    }

    public function store(Request $request)
    {
        $village = new Village;

        $village->name = $request->name;
        $village->region_id = $request->region;
        $village->division_id = $request->division;
        $village->sub_division_id = $request->subdivision;
        $village->slug = str_slug($request->name);

        $village->save();

        session()->flash('success', 'Village  saved');

        return back();

    }
}
