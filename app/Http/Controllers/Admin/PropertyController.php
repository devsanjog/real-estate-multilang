<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Properties;
use Carbon\Carbon;

class PropertyController extends Controller
{
    public function index(Properties $properties)
    {
        $allProperties = $properties->all();
        return view('properties', compact(['allProperties']));
        dd($properties->all());
    }
}
