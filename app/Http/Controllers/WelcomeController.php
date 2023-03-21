<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;


class WelcomeController extends Controller
{
    

    
    public function welcome(){
       
        $latest_place= Place::orderBy('created_at','DESC')->limit(3)->get();
       
            return view('welcome',compact('latest_place'));

    }
      

    
}
