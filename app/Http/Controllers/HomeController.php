<?php

namespace App\Http\Controllers;
use App\member;
use App\car;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index(Request $request){

    	/*$data = ['id'=>'10-222-3', 'name'=>'alamin'];
    	return view('home.index', $data);*/

    	/*return view('home.index')
    			->with('id', '12-2222-2')
    			->with('name', 'alamin');*/

/*    	return view('home.index')
    			->withId('12-2222-2')
    			->withName('alamin');*/

    	/*$v = view('home.index');
    	$v->withId('12-2222-2');
    	$v->withName('alamin');
    	return $v;*/

/*    	/*$id = "09-222-1";
    	$name ="XYZ";
    	return view('home.index', compact('id', 'name'));*/

/*    	$request->session()->put('name', 'alamin');
    	$request->session()->put('id', '1222222');
    	$request->session()->get('name');
    	$request->session()->forget('name');
    	$data = $request->session()->all();
    	$request->session()->flush();
    	$request->session()->has('name');
    	$request->session()->flash('cgpa', 4);
    	$request->session()->keep('cgpa');
    	$request->session()->reflash();
    	$request->session()->pull('name');*/




    	if($request->session()->has('uname')){





			if(session()->get('type')==1){
			return view('home.index');}
			else{
                $carlist = \App\car::all();



                $member=(session()->get('userId'));
                $member2 =  User::find($member);
                //echo($member);
				return view('home.emp')->with('member', $member2)->with('car', $carlist);}
    	}else{
    		return redirect('/login');
    	}
    }
}



