<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UltraVisionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('home');
        //$user = User::find(auth()->id());

        return view('UltraVision.home');
    }
}
