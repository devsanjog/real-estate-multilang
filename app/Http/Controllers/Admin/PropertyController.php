<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Properties;
use Carbon\Carbon;
use http\Client\Request;
use Illuminate\Validation\ValidationException;

class PropertyController extends Controller
{
    public function index(Properties $properties)
    {
        $allProperties = $properties->all();
        return view('properties.index', compact(['allProperties']));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);
    }
}
