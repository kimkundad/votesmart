<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\quiz;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $count_contact = DB::table('contacts')->select(
            'contacts.*'
            )
            ->where('status', 0)
            ->count();
      $data['count_contact'] = $count_contact;

      $count_users = DB::table('users')
        ->where('user_lock', 1)
        ->where('reps_con', 0)
        ->count();
      $data['count_users'] = $count_users;
        //
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


        return view('admin.quiz.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $count_contact = DB::table('contacts')->select(
            'contacts.*'
            )
            ->where('status', 0)
            ->count();
      $data['count_contact'] = $count_contact;

      $count_users = DB::table('users')
        ->where('user_lock', 1)
        ->where('reps_con', 0)
        ->count();
      $data['count_users'] = $count_users;

      $cat = DB::table('categories')
            ->get();

      $data['objs'] = $cat;
      $data['method'] = "post";
      $data['url'] = url('admin/quiz');
      $data['datahead'] = "สร้าง Quiz ";
      return view('admin.quiz.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function quiz_status(Request $request){

      $user = quiz::findOrFail($request->product_id);

              if($user->quiz_status == 1){
                  $user->quiz_status = 0;
              } else {
                  $user->quiz_status = 1;
              }


      return response()->json([
      'data' => [
        'success' => $user->save(),
      ]
    ]);

    }
    public function store(Request $request)
    {
      $this->validate($request, [
       'category_id' => 'required',
       'name_quiz' => 'required',
       'detail_quiz' => 'required'
      ]);

      if($request['switch'] == null){
        $switchs = 0;
      }else{
        $switchs = 1;
      }


      $package = new quiz();
      $package->cat_id = $request['category_id'];
      $package->user_id = Auth::user()->id;
      $package->name_quiz = $request['name_quiz'];
      $package->quiz_status = $switchs;
      $package->detail = $request['detail_quiz'];
      $package->save();
      return redirect(url('admin/quiz'))->with('add_success','เพิ่ม เสร็จเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $count_contact = DB::table('contacts')->select(
            'contacts.*'
            )
            ->where('status', 0)
            ->count();
      $data['count_contact'] = $count_contact;

      $count_users = DB::table('users')
        ->where('user_lock', 1)
        ->where('reps_con', 0)
        ->count();
      $data['count_users'] = $count_users;
      
      $cat = DB::table('categories')
            ->get();

      $data['cat'] = $cat;


      $obj = quiz::find($id);
      $data['url'] = url('admin/quiz/'.$id);
      $data['datahead'] = "แก้ไข Quiz";
      $data['method'] = "put";
      $data['objs'] = $obj;
      return view('admin.quiz.edit', $data);
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
      $this->validate($request, [
       'category_id' => 'required',
       'name_quiz' => 'required',
       'detail_quiz' => 'required'
      ]);

      if($request['switch'] == null){
        $switchs = 0;
      }else{
        $switchs = 1;
      }

       $package = quiz::find($id);
       $package->cat_id = $request['category_id'];
       $package->name_quiz = $request['name_quiz'];
       $package->quiz_status = $switchs;
       $package->detail = $request['detail_quiz'];
       $package->save();

    return redirect(url('admin/quiz/'.$id.'/edit'))->with('edit_success','แก้ไขหมวดหมู่ ');
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
