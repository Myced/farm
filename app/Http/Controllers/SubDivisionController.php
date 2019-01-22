<?php

namespace App\Http\Controllers;

use App\Region;
use App\Division;
use App\SubDivision;
use Illuminate\Http\Request;

class SubDivisionController extends Controller
{
    public function index()
    {
        $subDivisions = SubDivision::orderBy('name', 'asc')->get();
        $divisions = Division::orderBy('name', 'asc')->get();
        $regions = Region::orderBy('name', 'asc')->get();

        return view('admin.sub_divisions', compact('divisions', 'regions', 'subDivisions'));
    }

    public function store(Request $request)
    {
        $subdivision = new SubDivision;

        $subdivision->name = $request->subdivision;
        $subdivision->region_id = $request->region;
        $subdivision->division_id = $request->division;
        $subdivision->slug = str_slug($request->subdivision);

        $subdivision->save();

        session()->flash('success', 'Sub Division has been saved');

        return back();

    }
}
