<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Http\Requests;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\DB;

class representatives extends Controller
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


        $objs = DB::table('users')
          ->select(
          'users.*',
          'users.id as idu',
          'provinces.*'
          )
          ->leftjoin('provinces', 'provinces.id', '=', 'users.province_id')
          ->where('users.user_lock', 1)
          ->where('users.reps_con', 1)
          ->get();

      $data['objs'] = $objs;
      $data['datahead'] = "สภาผู้แทนราษฎร";
      return view('admin.representatives.index', $data);
    }

    public function index_new()
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

      $objs = DB::table('users')
        ->select(
        'users.*',
        'users.id as idu',
        'provinces.*'
        )
        ->leftjoin('provinces', 'provinces.id', '=', 'users.province_id')
        ->where('users.user_lock', 1)
        ->where('users.reps_con', 0)
        ->get();

      $data['objs'] = $objs;
      $data['datahead'] = "สภาผู้แทนราษฎร ใหม่";
      return view('admin.representatives.index_new', $data);
    }

    public function api_post_status(Request $request){

    $user = User::findOrFail($request->user_id);

              if($user->reps_con == 1){
                  $user->reps_con = 0;
              } else {
                  $user->reps_con = 1;
              }


      return response()->json([
      'data' => [
        'success' => $user->save(),
      ]
    ]);

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
        //
        $data['method'] = "post";
        $data['url'] = url('admin/representatives');
        $data['datahead'] = "เพิ่มสภาผู้แทนราษฎร";
        return view('admin.representatives.create', $data);
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
       'name' => 'required|unique:users|max:255',
       'email' => 'required|email|max:255|unique:users',
       'password' => 'required|min:6|confirmed'

     ]);
        //
        $package = new User();
        $package->name = $request['name'];
        $package->first_name = $request['first_name'];
        $package->last_name = $request['last_name'];
        $package->email = $request['email'];
        $package->password = bcrypt($request['password']);
        $package->phone = $request['phone'];
        $package->provider = 'email';
        $package->user_lock = 1;
        $package->reps_con = 1;
        $package->save();

        $the_id = $package->id;


        return redirect(url('admin/representatives/'.$the_id.'/edit'))->with('add_success','เพิ่มบัญชีผู้ใช้งาน '.$request['name'].' เสร็จเรียบร้อยแล้ว');
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


      $abouts = DB::table('abouts')
        ->select(
        'abouts.*'
        )
        ->where('user_id', $id)
        ->get();

        $count = DB::table('abouts')
          ->select(
          'abouts.*'
          )
          ->where('user_id', $id)
          ->count();


          $experiences = DB::table('experiences')
            ->select(
            'experiences.*'
            )
            ->where('user_id', $id)
            ->get();

            $count_experiences = DB::table('experiences')
              ->select(
              'experiences.*'
              )
              ->where('user_id', $id)
              ->count();

      $objs = DB::table('users')
        ->select(
        'users.*',
        'districts.name_in_thai as name_in_thai_d',
        'subdistricts.name_in_thai as name_in_thai_s'
        )
        ->leftjoin('districts', 'districts.id', '=', 'users.amphur_id')
        ->leftjoin('subdistricts', 'subdistricts.id', '=', 'users.district_id')
        ->where('users.id', $id)
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

      $data['url'] = url('admin/representatives/'.$id);
      $data['objs'] = $objs;
      $data['count'] = $count;
      $data['s'] = $s;
      $data['abouts'] = $abouts;
      $data['method'] = "put";
      $data['header'] = 'ข้อมูลส่วนตัว';
      return view('admin.representatives.edit',$data);
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

       return redirect(url('admin/representatives/'.$id.'/edit'))->with('edit_success','คุณทำการแก้ไขอสังหา สำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $objs = DB::table('users')
      ->where('users.id', $id)
      ->first();


      $image_count =   $objs = DB::table('galleries')
            ->select(
               'galleries.*'
               )
            ->where('user_id', $id)
            ->count();

      if($image_count > 0){

        $image_all =   $objs = DB::table('galleries')
              ->select(
                 'galleries.*'
                 )
              ->where('user_id', $id)
              ->get();

          foreach ($image_all as $user) {
          $file_path = 'assets/images/all_image/'.$user->image;
          unlink($file_path);
        }

      }




      $obj1 = DB::table('voteresults')
      ->where('voteresults.user_id', $id)
      ->delete();

      $obj2 = DB::table('votesmarts')
      ->where('votesmarts.user_id', $id)
      ->delete();

      $obj = DB::table('users')
      ->where('users.id', $id)
      ->delete();

      return redirect(url('admin/representatives/'))->with('delete','ลบข้อมูล สำเร็จ');
    }
}
