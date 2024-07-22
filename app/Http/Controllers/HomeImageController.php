<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeImageModel;

class HomeImageController extends Controller
{
    public function show()
    {
        $images = HomeImageModel::latest()->limit(4)->get();
        return view('layouts.main.main', compact('images'));
    }
}
