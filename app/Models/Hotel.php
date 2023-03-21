<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $fillable = [
    'user_id',
    'hotel_name',
    'type',
    'address',
    'city',
    'description',
    'thumbnail'
];
public function user(){
    return $this->belongsTo(User::class,'user_id');
}
}
