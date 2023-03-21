<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'user_id',
        'place_name',
        'type',
        'province',
        'city',
        'description',
        'thumbnail'
    ];
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

   
}
