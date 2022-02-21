<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewBookController extends Controller
{
    public function allBooks(){
        return view('index');
    }
    public function allBooks2(){
        return view('index2');
    }
}
