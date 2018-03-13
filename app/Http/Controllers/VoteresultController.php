<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\quiz;
use App\votesmart;
use App\voteresult;
use App\Http\Requests;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\DB;

class VoteresultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $objs = DB::table('users')
        ->select(
        'users.*'
        )
        ->where('vote_status', 1)
        ->orderby('created_at', 'desc')
        ->paginate(15);

    foreach ($objs as $obj) {

      $options = DB::table('votesmarts')->where('user_id',$obj->id)->count();

      $result = DB::table('voteresults')
      ->select(
      'voteresults.*',
      'categories.id',
      'votesmarts.created_at as created_ats',
      'categories.name_cat'
      )
      ->leftjoin('categories', 'categories.id',  'voteresults.result_id')
      ->leftjoin('votesmarts', 'votesmarts.user_id',  'voteresults.user_id')
      ->where('voteresults.user_id',$obj->id)
      ->first();

      $obj->options = $options;
      $obj->result = $result;

                }

          //  dd($result);

      $data['objs'] = $objs;
      $data['datahead'] = "รายการ Vote ล่าสุด";
      return view('admin.votesmart.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $category = DB::table('categories')
            ->get();

      foreach ($category as $obj) {

      $optionsRes = [];

      $options = DB::table('quizzes')
            ->where('quiz_status', 1)
            ->where('quizzes.cat_id', $obj->id)
            ->get();

      $optionsRes = $options;

      $obj->options = $optionsRes;
      }

    //  dd($category);
      $data['objs'] = $category;

      $data['method'] = "post";
      $data['url'] = url('admin/votesmart');
      $data['datahead'] = "สร้าง Vote ";
      return view('admin.votesmart.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    return redirect(url('admin/votesmart'))->with('add_success','เพิ่ม เสร็จเรียบร้อยแล้ว');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

      $objs = DB::table('users')
        ->where('id', $id)
        ->first();


        $category = DB::table('voteresults')
              ->select(
              'voteresults.*',
              'categories.*'
              )
              ->leftjoin('categories', 'categories.id',  'voteresults.result_id')
              ->where('voteresults.user_id', $id)
              ->get();

        foreach ($category as $obj) {

        $optionsRes = [];

        $options = DB::table('votesmarts')
              ->select(
              'votesmarts.*',
              'quizzes.*'
              )
              ->leftjoin('quizzes', 'quizzes.id',  'votesmarts.quiz_id')
              ->where('votesmarts.category_id', $obj->result_id)
              ->get();

        $optionsRes = $options;

        $obj->options = $optionsRes;
        }

        $result = DB::table('voteresults')
          ->where('user_id', $id)
          ->take(3)
          ->get();



          foreach ($result as $obj) {

          $optionsRes = [];

          $options = DB::table('results')
                ->select(
                'results.result_name'
                )
                ->where('results.category_id', $obj->result_id)
                ->where('user_id', $id)
                ->inRandomOrder()
                ->first();

          $optionsRes = $options;

          $obj->options = $optionsRes;
          }



        // dd($result);


      $data['result'] = $result;
      $data['objs'] = $category;
      $data['user'] = $objs;
      $data['datahead'] = "ข้อมูลของ : ".$objs->name;
      return view('admin.votesmart.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
