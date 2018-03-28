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


Route::group(['middleware' => 'auth'], function () {

  Route::post('add_vote', 'HomeController@add_vote');
  Route::get('quiz_choices', 'HomeController@quiz_choices');
  Route::get('result', 'HomeController@result');

  Route::post('save_image', 'HomeController@save_image');
  Route::get('get_avatar', 'HomeController@get_avatar');
  });



Route::group(['middleware' => 'admin'], function() {

  Route::resource('admin/dashboard', 'DashboardController');
  Route::resource('admin/user', 'StudentController');
  Route::resource('admin/category', 'CategoryController');
  Route::resource('admin/quiz', 'QuizController');
  Route::post('api/quiz_status', 'QuizController@quiz_status');
  Route::resource('admin/result', 'ResultController');
  Route::resource('admin/votesmart', 'VoteresultController');

});
