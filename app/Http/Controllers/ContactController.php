<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;
use Session;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
        {
           return 'this is contact';die;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // return 'hi';die;
         $this->validate($request,[
            'name'=>'required',
            'user_message'=>'required',
            'email'=> 'email|required'

        ]);
          // return 'hi';die;
           $post = new contact();
           $post-> name=$request->input('name');
           $post-> user_message=$request->input('user_message');
           $post-> email=$request->input('email');
     
           // return $post;die;
           $post->save();

           Session::flash('success','Thnaks we have recived your message. we will back to you soon.');

           return redirect('/contact');
           // ->with('success','Thnaks we have recived your message. we will back to you soon. ');
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
