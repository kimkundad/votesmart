<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\result;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $cat = DB::table('results')->select(
            'results.*',
            'results.id as id_r',
            'results.created_at as create',
            'users.*',
            'categories.*'
            )
            ->leftjoin('categories', 'categories.id',  'results.category_id')
            ->leftjoin('users', 'users.id',  'results.user_id')
            ->get();


              $data['objs'] = $cat;
              $data['datahead'] = "จัดการ Results";


      return view('admin.result.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $cat = DB::table('categories')
            ->get();

      $data['objs'] = $cat;
      $data['method'] = "post";
      $data['url'] = url('admin/result');
      $data['datahead'] = "สร้าง Result ";
      return view('admin.result.create', $data);
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
       'category_id' => 'required',
       'name_result' => 'required'
      ]);


      $package = new result();
      $package->category_id = $request['category_id'];
      $package->user_id = Auth::user()->id;
      $package->result_name = $request['name_result'];
      $package->save();
      return redirect(url('admin/result'))->with('add_success','เพิ่ม เสร็จเรียบร้อยแล้ว');
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
      $cat = DB::table('categories')
            ->get();

      $data['cat'] = $cat;


      $obj = result::find($id);
      $data['url'] = url('admin/result/'.$id);
      $data['datahead'] = "แก้ไข Result";
      $data['method'] = "put";
      $data['objs'] = $obj;
      return view('admin.result.edit', $data);
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
       'name_result' => 'required'
      ]);


       $package = result::find($id);
       $package->category_id = $request['category_id'];
       $package->result_name = $request['name_result'];
       $package->save();

     return redirect(url('admin/result/'.$id.'/edit'))->with('edit_success','แก้ไขหมวดหมู่ ');
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
