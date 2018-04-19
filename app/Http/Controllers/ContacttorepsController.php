<?php

namespace App\Http\Controllers;

use Auth;
use App\contacttoreps;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ContacttorepsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cat = DB::table('contacttoreps')->select(
              'contacttoreps.*'
              )
              ->where('id_reps', Auth::user()->id)
              ->orderBy('id', 'desc')
              ->get();


                $data['objs'] = $cat;
                $data['datahead'] = "จัดการข้อความ";

        return view('Represent.contact.index',$data);
    }

    public function representatives_post_read(Request $request){

      $user = contacttoreps::findOrFail($request->user_id);
      $user->status = 1;

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
