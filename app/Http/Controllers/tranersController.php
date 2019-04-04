<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\posts;
use App\user;
use App\contact;
use App\category;
use App\Tag;
use Image;
use Storage;
use App\comment;
class tranersController extends Controller

{    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>'store']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           $traners = traners::orderby('created_at', 'desc')->get();
        $contact = Contact::orderby('created_at', 'desc')->get();

        return view('tranersFile.dashboard')->with('traners',$traners)->with('contact',$contact);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          //  $cats = category::all();
          // $tags = Tag::all();
        return view('tranersFile.create');
        // return view('eventFile.create')->with('cats', $cats)->with('tags',$tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       // $tags=explode(',',$request->tag);
        $tags = explode(',', $request->tag);

      // $requestData ->$request->all();
          $this->validate($request,[
            'title'=>'required',
            'slug'=>'required|nullable',
            'article'=>'required',
            'cover_image'=>'sometimes|image'

        ]);
         // =====================
               //Hundale file upload
        if($request->hasFile('cover_image')){
        // Get file name with extension
          $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
         //Get just file name
         $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
         //Get just extension
         $extension = $request->file('cover_image')->getClientOriginalExtension();
         //File name to store
         $fileNameToStore = $filename. '_'.time(). '.'.$extension;
         //upload file 
         $path = $request->file('cover_image')->storeAs('public/cover_image',$fileNameToStore);
        }
        else{
            $fileNameToStore = 'noimage.jpg';
        }
            // =====================

           $traner = new traners();
           $traner-> title=$request->input('title');
           $traner-> slug=$request->input('slug');
           $traner-> article=$request->input('article');  
           $traner -> cover_image = $fileNameToStore;
           $traner->save();
           $traner->tag($tags);

           return redirect('/user-traner')->with('success','traner created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
           $traner = traners::find($id);
        

        return view('userFile.show')->with('traner',$traner);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $traner = traners::find($id);
        // return $posts;die;
        $categories = category::all();      
      return view('eventFile.edit')->withEvent($traner)->withCats($categories);
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
            'title'=>'required|nullable',
            'slug'=>'required|nullable',
            'article'=>'required',
            'cover_image'=>'image'

        ]);
            //Hundale file upload
        if($request->hasFile('cover_image')){
        // Get file name with extension
          $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
         //Get just file name
         $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
         //Get just extension
         $extension = $request->file('cover_image')->getClientOriginalExtension();
         //File name to store
         $fileNameToStore = $filename. '_'.time(). '.'.$extension;
         //upload file 
         $path = $request->file('cover_image')->storeAs('public/cover_image',$fileNameToStore);
        }
        else{
            $fileNameToStore = 'noimage.jpg';
        }
          // return 'hi';die;
           $traner = traners::find($id);
           $traner-> title=$request->input('title');
           $traner-> slug=$request->input('slug');
           $traner-> article=$request->input('article');
           // return $traner;die;
           if($request->hasFile('cover_image')){
              $traner-> cover_image = $fileNameToStore;
          }
           $traner->save();
           return redirect('/user-traner')->with('success','traner updated');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           $traner = traners::find($id);

        if($traner->cover_image != 'noimage.jpg'){
            //delete image
            Storage::delete('public/cover_image/'.$traner->cover_image);
        }

        $traner->delete();

           return redirect('/user-traner')->with('success','traner deleted');
    }
}
