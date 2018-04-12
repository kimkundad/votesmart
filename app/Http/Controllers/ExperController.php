<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\experience;
use App\Http\Requests;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ExperController extends Controller
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

            $s = 1;
            $data['method'] = "put";
            $data['objs'] = $experiences;
            $data['count'] = $count_experiences;
            $data['s'] = $s;
            $data['header'] = 'ประสบการณ์ ผู้สมัคร ส.ส. บัญชีรายชื่อ';
            return view('Represent.experiences.index',$data);
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

          if($request['start_year'] == null && $request['end_year'] == null && $request['headname'] == null && $request['detail'] == null){
            return redirect(url('representatives/exper'))->with('error','คุณทำการแก้ไขอสังหา สำเร็จ');
          }


          $package = new experience;
          $package->user_id = Auth::user()->id;
          $package->start_year = $request['start_year'];
          $package->end_year = $request['end_year'];
          $package->head = $request['headname'];
          $package->sub_head = $request['sub_headname'];
          $package->detail = $request['detail'];
          $package->save();

         return redirect(url('representatives/exper'))->with('add_success','คุณทำการแก้ไขอสังหา สำเร็จ');
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
        //dd('5555');
        if($request['start_year'] == null && $request['end_year'] == null && $request['headname'] == null && $request['detail'] == null){
          return redirect(url('representatives/exper'))->with('error','คุณทำการแก้ไขอสังหา สำเร็จ');
        }

        $package = experience::find($id);
        $package->user_id = Auth::user()->id;
        $package->start_year = $request['start_year'];
        $package->end_year = $request['end_year'];
        $package->head = $request['headname'];
        $package->sub_head = $request['sub_headname'];
        $package->detail = $request['detail'];
        $package->save();

       return redirect(url('representatives/exper'))->with('add_success','คุณทำการแก้ไขอสังหา สำเร็จ');
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
