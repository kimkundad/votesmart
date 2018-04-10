<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\about;
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
     public function index(Request $request)
     {
       $request->user()->authorizeRoles(['manager']);

       $abouts = DB::table('abouts')
         ->select(
         'abouts.*'
         )
         ->where('user_id', Auth::user()->id)
         ->get();

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
