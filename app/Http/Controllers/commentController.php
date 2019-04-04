<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comment;
use App\posts;
use Auth;
use Session;
use App\associate;
class commentController extends Controller
{
         public function __construct()
    {
        // $this->middleware('auth',['except'=>['index']]);
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request, $post_id)
    {
        $this->validate($request,[
            'comment'=>'required|max:340'
           
        ]);

      $post = posts::find($post_id);
       // dd($post);die;
      $comment = new comment();
      // $comment-> name = $request->name;
      $comment-> comment = $request->comment;
      $comment-> approved = true;
      $comment-> posts_id = $request->post_id;
      $comment-> post_id = $request->post_id;

      // $comment-> user_id = Auth()->user()->id;
      $comment-> name = Auth()->user()->name;
      $comment-> email = Auth()->user()->email;

      // $comment->posts()->associate($post);
      // dd($comment);

      $comment->save();

      Session::flash('success','Commented added');

      return redirect()->route('blog.single',[$post->slug]);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $com = comment::find($id);
        return view('comment.edit')->with('com',$com);
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

          $this->validate($request,[
            'comment'=>'required|max:340'
           
        ]);

      $comment = comment::find($id);
      $comment-> comment = $request->comment;
      $comment-> posts_id = $request->post_id;
      $comment-> post_id = $request->post_id;
      $comment->save();
      Session::flash('success','Commente updated');
      return redirect()->route('user-post.show',$comment->posts->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = comment::find($id);
        $post_id = $comment->posts->id;
        $posts_id = $comment->posts->id;
        $comment->delete();
       Session::flash('success','Comment delered');
      return redirect()->route('user-post.show',$comment->posts->id);

    }
}
