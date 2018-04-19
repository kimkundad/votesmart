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

Route::auth();

Auth::routes();

Route::get('/redirect', 'FacebookAuthController@redirect');
Route::get('/callback', 'FacebookAuthController@callback');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/', 'HomeController@index');


Route::get('shared_quiz/{id}', 'HomeController@shared_quiz');
Route::get('representatives_all', 'HomeController@representatives_all');
Route::post('reps_list', 'HomeController@reps_list');
Route::get('search/data', 'HomeController@search_data');
Route::get('reps_result/{id}', 'HomeController@reps_result');
Route::post('demos/loaddata','HomeController@loadDataAjax' );
Route::post('contact','HomeController@contact' );
Route::post('contact_to_reps','HomeController@contact_to_reps' );



Route::group(['middleware' => 'auth'], function () {

  Route::post('add_vote', 'HomeController@add_vote');
  Route::get('quiz_choices', 'HomeController@quiz_choices');
  Route::get('result', 'HomeController@result');



  Route::post('save_image', 'HomeController@save_image');
  Route::get('get_avatar', 'HomeController@get_avatar');
  Route::get('representatives/dashboard', 'RepresentDashController@index');
  Route::resource('representatives/profile', 'RepresentProController');
  Route::post('image-crop', 'RepresentProController@imageCropPost');
  Route::post('add_about', 'RepresentProController@add_about');
  Route::post('del_about', 'RepresentProController@del_about');
  Route::resource('representatives/exper', 'ExperController');
  Route::resource('representatives/education', 'EducationController');
  Route::resource('representatives/timeline', 'TimelineController');
  Route::resource('representatives/gallery', 'GalleryController');
  Route::post('representatives/gallery', 'GalleryController@add_gallery');
  Route::post('representatives/property_image_del', 'GalleryController@property_image_del');


  Route::post('amphoe', 'RepresentProController@amphoe');

  Route::post('district', 'RepresentProController@district');
  Route::resource('representatives/votesmart', 'ResvoteController');
  Route::resource('representatives/contact', 'ContacttorepsController');
  Route::post('representatives/post_read', 'ContacttorepsController@representatives_post_read');

  });



Route::group(['middleware' => 'admin'], function() {

  Route::resource('admin/dashboard', 'DashboardController');
  Route::resource('admin/user', 'StudentController');
  Route::resource('admin/representatives', 'representatives');
  Route::get('admin/representatives_new', 'representatives@index_new');
  Route::resource('admin/category', 'CategoryController');
  Route::resource('admin/quiz', 'QuizController');
  Route::post('api/quiz_status', 'QuizController@quiz_status');
  Route::resource('admin/result', 'ResultController');
  Route::resource('admin/votesmart', 'VoteresultController');
  Route::post('api/post_status', 'representatives@api_post_status');
  Route::post('api/post_read', 'ContactController@post_read');

  Route::resource('admin/contact', 'ContactController');





});
