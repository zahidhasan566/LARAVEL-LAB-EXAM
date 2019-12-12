<?php

namespace App\Http\Controllers;
use App\member;
use App\car;
use App\User;
use App\transition;
use Illuminate\Http\Request;
use Validator;


class MemberController extends Controller
{
    public function bookindex($id,$mid)
    {
        $carlist = car::find($id);

        $member =  User::find($mid);

        // $stds = DB::table('users')->get();
        //echo("member controller");
        //echo($member['userId']);
        //echo("something");
       return view('member.index')->with('member', $member)->with('car', $carlist);


    }



    public function confirm($id,$cname,$cprice)
    {

        $transition =new transition();

        $transition ->id = $id;
        $transition ->cname = $cname;
        $transition ->cprice = $cprice;
        $transition->save();

        return redirect()->route('home.emp');


    }
}
