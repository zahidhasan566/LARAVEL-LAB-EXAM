<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\car;
use App\Http\Requests\StudentRequest;
use Validator;

class StudentController extends Controller
{

    function index(Request $request){



            $stds = \App\User::all();
            // $stds = DB::table('users')->get();
            return view('student.index')->with('users', $stds);

        }


    function delete($id){

       $user= User::find($id);
       $user->delete();

        return redirect()->route('student.index');
    }



    function show($id){
        //search student from array by ID
        //$std = $this->getStudentList();

        $std = User::find($id);
        return view('student.details')->with('user', $std);

    }

    function add(){

    	return view('student.add');
    }

    function store(Request $request){

        $request->validate([
            'name'=>'required',
            'contact'=>'required',
            'phone'=>'required',
            'username'=>'required',
            'password'=>'required'


        ]);



        $user =new User();
        $user->name = $request->name;
        $user->contact = $request->contact;
        $user->phone = $request->phone;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->type=2;
        $user->save();
    	return redirect()->route('student.index');





/*        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);*/

/*        $validator = $this->validate($request, [

            'username'=>'required',
            'password'=>'required'
        ])->validate();
        //$validator->validate();*/

/*        $validation = Validator::make($request->all(), [
            'username'=>'required',
            'password'=>'required'
        ]);

        if($validation->fails()){
            //return back()->with('errors', $validation->errors())->withInput();
            return redirect()->route('student.add')
                            ->with('errors', $validation->errors())
                            ->withInput();
        }*/

    	/*$user = new User();
        $user->username = $request->username;
        $user->password =$request->password;
        $user->type ='user';
        $user->dept ='CS';
        $user->name ='';
        $user->cgpa ='';

        if($user->save()){
            return redirect()->route('student.index');
        }else{
            return redirect()->route('student.add');
        }*/
    }


    function edit($id){
       // echo "hello";
    	$user = User::find($id);
    	return view('student.edit')->with('user', $user);
    }


    function update(Request $request, $id){

        $request->validate([
            'name'=>'required',
            'contact'=>'required',
            'phone'=>'required',
            'username'=>'required',
            'password'=>'required'


        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->contact = $request->contact;
        $user->phone = $request->phone;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->save();
    	return redirect()->route('student.index');
    }


    function carlist(){
        $carlist = \App\car::all();

        return view('student.carlist')->with('carlist', $carlist);;
    }


    function addcar(){

        return view('car.add');
    }


    function cstore(Request $request){
        $request->validate([
            'cname'=>'required',
            'ctype'=>'required',
            'cprice'=>'required'
        ]);
        $car = \App\car::all();
        $car =new car();
        $car->cname = $request->cname;
        $car->ctype = $request->ctype;
        $car->cprice = $request->cprice;
        $car->save();
        return redirect()->route('home.index');

    }
    function caredit($id){

        $car = car::find($id);
        return view('student.caredit')->with('car', $car);
    }

    function updatecar(Request $request, $id){

        $request->validate([
            'cname'=>'required',
            'ctype'=>'required',
            'cprice'=>'required',



        ]);

        $car = car::find($id);
        $car->cname = $request->cname;
        $car->ctype = $request->ctype;
        $car->cprice = $request->cprice;

        $car->save();
        return redirect()->route('student.carlist');
    }



    function deletecar($id){

        $car= car::find($id);
        $car->delete();

        return redirect()->route('student.carlist');
    }











}



