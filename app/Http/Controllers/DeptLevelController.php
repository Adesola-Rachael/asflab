<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response,Validator;
use App\Models\dept;
use App\Models\level;
use App\Models\faculty;

class DeptLevelController extends Controller
{
    //
    public function Dept_Level(){
        $depts=dept::get();
        $levels=level::get();
        $faculty=faculty::get();
        $pageTitle='Asfaaua | dept/Level';
        $pageName='dept/level';
        // if($depts){
        //   return  Response::json(['success'=>true, 'dept'=>$depts, ]);
        // }
        return view('cube/dept_level', compact('levels','faculty','depts','pageName','pageTitle'));
    }
    public function getDeptId($id){
        $depts=dept::findorfail($id);
         if (!$depts) {
            return Response::json(['success' => false, 'message' => 'Couldn`t fetch Data','status'=> 400, 'data' =>$dept]);
        }else{
            // $depts->save();
        return  Response::json(['success' => true, 'message' => 'Data Fetched successfully!', 
        'data' =>$depts ,'status'=> 200]);
        } 
    }
    public function getFacId($id){
        $faculty=faculty::findorfail($id);
         if (!$faculty) {
            return Response::json(['success' => false, 'message' => 'Couldn`t fetch Data','status'=> 400, 'data' =>$faculty]);
        }else{
            $faculty->save();
        return  Response::json(['success' => true, 'message' => 'Data Fetched successfully!', 
        'data' =>$faculty ,'status'=> 200]);
        } 
    }

    public function getLevelId($id){
        $level=level::findorfail($id);
         if (!$level) {
            return Response::json(['success' => false, 'message' => 'Couldn`t fetch Data','status'=> 400, 'data' =>$level]);
        }else{
            $level->save();
        return  Response::json(['success' => true, 'message' => 'Data Fetched successfully!', 
        'data' =>$level ,'status'=> 200]);
        } 
    }
    public function postDept(Request $request){
        $dept= new dept();
        $validateDept=Validator::make($request->all(),[
        'dept'=>'required|unique:depts',
        ]);
        // $mydept= $request->dept;
        $dept->dept=$request->dept;
    
        if ($validateDept->fails()) {
            return Response::json(['success' => false, 'message' => $validateDept->errors(),'status'=> 400, 'data' =>$dept]);
        }else{
            $dept->save();
        return  Response::json(['success' => true, 'message' => 'Department created successfully!', 
        'data' =>$dept ,'status'=> 200]);
        }
        
    }

    public function postFac(Request $request){
        $faculty= new faculty();
        $validateFac=Validator::make($request->all(),[
        'faculty'=>'required|unique:faculties'
        ]);
        // $mydept= $request->dept;
        $faculty->faculty=$request->faculty;
    
        if ($validateFac->fails()) {
            return Response::json(['success' => false, 'errors' => $validateFac->errors(),'status'=> 400, 'data' =>$faculty]);
        }else{
            $faculty->save();
        return  Response::json(['success' => true, 'message' => 'Faculty created successfully!', 
        'data' =>$faculty ,'status'=> 200]);
        }
        
    }

    public function postLevel(Request $request){
        $level= new level();
        $validateLevel=Validator::make($request->all(),[
        'level'=>'required|unique:levels'
        ]);
        // $mydept= $request->dept;
        $level->level=$request->level;
    
        if ($validateLevel->fails()) {
            return Response::json(['success' => false, 'errors' => $validateLevel->errors(),'status'=> 400, 'data' =>$level]);
        }else{
            $level->save();
        return  Response::json(['success' => true, 'message' => 'Level created successfully!', 
        'data' =>$level ,'status'=> 200]);
        } 
    }
   

    // update Dept
    public function updateDept(Request $request ,$id){
        $depts=dept::findorfail($id);
        $validateDept=Validator::make($request->all(),[
            'dept'=>'required|unique:depts,dept,'.$id,
        ]);
        // $mydept= $request->dept;
        $depts->dept=$request->dept;
    
        if ($validateDept->fails()) {
            return Response::json(['success' => false, 'message' => $validateDept->errors(),'status'=> 400, 'data' =>$depts]);
        }else{
            $depts->save();
        return  Response::json(['success' => true, 'message' => 'Department Updated successfully!', 
        'data' =>$depts ,'status'=> 200]);
        }
    } 
    // update fac
     public function updateFac(Request $request ,$id){
       $faculty=faculty::findorfail($id);
        $validateFac=Validator::make($request->all(),[
            'faculty'=>'required|unique:faculties,faculty,'.$id,
        ]);
        // $mydept= $request->dept;
        $faculty->faculty=$request->faculty;
    
        if ($validateFac->fails()) {
            return Response::json(['success' => false, 'errors' => $validateFac->errors(),'status'=> 400, 'data' =>$faculty]);
        }else{
            $faculty->save();
        return  Response::json(['success' => true, 'message' => 'Faculty Updated successfully!', 
        'data' =>$faculty ,'status'=> 200]);
        }
    } 
    // update level
    public function updateLevel(Request $request ,$id){
        $level=level::findorfail($id);
         $validateLevel=Validator::make($request->all(),[
             'level'=>'required|unique:levels,level,'.$id,
         ]);
         // $mydept= $request->dept;
         $level->level=$request->level;
     
         if ($validateLevel->fails()) {
             return Response::json(['success' => false, 'errors' => $validateLevel->errors(),'status'=> 400, 'data' =>$level]);
         }else{
             $level->save();
         return  Response::json(['success' => true, 'message' => 'Level Updated successfully!', 
         'data' =>$level ,'status'=> 200]);
         }
     } 
    // delete Dept
    // delete Dept

 
    public function deleteDept($id){
        $dept=dept::findorfail($id);
        if(!$dept){
            return Response::json(['success'=>false, 'message'=>'Department Does Not Exist','status'=> 400]);
            }
        if($dept->delete()){
            return  Response::json(['success' => true, 'message' => 'Department  Deleted  successfully!', 
            'data' =>$dept ,'status'=>200]);
        }
        
    }

    // delete faculty
    public function deleteFac($id){
        $faculty=faculty::findorfail($id);
        if(!$faculty){
            return Response::json(['success'=>false, 'message'=>'Faculty Does Not Exist','status'=> 400]);
            }
        if($faculty->delete()){
            return  Response::json(['success' => true, 'message' => 'Faculty  Deleted  successfully!', 
            'data' =>$faculty ,'status'=>200]);
        }
        
    }
    // // delete level
    public function deleteLevel($id){
        $level=level::findorfail($id);
        if(!$level){
            return Response::json(['success'=>false, 'message'=>'Level Does Not Exist','status'=> 400]);
            }
        if($level->delete()){
            return  Response::json(['success' => true, 'message' => 'Level  Deleted  successfully!', 
            'data' =>$level ,'status'=>200]);
        }
        
    }
    
}
