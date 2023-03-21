<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tourist;
class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
       
        'tourist_id',
        'tourist_name',
        'country',
        'email',
        'hotel_id',
        //'agent_id',
        'checkin',
        'checkout',
        'comfort',
        'adults',
        'childrens',
        'rooms',
        'message',
        'price',

    ];
    // public function user(){
    //     return $this->belongsTo(User::class,'agent_id');
    // }
    public function tourist(){
        return $this->belongsTo(Tourist::class,'tourist_id');
    }
    public function hotel(){
        return $this->belongsTo(Hotel::class,'hotel_id');
    }
    
}
