<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeSliders;
use App\Models\HomeLocations;

class HomeOwnerController extends Controller
{
    public function getsliders()
    {
        $sliders = HomeSliders::get();
        return response()->json($sliders,200);
    }
    public function getlocations()
    {
        $locations = HomeLocations::get();
        return response()->json($locations,200);
    }
}
