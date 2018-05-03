<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\quiz;
use Auth;
use App\User;
use App\votesmart;
use App\voteresult;
use App\contact;
use App\contacttoreps;
use App\Http\Requests;
use Response;
use File;
use Helper;
use App\gallery;
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

      $cat = DB::table('categories')->select(
            'categories.*'
            )
            ->get();

    $data['cat'] = $cat;
      $data['objs'] = $objs;

        return view('home', $data);
    }



    public function search_data2(Request $request){

      $this->validate($request, [
       'field3' => 'required'
      ]);

      $field2= $request['field3'];

    //  $admin = [];


      $get_user_count = DB::table('users')
          ->select(
          'users.name'
          )
          ->where('users.user_lock', 1)
          ->where('users.is_admin', 0)
          ->where('users.name', 'LIKE', '%'.$field2.'%')
          ->count();

        if($get_user_count > 0){

          $get_user = DB::table('users')
              ->select(
              'users.name'
              )
              ->where('users.user_lock', 1)
              ->where('users.is_admin', 0)
              ->where('users.name', 'LIKE', '%'.$field2.'%')
              ->get();

              foreach($get_user as $x){
                $admin[] =
                    $x->name
                ;
              }

        } else{



          $get_count_provinces = DB::table('provinces')
              ->select(
              'provinces.name_in_thai'
              )
              ->Where('provinces.name_in_thai', 'LIKE', '%'.$field2.'%')
              ->count();

              if($get_count_provinces > 0){

                $get_provinces = DB::table('provinces')
                    ->select(
                    'provinces.name_in_thai'
                    )
                    ->Where('provinces.name_in_thai', 'LIKE', '%'.$field2.'%')
                    ->get();
                  //  dd($get_provinces);
                    foreach($get_provinces as $x){
                      $admin[] =
                          $x->name_in_thai
                      ;
                    }

              }else{



                $get_count_districts = DB::table('districts')
                    ->select(
                    'districts.name_in_thai'
                    )
                    ->Where('districts.name_in_thai', 'LIKE', '%'.$field2.'%')
                    ->count();


                    if($get_count_districts > 0){

                      $get_districts = DB::table('districts')
                          ->select(
                          'districts.name_in_thai'
                          )
                          ->Where('districts.name_in_thai', 'LIKE', '%'.$field2.'%')
                          ->get();
                        //  dd($get_provinces);
                          foreach($get_districts as $x){
                            $admin[] =
                                $x->name_in_thai
                            ;
                          }

                    }else{


                      $get_count_subdistricts = DB::table('subdistricts')
                          ->select(
                          'subdistricts.name_in_thai'
                          )
                          ->Where('subdistricts.name_in_thai', 'LIKE', '%'.$field2.'%')
                          ->count();


                          if($get_count_subdistricts > 0){

                            $get_subdistricts = DB::table('subdistricts')
                                ->select(
                                'subdistricts.name_in_thai'
                                )
                                ->Where('subdistricts.name_in_thai', 'LIKE', '%'.$field2.'%')
                                ->get();
                              //  dd($get_provinces);
                                foreach($get_subdistricts as $x){
                                  $admin[] =
                                      $x->name_in_thai
                                  ;
                                }

                          }else{

                            $admin = null;

                          }



                    }

                //$admin = null;

              }






        }


    /*  $get_count = DB::table('users')
        ->select(
        'users.name',
        'districts.name_in_thai as name_in_thai_d',
        'subdistricts.name_in_thai as name_in_thai_s',
        'provinces.name_in_thai as name_in_thai_p'
        )
        ->leftjoin('districts', 'districts.id', '=', 'users.amphur_id')
        ->leftjoin('subdistricts', 'subdistricts.id', '=', 'users.district_id')
        ->leftjoin('provinces', 'provinces.id', '=', 'users.province_id')
        ->where('users.user_lock', 1)
        ->where('users.is_admin', 0)
        ->orwhere('users.name', 'LIKE', '%'.$field2.'%')
        ->orWhere('districts.name_in_thai', 'LIKE', '%'.$field2.'%')
        ->orWhere('subdistricts.name_in_thai', 'LIKE', '%'.$field2.'%')
        ->orWhere('provinces.name_in_thai', 'LIKE', '%'.$field2.'%')
        ->count();


        if($get_count > 0){

          $objs = DB::table('users')
          ->select(
          'users.name',
          'districts.name_in_thai as name_in_thai_d',
          'subdistricts.name_in_thai as name_in_thai_s',
          'provinces.name_in_thai as name_in_thai_p'
          )
          ->leftjoin('districts', 'districts.id', '=', 'users.amphur_id')
          ->leftjoin('subdistricts', 'subdistricts.id', '=', 'users.district_id')
          ->leftjoin('provinces', 'provinces.id', '=', 'users.province_id')
          ->where('users.user_lock', 1)
          ->where('users.is_admin', 0)
          ->orwhere('users.name', 'LIKE', '%'.$field2.'%')
          ->orWhere('districts.name_in_thai', 'LIKE', '%'.$field2.'%')
          ->orWhere('subdistricts.name_in_thai', 'LIKE', '%'.$field2.'%')
          ->orWhere('provinces.name_in_thai', 'LIKE', '%'.$field2.'%')
            ->get();

          //  $admin = ['ActionScript', 'AppleScript', 'Asp', 'Assembly', 'BASIC', 'Batch', 'C', 'C++', 'CSS', 'Clojure', 'COBOL', 'ColdFusion', 'Erlang', 'Fortran', 'Groovy', 'Haskell', 'HTML', 'Java', 'JavaScript', 'Lisp', 'Perl', 'PHP', 'PowerShell', 'Python', 'Ruby', 'Scala', 'Scheme', 'SQL', 'TeX', 'XML'];


            foreach($objs as $x){



            //  echo "Key=" . $x . ", Value=" . $x_value;

              $admin = [
                  $x->name,
              ];
            }

        }else{
          $admin = null;
        }

        */





        return Response::json(['data' => $admin]);

    }


    public function search_data(Request $request){

      $this->validate($request, [
       'field2' => 'required'
      ]);

      $field2= $request['field2'];

    //  $admin = [];


      $get_user_count = DB::table('users')
          ->select(
          'users.name'
          )
          ->where('users.user_lock', 1)
          ->where('users.is_admin', 0)
          ->where('users.name', 'LIKE', '%'.$field2.'%')
          ->count();

        if($get_user_count > 0){

          $get_user = DB::table('users')
              ->select(
              'users.name'
              )
              ->where('users.user_lock', 1)
              ->where('users.is_admin', 0)
              ->where('users.name', 'LIKE', '%'.$field2.'%')
              ->get();

              foreach($get_user as $x){
                $admin[] =
                    $x->name
                ;
              }

        } else{



          $get_count_provinces = DB::table('provinces')
              ->select(
              'provinces.name_in_thai'
              )
              ->Where('provinces.name_in_thai', 'LIKE', '%'.$field2.'%')
              ->count();

              if($get_count_provinces > 0){

                $get_provinces = DB::table('provinces')
                    ->select(
                    'provinces.name_in_thai'
                    )
                    ->Where('provinces.name_in_thai', 'LIKE', '%'.$field2.'%')
                    ->get();
                  //  dd($get_provinces);
                    foreach($get_provinces as $x){
                      $admin[] =
                          $x->name_in_thai
                      ;
                    }

              }else{



                $get_count_districts = DB::table('districts')
                    ->select(
                    'districts.name_in_thai'
                    )
                    ->Where('districts.name_in_thai', 'LIKE', '%'.$field2.'%')
                    ->count();


                    if($get_count_districts > 0){

                      $get_districts = DB::table('districts')
                          ->select(
                          'districts.name_in_thai'
                          )
                          ->Where('districts.name_in_thai', 'LIKE', '%'.$field2.'%')
                          ->get();
                        //  dd($get_provinces);
                          foreach($get_districts as $x){
                            $admin[] =
                                $x->name_in_thai
                            ;
                          }

                    }else{


                      $get_count_subdistricts = DB::table('subdistricts')
                          ->select(
                          'subdistricts.name_in_thai'
                          )
                          ->Where('subdistricts.name_in_thai', 'LIKE', '%'.$field2.'%')
                          ->count();


                          if($get_count_subdistricts > 0){

                            $get_subdistricts = DB::table('subdistricts')
                                ->select(
                                'subdistricts.name_in_thai'
                                )
                                ->Where('subdistricts.name_in_thai', 'LIKE', '%'.$field2.'%')
                                ->get();
                              //  dd($get_provinces);
                                foreach($get_subdistricts as $x){
                                  $admin[] =
                                      $x->name_in_thai
                                  ;
                                }

                          }else{

                            $admin = null;

                          }



                    }

                //$admin = null;

              }






        }


    /*  $get_count = DB::table('users')
        ->select(
        'users.name',
        'districts.name_in_thai as name_in_thai_d',
        'subdistricts.name_in_thai as name_in_thai_s',
        'provinces.name_in_thai as name_in_thai_p'
        )
        ->leftjoin('districts', 'districts.id', '=', 'users.amphur_id')
        ->leftjoin('subdistricts', 'subdistricts.id', '=', 'users.district_id')
        ->leftjoin('provinces', 'provinces.id', '=', 'users.province_id')
        ->where('users.user_lock', 1)
        ->where('users.is_admin', 0)
        ->orwhere('users.name', 'LIKE', '%'.$field2.'%')
        ->orWhere('districts.name_in_thai', 'LIKE', '%'.$field2.'%')
        ->orWhere('subdistricts.name_in_thai', 'LIKE', '%'.$field2.'%')
        ->orWhere('provinces.name_in_thai', 'LIKE', '%'.$field2.'%')
        ->count();


        if($get_count > 0){

          $objs = DB::table('users')
          ->select(
          'users.name',
          'districts.name_in_thai as name_in_thai_d',
          'subdistricts.name_in_thai as name_in_thai_s',
          'provinces.name_in_thai as name_in_thai_p'
          )
          ->leftjoin('districts', 'districts.id', '=', 'users.amphur_id')
          ->leftjoin('subdistricts', 'subdistricts.id', '=', 'users.district_id')
          ->leftjoin('provinces', 'provinces.id', '=', 'users.province_id')
          ->where('users.user_lock', 1)
          ->where('users.is_admin', 0)
          ->orwhere('users.name', 'LIKE', '%'.$field2.'%')
          ->orWhere('districts.name_in_thai', 'LIKE', '%'.$field2.'%')
          ->orWhere('subdistricts.name_in_thai', 'LIKE', '%'.$field2.'%')
          ->orWhere('provinces.name_in_thai', 'LIKE', '%'.$field2.'%')
            ->get();

          //  $admin = ['ActionScript', 'AppleScript', 'Asp', 'Assembly', 'BASIC', 'Batch', 'C', 'C++', 'CSS', 'Clojure', 'COBOL', 'ColdFusion', 'Erlang', 'Fortran', 'Groovy', 'Haskell', 'HTML', 'Java', 'JavaScript', 'Lisp', 'Perl', 'PHP', 'PowerShell', 'Python', 'Ruby', 'Scala', 'Scheme', 'SQL', 'TeX', 'XML'];


            foreach($objs as $x){



            //  echo "Key=" . $x . ", Value=" . $x_value;

              $admin = [
                  $x->name,
              ];
            }

        }else{
          $admin = null;
        }

        */





        return Response::json(['data' => $admin]);

    }


    public function reps_list2(Request $request){


      $field2= $request['field3'];

      $cars= $request['cars'];


      $objs_pro = DB::table('users')
        ->select(
        'users.*',
        'users.id as id_u',
        'provinces.*',
        'subdistricts.*',
        'districts.*',
        'provinces.name_in_thai as name_in_thai1',
        'provinces.id as id_p'
        )
        ->leftjoin('provinces', 'provinces.id',  'users.province_id')
        ->leftjoin('districts', 'districts.province_id',  'provinces.id')
        ->leftjoin('subdistricts', 'subdistricts.district_id',  'districts.id')
        ->where('users.user_lock', 1)
        ->where('users.reps_con', 1)
        ->where('users.is_admin', 0)
        ->groupBy('provinces.id')
        ->get();

        $data['objs_pro'] = $objs_pro;

        //dd($objs_pro);

        $data['cars'] = $cars;



    //  $admin = [];


    if($field2 == null && $cars != null){

    }else{




      $get_user_count = DB::table('users')
          ->select(
          'users.name'
          )
          ->where('users.user_lock', 1)
          ->where('users.is_admin', 0)
          ->where('users.name', 'LIKE', '%'.$field2.'%')
          ->count();

        if($get_user_count > 0){

          $get_user = DB::table('users')
              ->select(
              'users.*'
              )
              ->where('users.user_lock', 1)
              ->where('users.is_admin', 0)
              ->where('users.name', 'LIKE', '%'.$field2.'%')
              ->get();

              $data['objs'] = $get_user;
              $data['search'] = $field2;

              return view('reps_list', $data);

        }else{



          $get_count_provinces = DB::table('provinces')
              ->select(
              'provinces.name_in_thai'
              )
              ->Where('provinces.name_in_thai', $field2)
              ->count();

              if($get_count_provinces > 0){

                $get_provinces = DB::table('provinces')
                    ->select(
                    'provinces.*'
                    )
                    ->Where('provinces.name_in_thai', $field2)
                    ->first();
                  //  dd($get_provinces);

                  $get_user = DB::table('users')
                      ->select(
                      'users.*'
                      )
                      ->where('users.user_lock', 1)
                      ->where('users.is_admin', 0)
                      ->where('users.province_id', $get_provinces->id)
                      ->get();

                      $data['objs'] = $get_user;
                      $data['search'] = $field2;

                      return view('reps_list', $data);


              }else{



                $get_count_districts = DB::table('districts')
                    ->select(
                    'districts.name_in_thai'
                    )
                    ->Where('districts.name_in_thai',$field2)
                    ->count();


                    if($get_count_districts > 0){

                      $get_districts = DB::table('districts')
                          ->select(
                          'districts.*'
                          )
                          ->Where('districts.name_in_thai', $field2)
                          ->first();
                        //  dd($get_provinces);

                        $get_user = DB::table('users')
                            ->select(
                            'users.*'
                            )
                            ->where('users.user_lock', 1)
                            ->where('users.is_admin', 0)
                            ->where('users.amphur_id', $get_districts->id)
                            ->get();

                            $data['objs'] = $get_user;
                            $data['search'] = $field2;

                            return view('reps_list', $data);


                    }else{


                      $get_count_subdistricts = DB::table('subdistricts')
                          ->select(
                          'subdistricts.*'
                          )
                          ->Where('subdistricts.name_in_thai', $field2)
                          ->count();


                          if($get_count_subdistricts > 0){

                            $get_subdistricts = DB::table('subdistricts')
                                ->select(
                                'subdistricts.*'
                                )
                                ->Where('subdistricts.name_in_thai', $field2)
                                ->first();
                              //  dd($get_provinces);

                              $get_user = DB::table('users')
                                  ->select(
                                  'users.*'
                                  )
                                  ->where('users.user_lock', 1)
                                  ->where('users.is_admin', 0)
                                  ->where('users.district_id', $get_subdistricts->id)
                                  ->get();

                                  $data['objs'] = $get_user;
                                  $data['search'] = $field2;

                                  return view('reps_list', $data);


                          }else{
                            $data['objs'] = null;
                            $data['search'] = $field2;
                            return view('reps_list', $data);

                          }




                    }







              }












        }
      }

    }


    public function representatives_provinces(Request $request){

    }

    public function reps_list(Request $request){


      $field2= $request['field2'];
      $cars= $request['cars'];


      $objs_pro = DB::table('users')
        ->select(
        'users.*',
        'users.id as id_u',
        'provinces.*',
        'subdistricts.*',
        'districts.*',
        'provinces.name_in_thai as name_in_thai1',
        'provinces.id as id_p'
        )
        ->leftjoin('provinces', 'provinces.id',  'users.province_id')
        ->leftjoin('districts', 'districts.province_id',  'provinces.id')
        ->leftjoin('subdistricts', 'subdistricts.district_id',  'districts.id')
        ->where('users.user_lock', 1)
        ->where('users.reps_con', 1)
        ->where('users.is_admin', 0)
        ->groupBy('provinces.id')
        ->get();

        $data['objs_pro'] = $objs_pro;

        //dd($objs_pro);

        $data['cars'] = $cars;

      if($field2 == null && $cars != null){





          $objs_pro_lo = DB::table('provinces')
            ->select(
            'provinces.*',
            'subdistricts.*',
            'districts.*',
            'provinces.name_in_thai as name_in_thai1',
            'provinces.id as id_p'
            )
            ->leftjoin('districts', 'districts.province_id',  'provinces.id')
            ->leftjoin('subdistricts', 'subdistricts.district_id',  'districts.id')
            ->where('provinces.id', $cars)
            ->first();



        $objs = DB::table('users')
          ->select(
          'users.*'
          )
          ->where('user_lock', 1)
          ->where('reps_con', 1)
          ->where('is_admin', 0)
          ->get();
          //dd($objs); ->where('province_id', 1)


        $data['objs_pro_lo'] = $objs_pro_lo;
        $data['cars'] = $cars;

        //dd($objs_pro);
        $data['objs'] = $objs;
        $data['datahead'] = "รายชื่อสมาชิก";

        return view('representatives_provinces', $data);



      //  return view('representatives_provinces');

      }else{



    //  $admin = [];


      $get_user_count = DB::table('users')
          ->select(
          'users.name'
          )
          ->where('users.user_lock', 1)
          ->where('users.is_admin', 0)
          ->where('users.name', 'LIKE', '%'.$field2.'%')
          ->count();

        if($get_user_count > 0){

          $get_user = DB::table('users')
              ->select(
              'users.*'
              )
              ->where('users.user_lock', 1)
              ->where('users.is_admin', 0)
              ->where('users.name', 'LIKE', '%'.$field2.'%')
              ->get();

              $data['objs'] = $get_user;
              $data['search'] = $field2;

              return view('reps_list', $data);

        }else{



          $get_count_provinces = DB::table('provinces')
              ->select(
              'provinces.name_in_thai'
              )
              ->Where('provinces.name_in_thai', $field2)
              ->count();

              if($get_count_provinces > 0){

                $get_provinces = DB::table('provinces')
                    ->select(
                    'provinces.*'
                    )
                    ->Where('provinces.name_in_thai', $field2)
                    ->first();
                  //  dd($get_provinces);

                  $get_user = DB::table('users')
                      ->select(
                      'users.*'
                      )
                      ->where('users.user_lock', 1)
                      ->where('users.is_admin', 0)
                      ->where('users.province_id', $get_provinces->id)
                      ->get();

                      $data['objs'] = $get_user;
                      $data['search'] = $field2;

                      return view('reps_list', $data);


              }else{



                $get_count_districts = DB::table('districts')
                    ->select(
                    'districts.name_in_thai'
                    )
                    ->Where('districts.name_in_thai',$field2)
                    ->count();


                    if($get_count_districts > 0){

                      $get_districts = DB::table('districts')
                          ->select(
                          'districts.*'
                          )
                          ->Where('districts.name_in_thai', $field2)
                          ->first();
                        //  dd($get_provinces);

                        $get_user = DB::table('users')
                            ->select(
                            'users.*'
                            )
                            ->where('users.user_lock', 1)
                            ->where('users.is_admin', 0)
                            ->where('users.amphur_id', $get_districts->id)
                            ->get();

                            $data['objs'] = $get_user;
                            $data['search'] = $field2;

                            return view('reps_list', $data);


                    }else{


                      $get_count_subdistricts = DB::table('subdistricts')
                          ->select(
                          'subdistricts.*'
                          )
                          ->Where('subdistricts.name_in_thai', $field2)
                          ->count();


                          if($get_count_subdistricts > 0){

                            $get_subdistricts = DB::table('subdistricts')
                                ->select(
                                'subdistricts.*'
                                )
                                ->Where('subdistricts.name_in_thai', $field2)
                                ->first();
                              //  dd($get_provinces);

                              $get_user = DB::table('users')
                                  ->select(
                                  'users.*'
                                  )
                                  ->where('users.user_lock', 1)
                                  ->where('users.is_admin', 0)
                                  ->where('users.district_id', $get_subdistricts->id)
                                  ->get();

                                  $data['objs'] = $get_user;
                                  $data['search'] = $field2;

                                  return view('reps_list', $data);


                          }else{
                            $data['objs'] = null;
                            $data['search'] = $field2;
                            return view('reps_list', $data);

                          }

                    }

              }

        }



}


    }



    public function contact(Request $request){

    $resp = array();
    $name = $request->name;
    $surname = $request->surname;
    $email = $request->email;
    $year_old = $request->year_old;
    $detail = $request->detail;
    $radio = $request->radio;

    if($name == null && $surname == null && $email == null && $year_old == null && $detail == null && $radio == null){
      $resp["status"] = 1001;
    }else{


      function getUserIpAddr(){
          if(!empty($_SERVER['HTTP_CLIENT_IP'])){
              //ip from share internet
              $ip = $_SERVER['HTTP_CLIENT_IP'];
          }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
              //ip pass from proxy
              $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
          }else{
              $ip = $_SERVER['REMOTE_ADDR'];
          }
          return $ip;
      }




      $package = new contact();
      $package->name = $name;
      $package->surname = $surname;
      $package->email = $email;
      $package->year_old = $year_old;
      $package->radio = $radio;
      $package->detail = $detail;
      $package->ip_address = getUserIpAddr();
      $package->save();
      $resp["status"] = 1000;
    }


    return Response::json($resp);

    }


    public function contact_to_reps(Request $request){

    $resp = array();
    $name = $request->name;
    $surname = $request->surname;
    $email = $request->email;
    $detail = $request->detail;
    $id_reps = $request->id_reps;

    if($name == null && $surname == null && $email == null && $detail == null ){
      $resp["status"] = 1001;
    }else{


      function getUserIpAddr(){
          if(!empty($_SERVER['HTTP_CLIENT_IP'])){
              //ip from share internet
              $ip = $_SERVER['HTTP_CLIENT_IP'];
          }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
              //ip pass from proxy
              $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
          }else{
              $ip = $_SERVER['REMOTE_ADDR'];
          }
          return $ip;
      }




      $package = new contacttoreps();
      $package->id_reps = $id_reps;
      $package->name = $name;
      $package->surname = $surname;
      $package->email = $email;
      $package->detail = $detail;
      $package->ip_address = getUserIpAddr();
      $package->save();
      $resp["status"] = 1000;
    }


    return Response::json($resp);

    }







    public function representatives_all(){



      $objs_pro = DB::table('users')
        ->select(
        'users.*',
        'users.id as id_u',
        'provinces.*',
        'subdistricts.*',
        'districts.*',
        'provinces.name_in_thai as name_in_thai1',
        'provinces.id as id_p'
        )
        ->leftjoin('provinces', 'provinces.id',  'users.province_id')
        ->leftjoin('districts', 'districts.province_id',  'provinces.id')
        ->leftjoin('subdistricts', 'subdistricts.district_id',  'districts.id')
        ->where('users.user_lock', 1)
        ->where('users.reps_con', 1)
        ->where('users.is_admin', 0)
        ->groupBy('provinces.id')
        ->get();



      $objs = DB::table('users')
        ->select(
        'users.*'
        )
        ->where('user_lock', 1)
        ->where('reps_con', 1)
        ->where('is_admin', 0)
        ->get();
        //dd($objs); ->where('province_id', 1)

      $data['objs_pro'] = $objs_pro;
      //dd($objs_pro);
      $data['objs'] = $objs;
      $data['datahead'] = "รายชื่อสมาชิก";

      return view('representatives_all', $data);

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

    //dd($user);





    if($user->provider == 'facebook'){



      $fid=$user->provider_user_id;

      /*Facebook user image width*/
      $width="300";

      /*Facebook user image height*/
      $height="300";

      /*This is the actual url of the Facebook users image*/
      $fb_url  = "https://graph.facebook.com/$fid/picture?width=$width&height=$height&access_token=EAACGpXHuvGkBABN7vIs8c5azBUrZBnwKwW0BbkF3kQSbCfK4W0Guwgv6ZCaqOsq5adhZB07zZA25BMZCOYwulLDoHAcFeNtGLA63rx6D6BG0wtPxywRaBjn4Afkr4tHwQTHC7mGvH1RFAxZB9ysqpcb9wsmYvzd5ZAcQKWjfO9MzZBBanKrISGz4";

      $image_file = $fid.'.jpg';

      $img_save_location = $_SERVER['DOCUMENT_ROOT'].'/assets/image/avatar/'.$image_file;

      /*Path to the location to save the image on your server*/

      //dd(file_get_contents($fb_url));
      /*Use file_put_contents to get and save image*/
      file_put_contents($img_save_location, file_get_contents($fb_url));
    //  copy($fb_url,$img_save_location);

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


    public function get_avatar(){

      $user = DB::table('users')->select(
            'users.*',
            'facebook_login.*'
            )
        ->leftjoin('facebook_login', 'facebook_login.user_id',  'users.id')
        ->where('users.id', Auth::user()->id)
        ->first();

        $data['objs'] = $user;
        return view('getavatar', $data);

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


    public function reps_result($id){

    //  dd($id);

      $objs = DB::table('users')->select(
            'users.*',
            'users.id as id_user'
            )
        ->where('id', $id)
        ->first();

        if($objs == null){
            return redirect(url('quiz_choices'));
        }
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


      //  dd($labels);

      $abouts = DB::table('abouts')->select(
            'abouts.*'
            )
        ->where('user_id', $id)
        ->get();

        $exper = DB::table('experiences')->select(
              'experiences.*'
              )
          ->where('user_id', $id)
          ->get();

          $exper_count = DB::table('experiences')->select(
                'experiences.*'
                )
            ->where('user_id', $id)
            ->count();


          $education = DB::table('education')->select(
                'education.*'
                )
            ->where('user_id', $id)
            ->get();

            $timelines = DB::table('timelines')->select(
                  'timelines.*'
                  )
              ->where('user_id', $id)
              ->get();

              $galleries = DB::table('galleries')->select(
                    'galleries.*'
                    )
                ->where('user_id', $id)
                ->orderBy('id','DESC')
                ->limit(6)
                ->get();

                $galleries_count = DB::table('galleries')->select(
                      'galleries.*'
                      )
                  ->where('user_id', $id)
                  ->count();
      $s = 0;
      $data['s'] = $s;
      $data['galleries_count'] = $galleries_count;
      $data['galleries'] = $galleries;
      $data['timelines'] = $timelines;
      $data['education'] = $education;
      $data['exper'] = $exper;
      $data['exper_count'] = $exper_count;

      $data['user'] = $objs;
      $data['objs'] = $labels;
      $data['abouts'] = $abouts;


      return view('reps_detail', $data);



    }



    public function loadDataAjax(Request $request)
    {
        $output = '';
        $url = url('assets/images/all_image');
        $id = $request->id;
        $id_reps = $request->user_id;

        $posts = gallery::where('id','<',$id)->where('user_id', $id_reps)->orderBy('id','DESC')->limit(6)->get();
        //echo $id_reps;
        if(!$posts->isEmpty())
        {
            foreach($posts as $post)
            {

              $output .= '<div class="col-md-4 col-sm-4 gallery" data-ids="'.$post->id.'">
                <div class="img_container" style="max-height: 225px; height: 225px; min-height: 225px; overflow: hidden; position: relative; margin-bottom:10px;">
                  <a class="example-image-link" href="'.$url.'/'.$post->image.'">
                  <img class=" img-responsive" src="'.$url.'/'.$post->image.'" >
                </a>
                </div>
              </div>';


            }

            $output .= '<div class="col-md-12 text-center" id="remove-row">
                            <button class="btn btn-readmore " id="btn-more" data-id="'.$post->id.'" data-user_id="'.$post->user_id.'">เเสดงเพิ่ม</button>
                        </div>';

            echo $output;
        }
    }


    public function result()
    {




      $objs = DB::table('users')
        ->where('id', Auth::user()->id)
        ->where('vote_status', 1)
        ->first();

        if($objs == null){
            return redirect(url('quiz_choices'));
        }
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
            ->orderBy(DB::raw('RAND()'))
            ->get();

      foreach ($cat as $obj) {

        $ran=array(1, 2, 3);
        $randomElement = $ran[array_rand($ran, 1)];
        $obj->options = $randomElement;


      /*  $obj->length = strlen($obj->name_quiz);
        if($obj->length >= 170){
          $obj->options_m = 3;
        }else if($obj->length >= 150){
          $obj->options_m = 2;
        }else{
          $obj->options_m = 1;
        } */

      }
    //  dd($randomElement);
    //  dd($cat);
              $s = 1;
              $data['s'] = $s;
              $data['objs'] = $cat;
              $data['datahead'] = "จัดการ Quiz";


      //return view('result', $data);
    //  dd($data);
      //  return view('result');
        return view('quiz_choices', $data);
    }
}
