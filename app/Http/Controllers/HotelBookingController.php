<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Booking;
use Illuminate\Support\Facades\Validator;
use DB;

class HotelBookingController extends Controller
{
    public function store(Request $request){

        $validator = Validator::make($request ->all(),[
            
            'tourist_name' => 'required',
            'email' => 'required',
            'hotel_id' =>'required',
          
            'checkin' =>'required',
            'checkout'=>'required',

        ]);
        
        if($validator->fails()){
            return redirect()->back()->with('fail','Something is wrong! are you logged in?');
        }
        elseif( $id= Session::get ('loginId')!=null)
        {
            
          
            Booking::create([
                  
                'tourist_id'=>$id,
                'tourist_name' => $request->tourist_name,
                'country' => $request ->country,
                'email' => $request ->email,
               
                'hotel_id' =>$request ->hotel_id,
               // 'agent_id'->$request->agent_id,
                'checkin'=>$request->checkin,
                'checkout' =>$request->checkout,
                'comfort' => $request ->comfort,
                'adults' => $request ->adults,
                'childrens' => $request ->childrens,
                'rooms' => $request ->rooms,
                'message' => $request ->message,
                

    
    
            ]);
            return  redirect(route('tourist_dashboard'))->with('success','booking request send successfully!');
        }else{
            return redirect()->back()->with('fail',' Are you logged in?');

        }
    }
       
        
    
    
    public function accept($bookingId){
        $book = Booking::findOrFail($bookingId);
        $book ->action = "Accepted";
        $book->save();
        return redirect()->back();
    }
    public function cancel($bookingId){
        $book = Booking::findOrFail($bookingId);
        $book ->action = "Cancelled";
        $book->save();
        return redirect()->back();
    }
    
    public function delete($bookingId){
        Booking::FindOrFail($bookingId)->delete();
        return redirect(route('tourist_dashboard'))->with('booking request delete successfully!!');
    }
}
