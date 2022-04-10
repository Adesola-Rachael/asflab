<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\quote;
use App\Models\event;
class mainPageController extends Controller
{
    //
    public function home(){
        $quotes=quote::get();
        $events=event::get();
        return view('home',compact('quotes','events'));
        
    }
    public function bookstore(){
        return view('bookstore');
    }
    public function book_categories(){
        return view('book_categories');
    }
    

}
