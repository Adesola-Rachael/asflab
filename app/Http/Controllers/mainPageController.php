<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainPageController extends Controller
{
    //
    public function home(){
        return view('home');
    }
}
