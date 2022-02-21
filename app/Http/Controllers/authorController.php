<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Response,Validator;
use App\Models\Author;
use App\Models\main_book_cat;
use App\Models\sub_book_cat;

class authorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAuthor()
    {
        $authors=Author::get();
        $main_book_cats=main_book_cat::get();
        $sub_book_cats=sub_book_cat::get();
        $pageTitle='tmgr | All Books';
        $pageName='All Books';
        return view('cube/manage_author',compact('pageName','pageTitle','main_book_cats','authors','sub_book_cats'));
         // $author=Author::all();
        // return  Response::json(['success' => true, 'message' => 'All Authors', 
        //                      'data' => $author,'status'=>200]);
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createAuthor(Request $request){
        $author= new Author();

        $validateAuthor=Validator::make($request->all(),[
        'name'=>'required|unique:authors',
        'about'=>'required'
        ]);
        // $myauthor= $request->author;
        $author->name=$request->name;
        $author->about=$request->about;
    
        if ($validateAuthor->fails()) {
            return Response::json(['success' => false, 'message' => $validateAuthor->errors(),'status'=> 400, 'data' =>$author]);
        }else{
            $author->save();
        return  Response::json(['success' => true, 'message' => 'Author created successfully!', 
        'data' =>$author ,'status'=> 200]);
        }

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $author= new author();
        $validateAuthor=Validator::make($request->all(),[
        'name'=>'required',
        'about'=>'required'
        ]);
        // $myauthor= $request->author;
        $author->author=$request->author;
    
        if ($validateAuthor->fails()) {
            return Response::json(['success' => false, 'errors' => $validateAuthor->errors(),'status'=> 400, 'data' =>$author]);
        }else{
            $author->save();
        return  Response::json(['success' => true, 'message' => 'Department created successfully!', 
        'data' =>$author ,'status'=> 200]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
