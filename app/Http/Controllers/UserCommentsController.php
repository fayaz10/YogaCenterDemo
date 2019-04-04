<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\UserPosts;
class UserCommentsController extends Controller
{

        public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comms = Comment::orderby('created_at','desc')->get();
          return redirect('UserPages')->with('comms',$comms);
        // return redirect('UserPages')->with('success','Commented created');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$posts_id)
    {
        $this->validate($request,[
            'comm'=>'required',
            
        ]);
        $post= UserPosts::find($posts_id);

       // return $post;die;
        $comms = new Comment();
        $comms-> comment =$request->input('comm');
        $comms-> name=Auth()->user()->name;
        $comms-> email=Auth()->user()->email;
        // $comms-> post_id=$post;
        // $comms-> associate($post);
        $comms-> UserPosts()->associate($post);
        $comms->approved=true;
        // return $comms;die;

        $comms->save();
        // return 'ok';die;
        // return $comms;die;
        return redirect('UserPages',$post->id)->with('success','comment added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          // return view('UsersPagesFile/show')->with('posts',$posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
