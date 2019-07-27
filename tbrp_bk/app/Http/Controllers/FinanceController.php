<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceController extends Controller
{
    //
    public function index()
    {
        //return view('home');
        //$user = User::find(auth()->id());

        return view('Finance.home');
    }
}
