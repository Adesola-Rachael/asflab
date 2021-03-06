<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Validator,Response;
use App\Models\Author;
use App\Models\books;
use App\Models\dept;
use App\Models\level;
use App\Models\main_book_cat;
use App\Models\sub_book_cat;

class BookController extends Controller
{
    public function getBook()
    {
        $authors=Author::get();
        $books=books::get();
        $depts=dept::get();
        $levels=level::get();
        $main_book_cats=main_book_cat::get();
        $sub_book_cats=sub_book_cat::get();
        $pageTitle='Asfaaua | All Books';
        $pageName='All Books';
        return view('cube/manage_book',compact('pageName','pageTitle','main_book_cats','books','depts','levels','authors','sub_book_cats'));

    }
    public function getBookId($id){
        $book=books::findorfail($id);
         if (!$book) {
            return Response::json(['success' => false, 'message' => 'Couldn`t fetch Data','status'=> 400, 'data' =>$book]);
        }else{
            // $book->save();
        return  Response::json(['success' => true, 'message' => 'Data Fetched successfully!', 
        'data' =>$book ,'status'=> 200]);
        } 
    }
    public function postBook(Request $request){
        $myrand=rand(10,1000000);
        $book=new books();
        $validateBook=Validator::make($request->all(),[ 
            'title'=>'required',
            'desc'=>'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'bookfile'=>'required|file|mimes:pdf,docs.xls,csv,docx|max:2048',
            'author'=>'required',
            'main_cat'=>'required',
            'sub_cat'=>'required'
        ]);
        // $mybook= $request->book;
        $book->title=$request->title;
        $book->description=$request->desc;
        $imageName=$request->image;
        $mainFileName=$request->bookfile;
        $book->author_id=$request->author;
        $book->dept_id=$request->dept;
        $book->level_id=$request->level;
        $book->main_book_cat_id=$request->main_cat;
        $book->sub_book_cat_id=$request->sub_cat;
        
        //  $filename = $request->file('image')->getClientOriginalName();
         $imageFileName=time() .rand(). '.' .$imageName->getClientOriginalExtension();

         $path = $request->file('image')->store('/uploads/images/books/'.$imageFileName);
         $book->image = $imageFileName;
        //  getting and validationg the book file
        $bookFileName=time() .rand(). '.' .$mainFileName->getClientOriginalExtension();
        $path = $request->file('bookfile')->store('/uploads/images/bookfile/'.$bookFileName);
         $book->bookfile = $bookFileName;
         
        if ($validateBook->fails()) {
            return Response::json(['success' => false, 'errors' => $validateBook->errors(),'status'=> 400, 'data' =>$book]);
        }else{
            $book->save();
        return  Response::json(['success' => true, 'message' => 'Book created successfully!', 
        'data' =>$book ,'status'=> 200]);
        }
    }
    // update book
    public function updateMainCat(Request $request ,$id){
        $book=books::findorfail($id);
        $validateBook=Validator::make($request->all(),[
            'edit_title'=>'required',
            // 'edit_desc'=>'required',
            //  'edit_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            // 'edit_author'=>'required',
            // 'edit_main_cat'=>'required',
            // 'edit_sub_cat'=>'required'
        ]);
        $book->title=$request->edit_title;
        // $book->image='2.jpg';
        // $book->description=$request->edit_desc;
        // $book->author_id=$request->edit_author;
        // $book->main_book_cat_id=$request->edit_main_cat;
        // $book->sub_book_cat_id=$request->edit_sub_cat;

        // if($request->hasfile('edit_image')){
        //     $filename = $request->file('edit_image')->getClientOriginalName();
        //     $path = $request->file('edit_image')->move('/uploads/images/books/'.$filename);
        //     $book->image = $filename;

        // }
    
        if ($validateBook->fails()) {
            return Response::json(['success' => false, 'errors' => $validateBook->errors(),'status'=> 400, 'data' =>$book]);
        }else{
            // $book->save();
        return  Response::json(['success' => true, 'message' => 'Book Updated successfully!', 
        'data' =>$book ,'status'=> 200]);
        }
    } 
 
    public function deleteBook($id){
        $book=books::findorfail($id);
        if(!$book){
            return Response::json(['success'=>false, 'message'=>'Book Does Not Exist','status'=> 400]);
            }
        if($book->delete()){
            return  Response::json(['success' => true, 'message' => 'Book  Deleted  successfully!', 
            'data' =>$book ,'status'=>200]);
        }
        
    }
}
