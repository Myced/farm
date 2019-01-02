<?php

namespace App\Http\Controllers;

use App\Region;
use App\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function index()
    {
        $divisions = Division::orderBy('name', 'asc')->get();
        $regions = Region::orderBy('name', 'asc')->get();

        return view('admin.divisions', compact('divisions', 'regions'));
    }

    public function store(Request $request)
    {
        $division = new Division;

        $division->name = $request->division;
        $division->region_id = $request->region;
        $division->slug = str_slug($request->division);

        $division->save();

        session()->flash('success', 'Division has been saved');

        return back();

    }
}
