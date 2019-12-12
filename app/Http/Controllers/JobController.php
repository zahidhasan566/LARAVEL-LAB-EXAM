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
    public function index()
    {

           $carlist = \App\car::all();
            $member = \App\member::all();
            // $stds = DB::table('users')->get();
            return view('job.index')->with('member', $member)->with('car', $carlist);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('job.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'pname'=>'required',
            'quantity'=>'required',
            'price'=>'required'
        ]);
        $user =new job();

        $user->name = $request->pname;
        $user->quantity = $request->quantity;
        $user->price = $request->price;


        $user->save();
    	return redirect()->route('job.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       // $job = job::find($job);
        $id = job::where('id',  $id)
            ->get();
        //echo($id);
       return view('job.edit')->with('id', $id[0]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'pname'=>'required',
            'quantity'=>'required',
            'price'=>'required'
        ]);



        $id = job::find($id);
        $id->name = $request->pname;
        $id->quantity = $request->quantity;
        $id->price = $request->price;
        $id->save();
        return redirect()->route('job.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cid = job::find($id);

        if($cid->delete()){
            $deletedRows = job::where('id', $id)->delete();
            return redirect()->route('job.index');
        }else{
            return redirect()->route('home.index',$id);
        }
    }



}
