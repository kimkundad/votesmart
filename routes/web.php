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

Route::get('/', function () {

  if(Auth::check()){
  return Redirect::to('home');
  }else{
    return view('auth.login');
  }

});

Auth::routes();

Route::get('/redirect', 'FacebookAuthController@redirect');
Route::get('/callback', 'FacebookAuthController@callback');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => 'admin'], function() {

  Route::resource('admin/dashboard', 'DashboardController');
  Route::resource('admin/user', 'StudentController');
  Route::resource('admin/category', 'CategoryController');
  Route::resource('admin/quiz', 'QuizController');
  Route::post('api/quiz_status', 'QuizController@quiz_status');
  Route::resource('admin/result', 'ResultController');
  Route::resource('admin/votesmart', 'VoteresultController');

});
