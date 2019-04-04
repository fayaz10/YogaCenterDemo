<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// ============Mange Route=============================================
Route::prefix('manage')->middleware('role:superadministrator|administrator')->group(function(){
    Route::get('/','ManageController@index');
	Route::get('/dashboard','ManageController@dashboard')->name('manage.dashboard');


     Route::resource('post','PostController');
     Route::resource('about','aboutController');
     Route::resource('category','categoryController');
     Route::get('aboutIndex','PostController@aboutIndex')->name('manage/aboutIndex ');
     Route::get('ourClassIndex','PostController@ourClassIndex')->name('manage/ourClassIndex ');
     Route::get('eventsIndex','PostController@eventsIndex')->name('manage/eventsIndex ');
     Route::get('trainersIndex','PostController@trainersIndex')->name('manage/trainersIndex ');
     Route::get('servicesIndex','PostController@servicesIndex')->name('manage/servicesIndex ');

    // ==================================================================
});




// ============End Of Mange Route=======================================about/{about}/edit
    // Route::resource('user-post','PostController');

Route::group(['middleware'=>['web']], function(){
	// ==========================================================
Route::get('/','UIcontroller@index2');
Route::get('/index2','UIcontroller@index2');
Route::post('/APindex2','UIcontroller@postindex2');
Route::get('/about2','UIcontroller@about2');
Route::get('/services2','UIcontroller@services');
Route::get('/events2','UIcontroller@events2');
Route::get('/login2','UIcontroller@login2');
Route::get('/register2','UIcontroller@register2');
Route::get('/single2','UIcontroller@single2');
Route::get('/contact2','UIcontroller@contact2');
	


//=============blog Route============
Route::get('blog/{slug}',['as'=>'blog.single', 'uses'=>'blogController@single'])->where('single','[\w\d\i\-\_\]+');
Route::get('blog',['uses'=>'blogController@index', 'as'=>'blog.index']);
//  comment controller 
Route::POST('comments/{post_id}','commentController@store')->name('comments');
Route::GET('comments/{id}/edit','commentController@edit')->name('comments.edit');
Route::PUT('comments/{id}','commentController@update')->name('comments.update');
Route::DELETE('comments/{id}','commentController@destroy')->name('comments.destroy');
Route::post('/EContact','UIcontroller@postEContact');
Route::get('/EContact','UIcontroller@getEContact');

});



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// =============================================================
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
  // Route::post('comments/{post_id}',['uses'=>'commentController@store','as'=>'comments.store']);
	// ==========================================================
// Route::get('/', 'UIcontroller@index');
// Route::get('/me','UIcontroller@me');
// // Route::get('/contact','UIcontroller@contact');

// Route::get('/about','UIcontroller@about');
// Route::get('/blog','UIcontroller@blog');
// Route::get('/service','UIcontroller@service');
// Route::get('/show','UIcontroller@show');



// Route::resource('contact','ContactController');
// Route::resource('tag','tagController');
// Route::resource('about','aboutController');
// Route::resource('event','eventController');
// Route::resource('ourClass','ourClassController');
// Route::resource('trainers','tranersController');
// Route::resource('services','serviceController');
// ===========================================================
// Route::get('/', 'UIcontroller@index');
// Route::get('/me','UIcontroller@me');
// // Route::get('/contact','UIcontroller@contact');
// Route::get('/about','UIcontroller@about');
// Route::get('/service','UIcontroller@service');
// Route::get('/show','UIcontroller@show');
// =============================================================
// Route::resource('contact','ContactController');