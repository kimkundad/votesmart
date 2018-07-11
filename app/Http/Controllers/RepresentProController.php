<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\about;
use App\localreps;
use App\constituency;
use App\Http\Requests;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RepresentProController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
       $this->middleware('auth');
     }

     public function constituency_edit(Request $request, $id){
       $request->user()->authorizeRoles(['manager']);

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









       return view('Represent.constituency.edit', $data);
     }

     public function get_constituency(Request $request){

       $request->user()->authorizeRoles(['manager']);




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
         return view('Represent.constituency.index', $data);

     }
     public function index(Request $request)
     {
       $request->user()->authorizeRoles(['manager']);

       $abouts = DB::table('abouts')
         ->select(
         'abouts.*'
         )
         ->where('user_id', Auth::user()->id)
         ->get();



         $localreps = DB::table('localreps')
           ->select(
           'localreps.*'
           )
           ->where('reps_id', Auth::user()->id)
           ->get();

           $data['localreps'] = $localreps;

         $count = DB::table('abouts')
           ->select(
           'abouts.*'
           )
           ->where('user_id', Auth::user()->id)
           ->count();


           $experiences = DB::table('experiences')
             ->select(
             'experiences.*'
             )
             ->where('user_id', Auth::user()->id)
             ->get();

             $count_experiences = DB::table('experiences')
               ->select(
               'experiences.*'
               )
               ->where('user_id', Auth::user()->id)
               ->count();

       $objs = DB::table('users')
         ->select(
         'users.*',
         'districts.name_in_thai as name_in_thai_d',
         'subdistricts.name_in_thai as name_in_thai_s'
         )
         ->leftjoin('districts', 'districts.id', '=', 'users.amphur_id')
         ->leftjoin('subdistricts', 'subdistricts.id', '=', 'users.district_id')
         ->where('users.id', Auth::user()->id)
         ->first();
         $s = 1;







         $provinces = DB::table('provinces')->get();
         $data['provinces'] = $provinces;


         $districts = DB::table('districts')->get();
         $data['districts'] = $districts;


         $subdistricts = DB::table('subdistricts')->get();
         $data['subdistricts'] = $subdistricts;



         $data['experiences'] = $experiences;
         $data['count_experiences'] = $count_experiences;

       $data['url'] = url('representatives/profile/'.Auth::user()->id);
       $data['objs'] = $objs;
       $data['count'] = $count;
       $data['s'] = $s;
       $data['abouts'] = $abouts;
       $data['method'] = "put";
       $data['header'] = 'ข้อมูลส่วนตัว';
       return view('Represent.profile.index',$data);
     }


     public function amphoe(Request $request){

       $countCity = DB::table('districts')
       ->where('province_id', $request['province'])
         ->count();


      // $countCity = City::where('PROVINCE_ID', '=', Input::get('PROVINCE_ID'))->count();
      if(!empty($countCity))
      {

        $dataCity = DB::table('districts')
        ->where('province_id', $request['province'])
          ->get();


        //  $dataCity = City::where('PROVINCE_ID', '=', Input::get('PROVINCE_ID'))->get();
          foreach ($dataCity as $rowCity) {
              echo '<option value="' . $rowCity->id .'">' . $rowCity->name_in_thai .'</option>';
          }
      }else{
          echo '<option value="">--ไม่พบข้อมูล--</option>';
      }

     }

     public function district(Request $request){



       $countCity = DB::table('subdistricts')
       ->where('district_id', $request['amphoe'])
         ->count();


      // $countCity = City::where('PROVINCE_ID', '=', Input::get('PROVINCE_ID'))->count();
      if(!empty($countCity))
      {

        $dataCity = DB::table('subdistricts')
        ->where('district_id', $request['amphoe'])
          ->get();


        //  $dataCity = City::where('PROVINCE_ID', '=', Input::get('PROVINCE_ID'))->get();
          foreach ($dataCity as $rowCity) {
              echo '<option value="' . $rowCity->id .'">' . $rowCity->name_in_thai .'</option>';
          }
      }else{
          echo '<option value="">--ไม่พบข้อมูล--</option>';
      }



     }

     public function imageCropPost(Request $request)
    {
        $data = $request->image;

        list($type, $data) = explode(';', $data);
        list(, $data)      = explode(',', $data);

        $data = base64_decode($data);
        $image_name= time().'.png';
        $path = public_path() . "/assets/images/avatar/" . $image_name;

        file_put_contents($path, $data);

        $id = Auth::user()->id;

        $package = User::find($id);
        $package->avatar = $image_name;
        $package->save();

        return response()->json(['success'=>'done']);
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

    public function add_localreps(Request $request){

      $con_id = $request['con_id'];
      date_default_timezone_set("Asia/Bangkok");
      $data_toview = date("Y-m-d H:i:s");

      for ($i = 0; $i < sizeof($con_id); $i++) {

        $id = $con_id[$i];


     //   $gallary[$i]
        $admins[] = [
            'reps_id' => Auth::user()->id,
            'con_id' => $con_id[$i],
            'created_at' => $data_toview,
        ];

      }
      localreps::insert($admins);
      return redirect(url('representatives/profile'))->with('add_localrep_success','คุณทำการแก้ไขอสังหา สำเร็จ');

    }
    public function add_about(Request $request)
    {
        //
        $about = $request['about'];
        date_default_timezone_set("Asia/Bangkok");
        $data_toview = date("Y-m-d H:i:s");

        for ($i = 0; $i < sizeof($about); $i++) {

          $id = $about[$i];


       //   $gallary[$i]
          $admins[] = [
              'user_id' => Auth::user()->id,
              'about' => $about[$i],
              'created_at' => $data_toview,
          ];

        }
        about::insert($admins);
        return redirect(url('representatives/profile'))->with('add_about_success','คุณทำการแก้ไขอสังหา สำเร็จ');
    }


    public function del_localreps(Request $request)
    {

      $id = $request['id'];
      $obj = localreps::find($id);
      $obj->delete();
      return redirect(url('representatives/profile'))->with('del_success','คุณทำการลบอสังหา สำเร็จ');

    }

    public function del_about(Request $request)
    {

      $id = $request['id'];
      $obj = about::find($id);
      $obj->delete();
      return redirect(url('representatives/profile'))->with('del_success','คุณทำการลบอสังหา สำเร็จ');

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
        $this->validate($request, [
           'name' => 'required',
           'phone' => 'required',
           'province_id' => 'required',
           'amphoe_id' => 'required'
          ]);

          $package = User::find($id);
          $package->name = $request['name'];
          $package->phone = $request['phone'];
          $package->bio = $request['bio'];
          $package->sub_title = $request['sub_title'];
          $package->fb = $request['fb'];
          $package->tw = $request['tw'];
          $package->ig = $request['ig'];
          $package->line_id = $request['line_id'];
          $package->lat = $request['lat'];
          $package->lng = $request['lng'];
          $package->province_id = $request['province_id'];
          $package->amphur_id = $request['amphoe_id'];
          $package->district_id = $request['district_id'];
          $package->save();

         return redirect(url('representatives/profile'))->with('edit_success','คุณทำการแก้ไขอสังหา สำเร็จ');
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
