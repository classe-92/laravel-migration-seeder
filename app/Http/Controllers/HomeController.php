<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;

class HomeController extends Controller
{
    public function index()
    {
        $houses = House::all();
        return view('welcome', compact('houses'));
    }
}