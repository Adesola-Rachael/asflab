<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Validator,Response;
use App\Models\User;

class UserController extends Controller
{
    // public function createUser(Request $request){
    //     $user =new User();
    //     $user->name=$request->name;
    //     $user->email=$request->email;
    //     $user->password=Hash::make($request->password);
    //     if($user->save()){
    //         return new UserResource($user);
    //     }
    // }
    // public function getLogin(){
    //     // $credentials=[
    //     //     'email'=>'gtreasure162@gmail.com',
    //     //     'password'=>'yoursecret'
    //     // ];
    //     $credentials=request()->only(['email','password']);
    //     $token=auth()->attempt($credentials);
    //     // if($token){
    //     //     return "1";
    //     // }return "0";
    //     return $token;
    // }
    public function register(Request $request){
        return view('register');
    }
    public function postRegister(Request $request){
        $user  = new User();
        $validateData = Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'user_name'=>'required',
            'role'=>'required',
            'dept'=>'required',
            'level'=>'required',
            'password'=>'required|min:5',
         ]);
         $password=Hash::make($request->password);
        $username=$request->user_name;

        // if($password<5){
        //     return Response::json(['success'=>true,'status'=>'error', 'messsage'=>'Your Password Must Be More Than Five Characters','data'=>$data]);
 
        // }else if($username<5){
        //     return Response::json(['success'=>true,'status'=>'error', 'messsage'=>'Your User Name Must Be More Than Five Characters','data'=>$data]);

        // }else{


            $user->name=$request->name;
            $user->email=$request->email;
            $user->user_name=$request->user_name;
            $user->role=$request->role;
            $user->dept=$request->dept;
            $user->level=$request->level;
            $user->password= $password;

            if($validateData->fails()){
                return Response::json(['success'=>true,'status'=>'error', 'message'=>$validateData->errors(),'data'=>$user]);
            }else{
                $user->save();
                return Response::json(['success'=>'true','status'=>'success', 'message'=>'Registration Successful']);
            }
        

    }
    public function login(){
        return view('login');
    }
    public function postLogin(Request $request){
        // $user  = new User();
        // $input = $request->all();
        // $this->validate($request,[
        //     'login_name' => 'required',
        //     'password' => 'required',
        // ]);
       
        // $user->email=$request->email;
        // $user->password= $password;

    //     if (Hash::check('plain-text', $hashedPassword)) {
    //         // The passwords match...
    //     }
    //      if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
    //     {
    //         // 
    //     }else{
    //         return redirect()->route('login')
    //             ->with('error','Email-Address And Password Are Wrong.');
    //     }
    //     $user=User::where('admin_no','=',$request->admin_no)->first();
    //     if($user){
    //         if(User::where('fname','=',$request->password)->first()){
                
    //             $request->session()->put('loggedIn',$user->id);
    //             return redirect('exam_instruct');
    //         }else{
    //             return back()->with('password_fail','invalid password');
    //         }
    //     }else{
    //         return back()->with('all_fail','No record Found For This Registration Number');
    //     }
        
    }
}


 