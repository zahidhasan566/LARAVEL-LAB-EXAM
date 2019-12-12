<?php

namespace App\Http\Controllers;
use App\blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {

        return view('blog.index');


    }

    public function store(Request $request)
    {

        $blog =new blog();

        $blog ->name = $request->username;
        $blog ->text = $request->blog;

        $blog->save();

        return redirect()->route('home.emp');


    }












}
