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
use App\event;
class eventController extends Controller
{
         /**
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
           $events = event::orderby('created_at', 'desc')->get();
        $contact = Contact::orderby('created_at', 'desc')->get();

        return view('eventFile.dashboard')->with('events',$events)->with('contact',$contact);
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
        return view('eventFile.create');
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
        // $tags = explode(',', $request->tag);

      // $requestData ->$request->all();
          $this->validate($request,[
            'title'=>'required',
            'slug'=>'required|nullable',
            'articale'=>'required',
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

           $event = new event();
           $event-> title=$request->input('title');
           $event-> slug=$request->input('slug');
           $event-> articale=$request->input('articale');  
           $event -> cover_image = $fileNameToStore;
           $event->save();
           // $event->tag($tags);

           return redirect('/event')->with('success','event created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
           $event = event::find($id);
           return view('eventFile.show')->with('event',$event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = event::find($id);
        // return $posts;die;
        // $categories = category::all();      
      return view('eventFile.edit')->with('event',$event);
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
            'articale'=>'required',
            'cover_image'=>'image'

        ]);
        // dd($request);die;
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
           $event = event::find($id);
           $event-> title=$request->title;
           $event-> slug=$request->slug;
           $event-> articale=$request->articale;
           // return $event;die;
           if($request->hasFile('cover_image')){
              $event-> cover_image = $fileNameToStore;
          }
           $event->save();
           return redirect('/event')->with('success','event updated');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           $event = event::find($id);

        // if($event->cover_image != 'noimage.jpg'){
            //delete image
            Storage::delete('public/cover_image/'.$event->cover_image);
        // }

        $event->delete();

           return redirect('/event')->with('success','event deleted');
    }
}
