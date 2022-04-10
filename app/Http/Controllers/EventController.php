<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\event;
use Validator,Response;
class EventController extends Controller
{
   //get event
   
   public function getEvent(){
       $events=event::get();
 
        $pageTitle='Asfaaua | Events';
        $pageName='All Events';
        return view('cube/manage_event',compact('pageName','pageTitle','events'));
   }
//    get event by id
   public function getEventId($id){
    $events=event::findorfail($id);
     if (!$events) {
        return Response::json(['success' => false, 'message' => 'Couldn`t fetch Data','status'=> 400, 'data' =>$events]);
    }else{
        // $events->save();
    return  Response::json(['success' => true, 'message' => 'Data Fetched successfully!', 
    'data' =>$events ,'status'=> 200]);
    } 
}
// update event
    public function updateEvent(Request $request, $id){
        $events=event::findorfail($id);
        $validateEvent=Validator::make($request->all(),[
        'title'=>'required|unique:events,title,'.$id,
        'day'=>'required',
        'time'=>'required',
        'detail'=>'required'

        ]);
        // $mymain_cat= $request->main_cat;
        $events->title=$request->title;
        $events->day=$request->day;
        $events->time=$request->time;
        $events->detail=$request->detail;

        if ($validateEvent->fails()) {
            return Response::json(['success' => false, 'message' => $validateEvent->errors(),'status'=> 400, 'data' =>$events]);
        }else{
            $events->save();
        return  Response::json(['success' => true, 'message' => 'events Updated successfully!', 
        'data' =>$events ,'status'=> 200]);
        }
    }

}
