<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   
  
    
    public function About()
    {
        return view('about');
    }
    public function Contact()
    {
        return view('contact');
    }
 
    public function Blog()
    {
    
            $posts = Post::all();
            $latest_posts= Post::orderBy('created_at','DESC')->limit(1)->get();
           
                return view('blog',compact('posts','latest_posts'));
    
        
      
    }

  
    public function allPosts(){
        $posts = Post::where('user_id',Auth::user()->id)->get();
        return view('posts.all-posts',compact('posts'));
    }

    public function loginpage()
    {
        return view('loginpages');
    }
}
