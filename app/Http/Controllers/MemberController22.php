<?php

namespace App\Http\Controllers;

use App\member;
use App\car;

use Illuminate\Http\Request;
use Validator;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bookindex($id)
    {
        $carlist = car::find($id);

            $member = \App\member::all();
            // $stds = DB::table('users')->get();
            return view('member.index')->with('member', $member)->with('car', $carlist);

    }




}
