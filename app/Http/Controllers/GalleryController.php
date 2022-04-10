<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gallery;
use Validator,Response;
class GalleryController extends Controller
{
    //
    public function getGallery()
    {
       $gallerys =gallery::get();
        // $gallerys=gallerys::get();
        // $depts=dept::get();
        // $levels=level::get();
        // $main_gallery_cats=main_gallery_cat::get();
        // $sub_gallery_cats=sub_gallery_cat::get();
        $pageTitle='Asfaaua | All Galleries';
        $pageName='All Galleries';
        return view('cube/manage_gallery',compact('pageName','pageTitle','gallerys'));

    }
    public function getgalleryId($id){
        $gallery=gallery::findorfail($id);
         if (!$gallery) {
            return Response::json(['success' => false, 'message' => 'Couldn`t fetch Data','status'=> 400, 'data' =>$gallery]);
        }else{
            // $gallery->save();
        return  Response::json(['success' => true, 'message' => 'Data Fetched successfully!', 
        'data' =>$gallery ,'status'=> 200]);
        } 
    }
    public function CreateGallery(Request $request){
        $myrand=rand(10,1000000);
        $gallery=new gallery();
        $validateGallery=Validator::make($request->all(),[
            'title'=>'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
             
        ]);
         $gallery->title=$request->title;

                 //  getting and validationg the gallery  
        $imageName=$request->image;
        $getImageEx=time() .rand(). '.' .$imageName->getClientOriginalExtension();

         $path = $request->file('image')->store('/uploads/images/gallery/'.$getImageEx);
         $gallery->image = $getImageEx;
        // $galleryFileName=time() .rand(). '.' .$mainFileName->getClientOriginalExtension();
        // $path = $request->file('galleryfile')->store('/uploads/images/galleryfile/'.$galleryFileName);
        //  $gallery->galleryfile = $galleryFileName;
         
        if ($validateGallery->fails()) {
            return Response::json(['success' => false, 'message' => $validateGallery->errors(),'status'=> 400, 'data' =>$gallery]);
        }else{
            $gallery->save();
        return  Response::json(['success' => true, 'message' => 'Gallery created successfully!', 
        'data' =>$gallery ,'status'=> 200]);
        }
    }
    public function updateGallery(Request $request, $id){
        $gallery = gallery::find($id);
        $validateGallery=Validator::make($request->all(),[
            'title'=>'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);  

        if($request->image != ''){        
            $path = $request->file('image')->store('/uploads/images/gallery/');

            //  $path = public_path().'/uploads/images/';
   
             //code for remove old file
             if($gallery->image != ''  && $gallery->image != null){
                  $file_old = $path.$gallery->image;
                  unlink($file_old);
             }
   
             //upload new file
             $file = $request->image;
             $filename = $file->getClientOriginalName();
             $file->move($path, $filename);
   
             //for update in table
             $gallery->image = $request->$filename;
            //  $employee->update(['file' => $filename]);
            if ($validateGallery->fails()) {
            return Response::json(['success' => false, 'message' => $validateGallery->errors(),'status'=> 400, 'data' =>$gallery]);
        }else{
            $gallery->save();
        return  Response::json(['success' => true, 'message' => 'gallery Updated successfully!', 
        'data' =>$gallery ,'status'=> 200]);
        }
        }
        // $gallery=gallery::findorfail($id);

        // $validateGallery=Validator::make($request->all(),[
        //     'title'=>'required',
        //     'image' =>'image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        // ]);
        // // $mymain_cat= $request->main_cat;
        // $gallery->title=$request->title;
        
        // if ($request->has('image')) {
        //     $imageName=$request->image;
        //     $getImageEx=time() .rand(). '.' .$imageName->getClientOriginalExtension();

        //     $path = $request->file('image')->store('/uploads/images/gallery/'.$getImageEx);
        //     $gallery->image = $getImageEx;
        // }else{
        //     $gallery->image = $request->old_image;;
        // }

 
    
        // if ($validateGallery->fails()) {
        //     return Response::json(['success' => false, 'message' => $validateGallery->errors(),'status'=> 400, 'data' =>$gallery]);
        // }else{
        //     $gallery->save();
        // return  Response::json(['success' => true, 'message' => 'gallery Updated successfully!', 
        // 'data' =>$gallery ,'status'=> 200]);
        // }
        
    }
}
