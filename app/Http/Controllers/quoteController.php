<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\quote;
use Validator,Response;
class quoteController extends Controller
{
    public function getQuote(){
       
        $quotes=quote::get();

        $pageTitle='Asfaaua | Quote | daily quote';
        $pageName='All Quotes';
        return view('cube/manage_quote',compact('pageName','pageTitle','quotes'));
    }
    public function CreateQuote(Request $request){
        $quote= new quote();

        $validateQuote=Validator::make($request->all(),[
        'verse'=>'required',
        'date_display'=>'required',
        'scripture'=>'required'

        ]);
        // $mymain_cat= $request->main_cat;
        $quote->verse=$request->verse;
        $quote->date_display=$request->date_display;
        $quote->scripture=$request->scripture;
    
        if ($validateQuote->fails()) {
            return Response::json(['success' => false, 'message' => $validateQuote->errors(),'status'=> 400, 'data' =>$quote]);
        }else{
            $quote->save();
        return  Response::json(['success' => true, 'message' => 'Quote created successfully!', 
        'data' =>$quote ,'status'=> 200]);
        }
    }

    // get Quote By Id
    public function getQuoteId($id){
        $quotes=quote::findorfail($id);
         if (!$quotes) {
            return Response::json(['success' => false, 'message' => 'Couldn`t fetch Data','status'=> 400, 'data' =>$quote]);
        }else{
            // $quotes->save();
        return  Response::json(['success' => true, 'message' => 'Data Fetched successfully!', 
        'data' =>$quotes ,'status'=> 200]);
        } 
    }
    // update quote
    public function updateQuote(Request $request, $id){
        $quote=quote::findorfail($id);
        $validateQuote=Validator::make($request->all(),[
        'verse'=>'required',
        'date_display'=>'required',
        'scripture'=>'required'

        ]);
        // $mymain_cat= $request->main_cat;
        $quote->verse=$request->verse;
        $quote->date_display=$request->date_display;
        $quote->scripture=$request->scripture;
    
        if ($validateQuote->fails()) {
            return Response::json(['success' => false, 'message' => $validateQuote->errors(),'status'=> 400, 'data' =>$quote]);
        }else{
            $quote->save();
        return  Response::json(['success' => true, 'message' => 'Quote Updated successfully!', 
        'data' =>$quote ,'status'=> 200]);
        }
    }

    public function deleteQuote($id){
        $quote=quote::findorfail($id);
        if(!$quote){
            return Response::json(['success'=>false, 'message'=>'Department Does Not Exist','status'=> 400]);
            }
        if($quote->delete()){
            return  Response::json(['success' => true, 'message' => 'Quote  Deleted  successfully!', 
            'data' =>$quote ,'status'=>200]);
        }
        
    }


}
