<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\quiz;
use Auth;
use App\User;
use App\votesmart;
use App\voteresult;
use App\Http\Requests;
use File;
use Illuminate\Support\Facades\DB;
use Storage;

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
                  ->where('votesmarts.user_id', $obj->id)
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

  //url_image


  $user = DB::table('users')->select(
        'users.*',
        'facebook_login.*'
        )
    ->leftjoin('facebook_login', 'facebook_login.user_id',  'users.id')
    ->where('users.id', Auth::user()->id)
    ->first();

  //  dd(Auth::user()->id);



    if($user->provider == 'facebook'){



      $fid=$user->provider_user_id;

      /*Facebook user image width*/
      $width="300";

      /*Facebook user image height*/
      $height="300";

      /*This is the actual url of the Facebook users image*/
      $fb_url  = "http://graph.facebook.com/$fid/picture?width=$width&height=$height&redirect=false";

      $image_file = $fid.'.jpg';

      $img_save_location = $_SERVER['DOCUMENT_ROOT'].'/assets/image/avatar/'.$image_file;
      /*Path to the location to save the image on your server*/


      /*Use file_put_contents to get and save image*/
      file_put_contents($img_save_location, file_get_contents($fb_url));


      $package = User::find(Auth::user()->id);
      $package->vote_status = 1;
      $package->url_image = $image_file;
      $package->save();


    }else{

      $fid=$user->id;

      /*Facebook user image width*/


      /*This is the actual url of the Facebook users image*/
      $fb_url  = url('assets/images/avatar/'.$user->avatar);

      $image_file = $fid.'.jpg';

      $img_save_location = $_SERVER['DOCUMENT_ROOT'].'/assets/image/avatar/'.$image_file;
    //  $img_save_location = $_SERVER['DOCUMENT_ROOT'].'/votesmart/public/assets/image/avatar/'.$image_file;
      /*Path to the location to save the image on your server*/


      /*Use file_put_contents to get and save image*/
      file_put_contents($img_save_location, file_get_contents($fb_url));


      $package = User::find(Auth::user()->id);
      $package->vote_status = 1;
      $package->url_image = $image_file;
      $package->save();

    }






  return redirect(url('/result'));
    }




    public function save_image(Request $request){


      $image = $request['image'];

      $fid=Auth::user()->id;

      $fb_url  = $image;



    //  dd($fb_url);

      $image_file = $fid.'.jpg';

      $user = DB::table('users')->select(
            'users.*'
            )
        ->where('users.id', Auth::user()->id)
        ->first();

      if($user->image_shared != null){

        $destinationPath = '/assets/image/shared/'.$user->image_shared;
        File::delete($destinationPath);

      }


    //  $img_save_location = $_SERVER['DOCUMENT_ROOT'].'/assets/image/avatar/'.$image_file;
      $img_save_location = $_SERVER['DOCUMENT_ROOT'].'/assets/image/shared/'.$image_file;
    //  $img_save_location = $_SERVER['DOCUMENT_ROOT'].'/votesmart/public/assets/image/shared/'.$image_file;
      /*Path to the location to save the image on your server*/


      /*Use file_put_contents to get and save image*/
      file_put_contents($img_save_location, file_get_contents($fb_url));

      //shared

      $package = User::find(Auth::user()->id);
      $package->image_shared = $image_file;
      //$package->save();
      if($package->save()){
        $arr['status'] = 1000;
        return json_encode($arr);
      }else{
        $arr['status'] = 1001;
        return json_encode($arr);
      }



      //return redirect(url('/result'));

    }



    public function shared_quiz($id){

      $objs = DB::table('users')
        ->where('id', $id)
        ->where('vote_status', 1)
        ->first();

        $data['user'] = $objs;

      return view('shared_quiz', $data);
    }


    public function result()
    {

      $objs = DB::table('users')
        ->where('id', Auth::user()->id)
        ->where('vote_status', 1)
        ->first();


      //  $optionsRes = [];

          $labels = DB::table('voteresults')->select(
                'voteresults.*',
                'categories.*'
                )
            ->leftjoin('categories', 'categories.id',  'voteresults.result_id')
            ->where('voteresults.user_id', $objs->id)
            ->get();
            $s =1;

            foreach ($labels as $obj1) {

            $options = DB::table('votesmarts')
                  ->select(
                  'votesmarts.*',
                  'quizzes.*'
                  )
                  ->leftjoin('quizzes', 'quizzes.id',  'votesmarts.quiz_id')
                  ->where('votesmarts.category_id', $obj1->result_id)
                  ->where('votesmarts.user_id', $objs->id)
                  ->get();

            $obj1->options = $options;
            $obj1->num_s = $s;
            $s++;
            }

          //  $optionsRes = $labels;
          //  $obj->labels = $optionsRes;



          $result = DB::table('voteresults')
            ->where('user_id', Auth::user()->id)
            ->take(3)
            ->get();



            foreach ($result as $obj) {

            $optionsRes = [];

            $options = DB::table('results')
                  ->select(
                  'results.result_name'
                  )
                  ->where('results.category_id', $obj->result_id)
                  ->inRandomOrder()
                  ->first();

            $optionsRes = $options;

            $obj->options = $optionsRes;
            }



          // dd($result);


        $data['result'] = $result;


      //  dd($labels);

      $data['user'] = $objs;
      $data['objs'] = $labels;
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

      //  $ran=array(1, 2, 3, 4, 5);
      //  $randomElement = $ran[array_rand($ran, 1)];
      //  $obj->options = $randomElement;
        $obj->length = strlen($obj->name_quiz);
        if($obj->length >= 170){
          $obj->options = 4;
        }else if($obj->length >= 150){
          $obj->options = 3;
        }else if($obj->length >= 120){
          $obj->options = 2;
        }else{
          $obj->options = 1;
        }

      }
    //  dd($randomElement);
    //  dd($cat);
              $data['objs'] = $cat;
              $data['datahead'] = "จัดการ Quiz";


      //return view('result', $data);
    //  dd($data);
      //  return view('result');
        return view('quiz_choices', $data);
    }
}
