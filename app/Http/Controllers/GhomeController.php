<?php

namespace App\Http\Controllers;
use App\car;
use Illuminate\Http\Request;

class GhomeController extends Controller
{
    public function index()
    {
        $carlist = \App\car::all();
        return view('ghome.index')->with('car', $carlist);

    }

}
