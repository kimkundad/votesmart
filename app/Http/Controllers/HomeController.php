<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\quiz;
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

        $ran=array(1);
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
