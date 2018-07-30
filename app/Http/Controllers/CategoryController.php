<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\category;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
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

      $cat = DB::table('categories')->select(
            'categories.*',
            'categories.id as id_c',
            'categories.created_at as created_ats',
            'users.*'
            )
            ->leftjoin('users', 'users.id',  'categories.user_id')
            ->get();

            $s = 1;
            foreach ($cat as $obj) {
                $optionsRes = [];
                $options = DB::table('quizzes')->select(
                  'quizzes.*'
                  )
                  ->where('quizzes.cat_id', $obj->id_c)
                  ->count();

                     $optionsRes['count'] = $options;

                $obj->options = $options;
              }
              //dd($cat);
              $data['objs'] = $cat;
              $data['datahead'] = "จัดการหมวดหมู่";


      return view('admin.category.index', $data);
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

      $data['method'] = "post";
      $data['url'] = url('admin/category');
      $data['datahead'] = "สร้างหมวดหมู่ ";
      return view('admin.category.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
       'name_cat' => 'required',
       'color_bg' => 'required'
      ]);


      $package = new category();
      $package->name_cat = $request['name_cat'];
      $package->color_bg = $request['color_bg'];
      $package->user_id = Auth::user()->id;
      $package->save();
      return redirect(url('admin/category'))->with('add_success','เพิ่ม เสร็จเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        $obj = category::find($id);

        $cat = DB::table('quizzes')->select(
              'quizzes.*',
              'quizzes.id as id_q',
              'quizzes.created_at as create',
              'users.*',
              'categories.*'
              )
              ->leftjoin('categories', 'categories.id',  'quizzes.cat_id')
              ->leftjoin('users', 'users.id',  'quizzes.user_id')
              ->where('quizzes.cat_id', $id)
              ->get();


                $data['objs'] = $cat;
                $data['datahead'] = "รายการ Quiz ทั้งหมดของ".$obj->name_cat;


        return view('admin.category.show', $data);
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

      $obj = category::find($id);
      $data['url'] = url('admin/category/'.$id);
      $data['datahead'] = "แก้ไขหมวดหมู่";
      $data['method'] = "put";
      $data['objs'] = $obj;
      return view('admin.category.edit', $data);
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
         'name_cat' => 'required',
         'color_bg' => 'required'
     ]);

     $package = category::find($id);
      $package->name_cat = $request['name_cat'];
      $package->color_bg = $request['color_bg'];
      $package->save();

    return redirect(url('admin/category/'.$id.'/edit'))->with('edit_success','แก้ไขหมวดหมู่ ');
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
      $obj = category::find($id);
      $obj->delete();
      return redirect(url('admin/category/'))->with('delete','คุณทำการลบอสังหา สำเร็จ');
    }
}
