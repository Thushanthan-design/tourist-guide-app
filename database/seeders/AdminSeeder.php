<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Tourist;
use App\Models\Hotel;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'type' => 'admin',
            'address' => '157/F,hdga,kadg',

            'email' => 'admin@gmail.com',
            'password' => bcrypt(12345678),
            'role' => 'admin'
        ]);
        User::create([
            'name' => 'Thushanthan',
            'type' => 'admin',
            'address' => '157/F,hdga,kadg',

            'email' => 'thushanthan@gmail.com',
            'password' => bcrypt(12345678),
            'role' => 'admin'
        ]);
        User::create([
            'name' => 'hotel agent1',
            'type' => 'agent',
            'address' => '157/F,hdga,kadg',

            'email' => 'hotel1@gmail.com',
            'password' => bcrypt(12345678),
            'role' => 'Hotel Agency'
        ]);
        Tourist::create([
            'user_name' => 'chathura',
            'age' => '24',
            'gender' => 'male',
            'origin' => 'Sri lanka',
            'passport_no' => 'Sl1214253',
            'email' => 'lak@gmail.com',
            'password' => bcrypt(12345678),
            //hhhhhhhhhhhhhhhhhhh
        ]);
        Hotel::create([
            'user_id' => '2',
            'hotel_name' => 'Kings Hotel',
            'type' => '5 Star',
            'address' => 'Sri lanka',
            'city' => 'Kandy',
            'description' => 'xxfgcgvbmn,',
            'thumbnail' => '(12345678)',

        ]);
        Hotel::create([
            'user_id' => '2',
            'hotel_name' => 'Nice Hotel',
            'type' => '5 Star',
            'address' => 'Sri lanka',
            'city' => 'Kandy',
            'description' => 'xxfgcgvbmn,',
            'thumbnail' => '(12345678)',

        ]);
    }
}
