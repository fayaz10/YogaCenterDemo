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
use App\about;
class aboutController extends Controller
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
      
        $abouts = about::orderby('created_at', 'desc')->get(); 
         return view('manageFile.aboutFile.index')->with('abouts',$abouts);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $cats = category::all();
        return view('manageFile.aboutFile.create')->with('cats', $cats);
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
         
             // dd($tags);
          // return 'hi';die;
           $about = new about();
           $about-> title=$request->input('title');
           $about-> slug=$request->input('slug');
           $about-> article=$request->input('article');
  
             $about -> cover_image = $fileNameToStore;
           $about->save();
           // return 'about created';die;
           return redirect('manage/about')->with('success','about created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $about = about::find($id);
        return view('manageFile.aboutFile.show')->with('about',$about);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

           $about = about::find($id);   
           // return $about;die;   
      return view('manageFile.aboutFile.edit')->with('about',$about);
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
           $about = about::find($id);
           $about-> title=$request->input('title');
           $about-> slug=$request->input('slug');
           $about-> article=$request->input('article');
           // return $about;die;
           if($request->hasFile('cover_image')){
              $about-> cover_image = $fileNameToStore;
          }
           $about->save();
           return redirect('/manage/about')->with('success','about updated');
    
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $about = about::find($id);

        if($about->cover_image != 'noimage.jpg'){
            //delete image
            Storage::delete('public/cover_image/'.$about->cover_image);
        }

        $about->delete();

           return redirect('/manage/about')->with('success','post deleted');
    }

    
}
