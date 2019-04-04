<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\posts;
use App\about;
use Mail;
use Session;
use App\User;
use App\comment;
use Auth;
use App\category;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         $users = User::get();
            $comments = comment::get();
            $services1 = posts::orderby('created_at', 'desc')->where('category_id', '=', 8)->get()->take(1); 
            $services = posts::orderby('created_at', 'desc')->where('category_id', '=', 8)->get(); 
            $events = posts::orderby('created_at', 'desc')->where('category_id', '=', 7)->get(); 
            $posts_1 = posts::orderby('created_at', 'desc')->take(1)->get();
            $ourClassesno = posts::where('category_id', '=', '6')->get();
            $posts = posts::orderby('created_at', 'desc')->get();
            $abouts = posts::orderby('created_at', 'desc')->where('category_id', '=', 9)->get()->take(1);
         return view('yoga.index')->with('abouts',$abouts)
        ->with('comments',$comments)
        ->with('ourClassesno',$ourClassesno)
        ->with('users',$users)
        ->with('services1',$services1)
        ->with('services',$services)
         ->with('events',$events)
        ->with('posts_1',$posts_1);
    }
}
