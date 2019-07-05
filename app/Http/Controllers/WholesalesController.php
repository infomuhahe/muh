<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile_model;
use App\Wholesale;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class WholesalesController extends Controller
{
    
    public function index(){

        return view('wholesale.registerwh');
        }
    
        public function register(Request $request){
            $this->validate($request,[
            'name'=>'required|string|max:255',
                'email'=>'required|string|email|unique:users,email',
                'phone'=>'required|string|max:255',
                'companyname'=>'required|string|max:255',
                'country'=>'required|string|max:255',
                'address'=>'required|string|max:255',
                'password'=>'required|min:6|confirmed',
                'checkBox'=>'required',
                
            ]);
            print('write your other code here.');
            
            $input_data=$request->all();
            $input_data['password']=Hash::make($input_data['password']);
            Wholesale::create($input_data);
            return back()->with('message','Registered already!');
        }

        public function login(Request $request){
            $input_data=$request->all();
            if(Auth::attempt(['email'=>$input_data['email'],'password'=>$input_data['password']])){
                Session::put('frontSession',$input_data['email']);
                return redirect('/dashboard');
            }else{
                return back()->with('message','Account is not Valid!');
            }
        }
        public function logout(){
            Auth::logout();
            Session::forget('frontSession');
            return redirect('/');
        }

        public function terms_conditions(){

            return view('wholesale.termsconditions_wholesale');
        }

        public function logndash(){

            return view('wholesale.dashboard');
         
        }
    }