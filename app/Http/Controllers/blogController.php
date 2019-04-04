<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\posts;
use App\comment;
class blogController extends Controller
{
   public function index()
   {

   	$posts = posts::orderby('created_at','desc')->paginate(4);

   	return view('blog')->with('posts',$posts);
   }

   public function single($slug)
   {
       
   	$posts=Posts::where('slug','=',$slug)->first();

   	return view('yoga.single')->with('posts',$posts);

   }

 }  