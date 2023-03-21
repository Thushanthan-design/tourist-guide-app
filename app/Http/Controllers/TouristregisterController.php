<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth,Guest;

use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use App\Models\Tourist;
use App\Models\Post;

use Session;

class TouristregisterController extends Controller
{
   
    function create(Request $request)
    {
        $request ->validate([
            'user_name'=>'required',
            'age'=>'required',
            'gender'=>'required',
            'origin'=>'required',
            'passport_no'=>'required',
            'email'=>'required|email|unique:tourists',
            'password'=>'required',
        ]);
        $tourist =new Tourist();
        $tourist -> user_name = $request ->user_name;
        $tourist -> age = $request ->age;
        $tourist -> gender = $request ->gender;
        $tourist -> origin = $request ->origin;
        $tourist -> passport_no = $request ->passport_no;
        $tourist -> email = $request ->email;
        $tourist -> password = Hash::make($request->password);

        $res = $tourist ->save();

        if($res){
            return redirect()->back()->with('success','You are now registered');
        }else{
            return redirect()->back()->with('fail','Fail to register');

        }

 
          

       
        return redirect(route('tourist_dashboard'));
         
    }
    function lTourist(Request $request){
        $request ->validate([
           
            'email'=>'required|email',
            'password'=>'required',
        ]);
        
 
        $tourist =Tourist::where('email', '=',$request->email)->first();

        if($tourist){
            if(Hash::check($request->password,$tourist->password)){
                $request ->session()->put('loginId',$tourist->id);
               
                return redirect()->route('tourist_dashboard');
            }else{
                return back()->with('fail','this password not correct.');
            }
          
        }else{
            return back()->with('fail','this email not registerd.');
        }
    }
}
