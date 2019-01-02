<?php

namespace App\Http\Controllers;

use App\Region;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {


        return view('admin.index');
    }

    public function regions()
    {
        $regions = Region::orderBy('name', 'asc')->get();

        return view('admin.regions')->with('regions', $regions);
    }
}
