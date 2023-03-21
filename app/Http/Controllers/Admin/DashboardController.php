<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.adminprofile');
    }
    public function addplacesview(){
        return view('admin.addplaces');
    }
    
}
