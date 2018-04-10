<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;
use App\gallery;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $img_all = DB::table('galleries')->select(
            'galleries.*'
            )
            ->where('user_id', Auth::user()->id)
            ->get();
            $data['img_all'] = $img_all;
            $data['url'] = url('representatives/gallery/');
            $data['method'] = "post";
            return view('Represent.gallery.index',$data);
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
    public function add_gallery(Request $request)
    {
        //
      //  dd('55555');

        $gallary = $request->file('product_image');
        $this->validate($request, [
             'product_image' => 'required|max:4048'
         ]);

         if (sizeof($gallary) > 0) {
          for ($i = 0; $i < sizeof($gallary); $i++) {
            $path = 'assets/images/all_image/';
            $filename = time()."-".$gallary[$i]->getClientOriginalName();
            $gallary[$i]->move($path, $filename);
            $admins[] = [
                'image' => $filename,
                'user_id' => Auth::user()->id,
            ];
          }
          gallery::insert($admins);
        }

        return redirect(url('representatives/gallery'))->with('add_success','คุณทำการแก้ไขอสังหา สำเร็จ');
    }



    public function property_image_del(Request $request){


      $gallary = $request->get('product_image');

      if (sizeof($gallary) > 0) {

       for ($i = 0; $i < sizeof($gallary); $i++) {

         $objs = DB::table('galleries')
           ->where('id', $gallary[$i])
           ->first();

           $file_path = 'assets/images/all_image/'.$objs->image;
           unlink($file_path);

           DB::table('galleries')->where('id', $objs->id)->delete();
       /*  $path = 'assets/cusimage/';
         $filename = time()."-".$gallary[$i]->getClientOriginalName();
         $gallary[$i]->move($path, $filename); */




       }


      }
      //dd($objs);
      return redirect(url('representatives/gallery'))->with('del_success','คุณทำการแก้ไขอสังหา สำเร็จ');

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
