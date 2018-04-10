<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\timeline;
use App\Http\Requests;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TimelineController extends Controller
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
        //

        $experiences = DB::table('timelines')
          ->select(
          'timelines.*'
          )
          ->where('user_id', Auth::user()->id)
          ->get();

          $count_experiences = DB::table('timelines')
            ->select(
            'timelines.*'
            )
            ->where('user_id', Auth::user()->id)
            ->count();

            $s = 1;
            $data['objs'] = $experiences;
            $data['count'] = $count_experiences;
            $data['s'] = $s;
            $data['header'] = 'กำหนดการ ผู้สมัคร ส.ส. บัญชีรายชื่อ';
            return view('Represent.timeline.index',$data);
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
        //
        if($request['detail'] == null && $request['day_start'] == null ){
          return redirect(url('representatives/timeline'))->with('error','คุณทำการแก้ไขอสังหา สำเร็จ');
        }

        $image = $request->file('image');
        //dd($image);
        if($image == NULL){

          $package = new timeline;
          $package->user_id = Auth::user()->id;
          $package->detail = $request['detail'];
          $package->day_start = $request['day_start'];

        }else{

          $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
           $img = Image::make($image->getRealPath());
           $img->resize(500, 500, function ($constraint) {
           $constraint->aspectRatio();
         })->save('assets/image/timeline/'.$input['imagename']);

          $package = new timeline;
          $package->user_id = Auth::user()->id;
          $package->detail = $request['detail'];
          $package->image = $input['imagename'];
          $package->day_start = $request['day_start'];

        }


        $package->save();

       return redirect(url('representatives/timeline'))->with('add_success','คุณทำการแก้ไขอสังหา สำเร็จ');
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
