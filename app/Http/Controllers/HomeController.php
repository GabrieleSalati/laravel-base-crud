<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Track;

class HomeController extends Controller
{
    public function index()
    {
        $tracks = Track::all();
        return view('home', compact("tracks"));
    }
}
