<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use DB;
use App\Models\User;
use App\Models\Post;
use App\Models\Place;
use App\Models\Hotel;
use App\Models\Booking;


use Illuminate\Http\Request;

class UserController extends Controller
{

    use RegistersUsers;
    public function dashboard()
    {
        //return view('welcome');

       
            $users = User::all();
            $posts = Post::where('user_id',Auth::user()->id)->get();
            $places = Place::all();
            $hotels = Hotel::where('user_id',Auth::user()->id)->get();
            
            $bookinghotel=Booking::all();
    
        
            $role=Auth::user()->role;
           
          
                    
                    if($role=='admin'){
                        
                        return view('admin.dashboard',compact('users','posts','places'));
                    }
                 
                    elseif($role=='Hotel Agency'){
                        return view('user.hotel.dashboard',compact('hotels','posts','bookinghotel'));

                    }elseif($role=='Travel Agency'){
                        return view('user.travel.dashboard');
                    }
                    else{
                        return view('welcome');
                    }
       

        
    }

  
    // public function index(){
    //     return view('user.profile');
    // }
    public function profile(){
        {
            $role=Auth::user()->role;
    
            if($role=='admin'){
                
                return view('admin.adminprofile');
            }
            elseif($role=='user'){

                return view('user.tourist.profile');

            }elseif($role=='Hotel Agency'){

                return view('user.hotel.profile');

            }elseif($role=='Travel Agency'){

                return view('user.travel.profile');

            }
           
        }
     
    }
    //Add hotel view
    public function addhotel(){
        {
            $role=Auth::user()->role;
    
            if($role=='admin'){
                return view('admin.addhotel');
            }
            else{
                return view('user.dashboard');
            }
        }
     
        
    }
    
    public function adddriver(){
        {
            $role=Auth::user()->role;
    
            if($role=='Travel Agency'){
                return view('user.travel.adddriver');
            }
            else{
                return view('user.dashboard');
            }
        }
     
    }
    
    //Add travel view
    public function addtravel(){
        {
            $role=Auth::user()->role;
    
            if($role=='admin'){
                return view('admin.addtravel');
            }
            else{
                return view('user.dashboard');
            }
        }
     
    }
  
    public function edit($userId){
        
        $user = User::findOrFail($userId);
        return view('user.edit',compact('user'));

    }
    public function delete($userId){
        User::FindOrFail($userId)->delete();
        return redirect(route('dashboard'));
    }
    
    
    public function update($userId,Request $request){
        //dd($request ->all());
        User::findOrFail($userId)->update($request ->all());
        return redirect(route('dashboard'))->with('status','user updated!');
    }
    public function createUser(Request $request)
    {
         User::create([
            'name' => $request->name,
            'type' => $request->type,
            'address'   => $request->address,
            'city'   => $request->city,
            'avalability'=> $request->avalability,
            'charges'=> $request->charges,
            'email' => $request->email,
           
            'password' => Hash::make($request->password),
            'role'=>$request->role,
          
        ]);

        return redirect(route('dashboard'))->with('success','User Added!');
    }
}

