<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response,Validator;
use App\Models\main_book_cat;
use App\Models\sub_book_cat;

class bookCatController extends Controller
{
    //create new main category
    public function Create_main_cat(Request $request)
    {
        //ceate book main ccategory
        $main_cat= new main_book_cat();

        $validatemain_cat=Validator::make($request->all(),[
        'title'=>'required|unique:main_book_cats',
        'desc'=>'required'
        ]);
        // $mymain_cat= $request->main_cat;
        $main_cat->title=$request->title;
        $main_cat->description=$request->desc;
    
        if ($validatemain_cat->fails()) {
            return Response::json(['success' => false, 'message' => $validatemain_cat->errors(),'status'=> 400, 'data' =>$main_cat]);
        }else{
            $main_cat->save();
        return  Response::json(['success' => true, 'message' => 'Main Category  created successfully!', 
        'data' =>$main_cat ,'status'=> 200]);
        }

        
    }
    public function getMainCatId($id){
        $main_cat=main_book_cat::findorfail($id);
            if (!$main_cat) {
            return Response::json(['success' => false, 'message' => 'Couldn`t fetch Data','status'=> 400, 'data' =>$main_cat]);
        }else{
          
        return  Response::json(['success' => true, 'message' => 'main_cat Fetched successfully!', 
        'data' =>$main_cat ,'status'=> 200]);
        } 
    }
    public function updateMainCat(Request $request ,$id){
        $main_cat=main_book_cat::findorfail($id);
        $validatemain_cat=Validator::make($request->all(),[
            'title' => 'required|unique:main_book_cats,title,'.$id,
              'desc'=>'required'
        ]);
        $main_cat->title=$request->title;
        $main_cat->description=$request->desc;
    
        if ($validatemain_cat->fails()) {
            return Response::json(['success' => false, 'errors' => $validatemain_cat->errors(),'status'=> 400, 'data' =>$main_cat]);
        }else{
            $main_cat->save();
        return  Response::json(['success' => true, 'message' => 'Main Category Updated successfully!', 
        'data' =>$main_cat ,'status'=> 200]);
        }
    } 
    public function deleteMainCat($id)
    {
        // delete main_cat
        $main_cat=main_book_cat::findorfail($id);
        if(!$main_cat){
            return Response::json(['success'=>false, 'message'=>'main_cat Does Not Exist','status'=> 400]);
            }
        if($main_cat->delete()){
            return  Response::json(['success' => true, 'message' => 'main category  Deleted  successfully!', 
            'data' =>$main_cat ,'status'=>200]);
        }
    }
    // update fac
    
}
