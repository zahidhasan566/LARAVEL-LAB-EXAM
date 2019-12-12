<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\member;
use App\car;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{

	function index(){
		return view('login.index');
	}

	function verify(Request $request){

		//$users = User::all();
		$user = User::where('username', $request->username)
					->where('password', $request->password)
					->first();

		//$users = DB::table('users')->get();
	/*	$user = DB::table('users')->where('username', $request->username)
					->where('password', $request->password)
					->get();*/
      //echo($user->username);
       // if(count($user) > 0){
			$request->session()->put('uname', $request->input('username'));
			//$req->session()->put('user', $user[0]->type);
			//$req->session()->put('user', $user->type);
			//$request->session()->put('user', $user);
			if($user->type==1)
			{
				$request->session()->put('type',1);
				return redirect()->route('home.index');
			}
			else if($user->type==2)
			{
                $userId=$user->userId;
				$request->session()->put('type',2);
                $request->session()->put('userId',$userId);

                $carlist = \App\car::all();
                $member = \App\member::all();
                echo($user->userId);
				return redirect()->route('home.emp')->with('member', $member)->with('car', $carlist);
			}


		}
		/*else{

			$request->session()->flash('msg', 'invalid username/password');

			//return view('login.index');
			return redirect()->route('login.index');
		}

	}*/
}


