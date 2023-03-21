<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use Illuminate\Support\Facades\Validator;

class HotelController extends Controller
{
    public function store(Request $request){

        $validator = Validator::make($request ->all(),[
            'hotel_name' => 'required',
            'type' => 'required',
            'address'=>'required',
            'city' => 'required',

            'description' =>'required',
            'thumbnail' => 'required|image'

        ]);
        if($validator->fails()){
            return back()->with('status','Something is wrong!');
        }else{
            
        $imageName = time() . ".".$request ->thumbnail->extension();
        //save image in public folder
                $request->thumbnail->move(public_path('thumbnails'),$imageName );
                
                hotel::create([
                    'user_id'=>auth()->user()->id,
                    'hotel_name' => $request->hotel_name,
                    'type' => $request ->type,
                    'address' => $request ->address,
                    'city' => $request ->city,

                    'description'=>$request->description,
                    'thumbnail' =>$imageName
        
        
                ]);
            }
            return  redirect(route('dashboard'))->with('status','hotel created successfully!');
    }
     
    public function welcomehotel(){
        $hotels = Hotel::all();
        // $latest_posts= Place::orderBy('created_at','DESC')->limit(1)->get();
       
            return view('hotel',compact('hotels'));

    }
    public function Addhotelview()
    {
        return view('user.hotel.addhotel');
    }

    public function show($hotelId){

        $hotel = Hotel::findOrFail($hotelId);
        return view('hotel.view',compact('hotel'));
    }

    public function edit($hotelId){
        $hotel = Hotel::findOrFail($hotelId);
        return view('hotel.edit',compact('hotel'));
    } 

    public function update($hotelId,Request $request){
        //dd($request ->all());
        Hotel::findOrFail($hotelId)->update($request ->all());
        return redirect(route('dashboard'))->with('status','hotel updated!');
    }

    public function delete($hotelId){
        Hotel::FindOrFail($hotelId)->delete();
        return redirect(route('dashboard'));
    }
}
