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
use App\services;
class serviceController extends Controller
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
           $services = services::orderby('created_at', 'desc')->get();
        $contact = Contact::orderby('created_at', 'desc')->get();

        return view('manageFile.servicesFile.index')->with('services',$services)->with('contact',$contact);
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

           $serivec = new serivecs();
           $serivec-> title=$request->input('title');
           $serivec-> slug=$request->input('slug');
           $serivec-> article=$request->input('article');  
           $serivec -> cover_image = $fileNameToStore;
           $serivec->save();
           $serivec->tag($tags);

           return redirect('/user-serivec')->with('success','serivec created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
           $serivec = serivecs::find($id);
        

        return view('serivecFile.show')->with('serivec',$serivec);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $serivec = serivecs::find($id);
        // return $posts;die;
        $categories = category::all();      
      return view('servicesFile.edit')->withEvent($serivec)->withCats($categories);
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
           $serivec = services::find($id);
           $serivec-> title=$request->input('title');
           $serivec-> slug=$request->input('slug');
           $serivec-> article=$request->input('article');
           // return $event;die;
           if($request->hasFile('cover_image')){
              $serivec-> cover_image = $fileNameToStore;
          }
           $serivec->save();
           return redirect('/user-serivec')->with('success','serivec updated');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           $serivec = serivecs::find($id);

        if($serivec->cover_image != 'noimage.jpg'){
            //delete image
            Storage::delete('public/cover_image/'.$serivec->cover_image);
        }

        $serivec->delete();

           return redirect('/user-serivec')->with('success','serivec deleted');
    }
}
