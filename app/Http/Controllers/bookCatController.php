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
    // for sub cat



    public function Create_sub_cat(Request $request)
    {
        //ceate book main ccategory
        $sub_cat= new sub_book_cat();

        $validatesub_cat=Validator::make($request->all(),[
        'title'=>'required|unique:sub_book_cats',
        'main_cat'=>'required'
        ]);
        // $mymain_cat= $request->main_cat;
        $sub_cat->title=$request->title;
        $sub_cat->main_book_cat_id=$request->main_cat;
    
        if ($validatesub_cat->fails()) {
            return Response::json(['success' => false, 'message' => $validatesub_cat->errors(),'status'=> 400, 'data' =>$sub_cat]);
        }else{
            $sub_cat->save();
        return  Response::json(['success' => true, 'message' => 'Sub Category  created successfully!', 
        'data' =>$sub_cat ,'status'=> 200]);
        }

        
    }
    public function getSubCatId($id){
        $sub_cat=sub_book_cat::findorfail($id);
            if (!$sub_cat) {
            return Response::json(['success' => false, 'message' => 'Couldn`t fetch Data','status'=> 400, 'data' =>$main_cat]);
        }else{
          
        return  Response::json(['success' => true, 'message' => 'Sub Category Fetched successfully!', 
        'data' =>$sub_cat ,'status'=> 200]);
        } 
    }
    public function updateSubCat(Request $request ,$id){
        $sub_cat=sub_book_cat::findorfail($id);
        $validatesub_cat=Validator::make($request->all(),[
            'title' => 'required|unique:sub_book_cats,title,'.$id,
              'main_cat'=>'required'
        ]);
        $sub_cat->title=$request->title;
        $sub_cat->main_book_cat_id=$request->main_cat;
    
        if ($validatesub_cat->fails()) {
            return Response::json(['success' => false, 'errors' => $validatesub_cat->errors(),'status'=> 400, 'data' =>$sub_cat]);
        }else{
            $sub_cat->save();
        return  Response::json(['success' => true, 'message' => 'Sub Category Updated successfully!', 
        'data' =>$sub_cat ,'status'=> 200]);
        }
    } 
    public function deleteSubCat($id)
    {
        // delete main_cat
        $sub_cat=sub_book_cat::findorfail($id);
        if(!$sub_cat){
            return Response::json(['success'=>false, 'message'=>'Sub Cat Does Not Exist','status'=> 400]);
            }
        if($sub_cat->delete()){
            return  Response::json(['success' => true, 'message' => 'Sub category  Deleted  successfully!', 
            'data' =>$sub_cat ,'status'=>200]);
        }
    }
    
}
