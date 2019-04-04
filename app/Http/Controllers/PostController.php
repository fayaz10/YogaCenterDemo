<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\posts;
use App\user;
use App\contactPage;
use App\category;
use App\Tag;
use Image;
use Storage;
use App\comment;
class PostController extends Controller
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
     public function aboutIndex()
     {
        $abouts = posts::orderby('created_at', 'desc')->where('category_id', '=', 9)->get();
        return view('userFile.aboutIndex')->with('abouts',$abouts);
     }

    public function ourClassIndex()
     {
        $ourClassesno = posts::orderby('created_at', 'desc')->where('category_id', '=', '6')->get();
        return view('userFile.ourClassIndex')->with('ourClassesno',$ourClassesno);
     }

       public function eventsIndex()
     {
        $events = posts::orderby('created_at', 'desc')->where('category_id', '=', 7)->get(); 
        return view('userFile.eventsIndex')->with('events',$events);
     }

       public function trainersIndex()
     {
        $trainers = posts::orderby('created_at', 'desc')->where('category_id', '=', 8)->get();
        return view('userFile.trainersIndex')->with('trainers',$trainers);
     }
// trainers
// services
      public function servicesIndex()
     {
        $services = posts::orderby('created_at', 'desc')->where('category_id', '=', 10)->get();
        return view('userFile.servicesIndex')->with('services',$services);
     }

    public function index()
    {
       // $posts servicesIndex = posts::orderby('created_at', 'desc')->paginate(4)->get();
       $posts = posts::orderby('created_at', 'desc')->get()->all();
       // $posts = posts::orderby('created_at', 'desc')->paginate(4);
        return view('userFile.dashboard')->with('posts',$posts);
    }

    /**contact
     * Show the form for creating a new resource.
     *aboutIndex.blade
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $cats = category::all();
          $tags = Tag::all();
        return view('userFile.create')->with('cats', $cats)->with('tags',$tags);
        
    }

  

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $tags = explode(',', $request->tag);
         $this->validate($request,[
            'title'=>'required',
            'slug'=>'required|nullable',
            'category_id'=>'required|nullable',
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
           $post = new posts();
           $post-> title=$request->input('title');
           $post-> slug=$request->input('slug');
           $post-> category_id=$request->input('category_id');
           $post-> article=$request->input('article');
           $post-> user_id =Auth()->user()->id;
           $post-> user_name =Auth()->user()->name;
  
             $post -> cover_image = $fileNameToStore;
           $post->save();
           $post->tag($tags);
           return redirect('/manage/post')->with('success','post created');

           
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = posts::find($id);
        

        return view('userFile.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = posts::find($id);
        $categories = category::all();     
      return view('userFile.edit')->withPosts($posts)->withCats($categories);
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
            'category_id'=>'required|nullable',
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
           $post = posts::find($id);
           $post-> title=$request->input('title');
           $post-> slug=$request->input('slug');
           $post-> category_id=$request->input('category_id');
           $post-> article=$request->input('article');
           // return $post;die;
           if($request->hasFile('cover_image')){
              $post-> cover_image = $fileNameToStore;
          }
           $post->save();
           return redirect('/manage/post')->with('success','post updated');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = posts::find($id);

        if($posts->cover_image != 'noimage.jpg'){
            //delete image
            Storage::delete('public/cover_image/'.$posts->cover_image);
        }

        $posts->delete();

           return redirect('/manage/post')->with('success','post deleted');

    }
}
