<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        return view('home.index');
    }


    function about(Request $request)
    {
        $username = $request->input('username');
        $tt = 7777;
        //return view('home.hello',compact('username','tt'));
        //return view('home.hello')->withUsername($username)->withTt($tt);
        return view('home.hello')->with('username',$username);
    }

}
