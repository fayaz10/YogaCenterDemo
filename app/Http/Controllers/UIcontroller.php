<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Request;
use App\posts;
use App\about;
use Mail;
use Session;
use App\User;
use App\comment;
use Auth;
use App\category;
class UIcontroller extends Controller
{
    
		public function index() {
           $users = User::get();
	      $comments = comment::get();
	     $services = posts::orderby('created_at', 'desc')->where('category_id', '=', 8)->get(); 
	     $events = posts::orderby('created_at', 'desc')->where('category_id', '=', 7)->get(); 
	    $posts_1 = posts::orderby('created_at', 'desc')->take(1)->get();
	    $ourClassesno = posts::where('category_id', '=', '6')->get();
	    $posts = posts::orderby('created_at', 'desc')->get();
	 
        return view('welcome')->with('posts',$posts)
        ->with('comments',$comments)
        ->with('ourClassesno',$ourClassesno)
        ->with('events',$events)
        ->with('users',$users)
        ->with('services',$services)
        ->with('posts_1',$posts_1);

		}
// ==========================================================
            public function index2()
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
      	    public function about2()
	    {
	      $users = User::get();
	      $comments = comment::get();
	     $abouts = posts::orderby('created_at', 'desc')->where('category_id', '=', 9)->get()->take(1); 
	     $trainers = posts::orderby('created_at', 'desc')->where('category_id', '=', 10)->get(); 
	     $ourClasses = posts::orderby('created_at','desc')->where('category_id', '=', 6)->get();
	     $ourClassesno = posts::where('category_id', '=', '6')->get();

        return view('yoga.about')->with('abouts',$abouts)
        ->with('ourClasses',$ourClasses)
        ->with('ourClassesno',$ourClassesno)
        ->with('trainers',$trainers)
        ->with('comments',$comments)
        ->with('users',$users);
         // return view('yoga.about')->with('abouts',$abouts);
	    }

	     public function contact2()
	    {
	    	
	    	return view('yoga.contact');
	    }

	     public function events2()
	    {
	    	 $events = posts::orderby('created_at', 'desc')->where('category_id', '=', 7)->get(); 
	    	return view('yoga.events')->with('events',$events);
	    }

	    public function services()
	    {
	    	$services1 = posts::orderby('created_at', 'desc')->where('category_id', '=', 8)->get()->take(1); 
	    	$services = posts::orderby('created_at', 'desc')->where('category_id', '=', 8)->get();
            $ourClasses = posts::where('category_id', '=', '6')->get();
	    	return view('yoga.services')->with('ourClasses',$ourClasses)
	    	 ->with('services1',$services1)
	    	 ->with('services',$services);
	    }
        public function login2()
	    {
	    	return view('yoga.login');
	    }

        public function register2()
	    {
	    	return view('yoga.register');
	    }

        public function single2()
	    {
	    	return view('yoga.single');
	    }






// ======================================================
	    public function me()
	    {
	    	// return 'this is me';die;contact
	    	return view('me');
	    }

		public function about() {

       $posts = posts::orderby('created_at','desc')->where('category_id', '=', 7)->paginate(4);
       $ourClasses = posts::orderby('created_at','desc')->where('category_id', '=', 7)->paginate(4);

        return view('about')->with('posts',$posts)->with('ourClasses',$ourClasses);

		   
		}
		public function contact() {

		    return view('contact');
		}
		public function blog() {

		    return view('blog');
		}

		public function service() {

		   $posts = posts::orderby('created_at','desc')->where('category_id', '=', 8)->paginate(4);

            return view('about')->with('posts',$posts);
		}

		public function show() {

		    return view('show');
		}


		public function getEContact() {

		    return view('EContact');
		}

       public function postindex2(Request $request){

       	    $this->validate($request,[

             'email'=>'email|required|max:255',
             'subject'=>'required|max:355',
             'time'=>'required',
             'name'=>'required|max:55',
             'phone'=> 'required|max:14'

		    ]);
		    $data = array(
		    	'email' => $request->email,
		    	'time' => $request->time,
		    	'subject' => $request->subject,
		    	'name' =>$request->name,
		    	'phone' =>$request->phone
		    	 );
		    Mail::send('emails.appoinment', $data, function ($message) use ($data) {
		        $message->from($data['email']);
		        // $message->sender('john@johndoe.com', 'John Doe');
		    
		        $message->to('fayaz.nasraty@gmail.com', 'fayaz nasrati');
		    
		        // $message->cc('john@johndoe.com', 'John Doe');
		        // $message->bcc('john@johndoe.com', 'John Doe');
		    
		        // $message->replyTo('john@johndoe.com', 'John Doe');
		    
		        $message->subject($data['subject']);
		    
		        // $message->priority(3); 
		    
		        // $message->attach('pathToFile');
		    });
		    Session::flash('success','your appointment has been seted up. we will get back to you ASAP.');
		    return redirect()->back();

       }
		public function postEContact(Request $request) {

		    $this->validate($request,[

             'email'=>'email|required|max:255',
             'subject'=>'required|max:255',
             'user_message'=>'required|min:10|max:355',
             'name'=>'required|max:55',
             'phone'=> 'required|max:14'

		    ]);
		    $data = array(
		    	'email' => $request->email,
		    	'subject' => $request->subject,
		    	'user_message' => $request->user_message,
		    	'name' =>$request->name,
		    	'phone' =>$request->phone
		    	 );
		    Mail::send('emails.contact', $data, function ($message) use ($data) {
		        $message->from($data['email']);
		        // $message->sender('john@johndoe.com', 'John Doe');
		    
		        $message->to('fayaz.nasraty@gmail.com', 'fayaz nasrati');
		    
		        // $message->cc('john@johndoe.com', 'John Doe');
		        // $message->bcc('john@johndoe.com', 'John Doe');
		    
		        // $message->replyTo('john@johndoe.com', 'John Doe');
		    
		        $message->subject($data['subject']);
		    
		        // $message->priority(3); 
		    
		        // $message->attach('pathToFile');
		    });
		    Session::flash('success','We have recived ur email.');
		    return redirect()->back();
		}

}
