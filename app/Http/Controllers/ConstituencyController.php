<?php

namespace App\Http\Controllers;

use Auth;
use App\constituency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;


class ConstituencyController extends Controller
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

      $cat = DB::table('provinces')->select(
            'provinces.*',
            'provinces.id as id_p'
            )
            ->orderBy('id', 'desc')
            ->get();

            foreach ($cat as $obj) {

              $count_constituencies = DB::table('constituencies')
                ->where('prov_id', $obj->id)
                ->groupBy('con_id')
                ->count();

                $obj->count_constituencies = $count_constituencies;


                $count_con = DB::table('constituencies')
                  ->where('prov_id', $obj->id)
                  ->count();

                  $obj->count_con = $count_con;

            }


              $data['objs'] = $cat;
        //
        $data['datahead'] = "เขตเลือกตั้ง";
        return view('admin.constituency.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

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
       'id_pro' => 'required',
       'con_id' => 'required',
       'district' => 'required'
      ]);

      $id_pro = $request['id_pro'];
      $con_id = $request['con_id'];
      $district = $request['district'];

    //  dd(sizeof($district));


      for ($i = 0; $i < sizeof($district); $i++) {

        $id = $district[$i];


     //   $gallary[$i]
        $admins[] = [
            'prov_id' => $id_pro,
            'con_id' => $con_id,
            'dis_id' => $id,
        ];

      }
      constituency::insert($admins);

      return redirect(url('admin/constituency/'.$id_pro.'/edit'))->with('add_success','เพิ่ม เสร็จเรียบร้อยแล้ว');
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
        //

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


        $data['url'] = url('admin/constituency/'.$id);
        $data['datahead'] = "แก้ไขเขตเลือกตั้ง";
        $data['method'] = "put";

        $obj_z = DB::table('provinces')->select(
              'provinces.*'
              )
              ->where('id', $id)
              ->first();
            //  dd($obj);
        $districts = DB::table('districts')->select(
              'districts.*',
              'districts.id as id_dd',
              'constituencies.dis_id'
              )
              ->leftjoin('constituencies', 'constituencies.dis_id',  'districts.id')
              ->where('districts.province_id', $obj_z->id)
              ->where('districts.id', '!=' , 'constituencies.dis_id')
              ->get();



              $message = DB::table('constituencies')
               ->select(
               DB::raw('constituencies.*')
               )
               ->where('prov_id', $id)
               ->groupBy('con_id')
               ->get();



              //  dd($message);



               foreach ($message as $obj_get_1) {



                 $message2 = DB::table('constituencies')
                  ->select(
                  'constituencies.*',
                  'constituencies.id as id_del'
                  )
                  ->where('con_id', $obj_get_1->con_id)
                  ->get();


                  $obj_get_1->option = $message2;

                  foreach ($obj_get_1->option as $obj_get_2) {

                    $get_dis = DB::table('districts')
                     ->select(
                     'districts.*'
                     )
                     ->where('id', $obj_get_2->dis_id)
                     ->first();

                     $obj_get_2->name_dis = $get_dis->name_in_thai;

                  }






               }

              // dd($districts);

        $data['message'] = $message;
        $data['districts'] = $districts;
        $data['objs'] = $obj_z;

        return view('admin.constituency.edit', $data);
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


    public function del_constituency(Request $request){

      $del_dis = $request->get('del_dis');
      $id_pro = $request['id_pro'];

      if (sizeof($del_dis) > 0) {

       for ($i = 0; $i < sizeof($del_dis); $i++) {

         $objs = DB::table('constituencies')
           ->where('id', $del_dis[$i])
           ->first();

           DB::table('constituencies')->where('id', $objs->id)->delete();
       /*  $path = 'assets/cusimage/';
         $filename = time()."-".$gallary[$i]->getClientOriginalName();
         $gallary[$i]->move($path, $filename); */




       }


      }
      return redirect(url('admin/constituency/'.$id_pro.'/edit'))->with('del_success','เพิ่ม เสร็จเรียบร้อยแล้ว');

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
