<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\quiz;
use Auth;
use App\User;
use App\votesmart;
use App\voteresult;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $objs = DB::table('users')
        ->where('vote_status', 1)
        ->get();

        $s =1;
        $optionsRes = [];
        foreach ($objs as $obj) {

          $labels = DB::table('voteresults')->select(
                'voteresults.*',
                'categories.*'
                )
            ->leftjoin('categories', 'categories.id',  'voteresults.result_id')
            ->where('voteresults.user_id', $obj->id)
            ->get();


            foreach ($labels as $obj1) {

            $options = DB::table('votesmarts')
                  ->select(
                  'votesmarts.*',
                  'quizzes.*'
                  )
                  ->leftjoin('quizzes', 'quizzes.id',  'votesmarts.quiz_id')
                  ->where('votesmarts.category_id', $obj1->result_id)
                  ->get();

            $obj1->options = $options;
            $obj1->num_s = $s;
            $s++;
            }



            $optionsRes = $labels;
            $obj->labels = $optionsRes;


        }





      //  dd($objs);


      $data['objs'] = $objs;

        return view('home', $data);
    }


    public function add_vote(Request $request){
      $this->validate($request, [
       'quiz' => 'required'
      ]);


      $gallary = $request['quiz'];

      $count_check = DB::table('votesmarts')
          ->where('votesmarts.user_id', Auth::user()->id)
          ->count();

      if($count_check > 0){

        $obj = DB::table('voteresults')
            ->where('voteresults.user_id', Auth::user()->id)
            ->delete();

        $obj = DB::table('votesmarts')
            ->where('votesmarts.user_id', Auth::user()->id)
            ->delete();

      }



      for ($i = 0; $i < sizeof($gallary); $i++) {

        $id = $gallary[$i];
        $category_id = quiz::find($id);
        $test_array[] = $category_id->cat_id;
        $test_sum[] = $id;
      }

      //dd($test_array, $test_sum);



      date_default_timezone_set("Asia/Bangkok");
      $data_toview = date("Y-m-d H:i:s");




      if (sizeof($gallary) > 1) {

     for ($i = 0; $i < sizeof($gallary); $i++) {

       $id = $gallary[$i];
       $category_id = quiz::find($id);


    //   $gallary[$i]

       $admins[] = [
           'user_id' => Auth::user()->id,
           'quiz_id' => $gallary[$i],
           'category_id' => $category_id->cat_id,
           'created_at' => $data_toview,
       ];


     }
     votesmart::insert($admins);
   }


  // rsort($test_array);

  $test = array_count_values($test_array);
  arsort($test);

  foreach($test as $x=>$x_value){

    $users = DB::table('votesmarts')
    ->where('category_id', $x)
    ->count();

  //  echo "Key=" . $x . ", Value=" . $x_value;

    $admin[] = [
        'user_id' => Auth::user()->id,
        'result_id' => $x,
        'sort_result' => $users,
    ];


  }
  voteresult::insert($admin);

  $package = User::find(Auth::user()->id);
  $package->vote_status = 1;
  $package->save();

  return redirect(url('/'));
    }


    public function result()
    {

      $cat = DB::table('quizzes')->select(
            'quizzes.*',
            'quizzes.id as id_q',
            'quizzes.created_at as create',
            'users.*',
            'categories.*'
            )
            ->leftjoin('categories', 'categories.id',  'quizzes.cat_id')
            ->leftjoin('users', 'users.id',  'quizzes.user_id')
            ->get();


              $data['objs'] = $cat;
              $data['datahead'] = "จัดการ Quiz";


      return view('result', $data);
      //dd($data);
      //  return view('result');
    }

    public function quiz_choices(){

      $cat = DB::table('quizzes')->select(
            'quizzes.*',
            'quizzes.id as id_q',
            'quizzes.created_at as create',
            'users.*',
            'categories.*'
            )
            ->leftjoin('categories', 'categories.id',  'quizzes.cat_id')
            ->leftjoin('users', 'users.id',  'quizzes.user_id')
            ->get();

      foreach ($cat as $obj) {

        $ran=array(1, 2, 3, 4, 5);
        $randomElement = $ran[array_rand($ran, 1)];
        $obj->options = $randomElement;

      }
    //  dd($randomElement);

              $data['objs'] = $cat;
              $data['datahead'] = "จัดการ Quiz";


      //return view('result', $data);
    //  dd($data);
      //  return view('result');
        return view('quiz_choices', $data);
    }
}
