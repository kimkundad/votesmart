@extends('Represent.layouts.template')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link href="{{URL::asset('assets/upload_image/css/fileinput.css')}}" rel="stylesheet">
@section('Represent.content')

<style>
.btn-file{
      width: 120px;
}
</style>




        <section role="main" class="content-body">

          <header class="page-header">
            <h2>กำหนดการ </h2>

            <div class="right-wrapper pull-right">
              <ol class="breadcrumbs">
                <li>
                  <a href="{{url('admin/dashboard')}}">
                    <i class="fa fa-home"></i>
                  </a>
                </li>

                <li><span>กำหนดการ</span></li>
              </ol>

              <a class="sidebar-right-toggle" data-open="sidebar-right" ><i class="fa fa-chevron-left"></i></a>
            </div>
          </header>


          <!-- start: page -->



<div class="row">
              <div class="row">

                <div class="col-xs-9">
                  <section class="panel">
                    <div class="panel-body">
                  <form class="form-horizontal" action="{{$url}}" method="post" enctype="multipart/form-data">
                                        {{ method_field($method) }}
                  											{{ csrf_field() }}
                  <div class="form-group">

                  <div class="col-sm-12">
                  <label for="exampleInputFile">รูปลายประกอบ</label>

                  <input id="file-0a" class="file " type="file" name="product_image[]" accept="image/*" multiple>



                  </div>
                  </div>

                  <div class="text-center">
                  <button type="submit" class="btn btn-info" onclick="clicksound.playclip()"><i class="fa fa-save"></i> อัพเดทข้อมูล</button>
                  <button type="reset" class="btn btn-default" onclick="showhide('#show','#add');"><i class="fa fa-eraser"></i> ยกเลิก</button>
                  </div>
                  </form>
                  </div>
                </section>
                </div>

              <div class="col-xs-12">






                  <!-- start: page -->
                  <section class=" content-with-menu-has-toolbar media-gallery">
                  <div class="content-with-menu-container">

                    <form  action="{{url('representatives/property_image_del/')}}" method="post" onsubmit="return(confirm('Do you want Delete'))">
                      <input type="hidden" name="_method" value="POST">
                       <input type="hidden" name="_token" value="{{ csrf_token() }}">

                  <div class="row mg-files" data-sort-destination data-sort-id="media-gallery">

                  @if($img_all)
                  @foreach($img_all as $img_u)
                    <div class="isotope-item  col-sm-6 col-md-4 col-lg-3" style="min-height: 350px;">
                      <div class="thumbnail">
                        <div class="">
                          <a class="thumb-image" >
                            <img src="{{url('assets/images/all_image/'.$img_u->image)}}" class="img-responsive" >
                          </a>
                          <br>
                          <div class="mg-thumb-options">
                            <div class="checkbox-custom checkbox-default">
                              <input type="checkbox" name="product_image[]" value="{{$img_u->id}}"  >
                              <label>เลือกรูปภาพประกอบ</label>
                            </div>
                          </div>
                        </div>

                        <div class="mg-description">

                          <small class="pull-right text-muted"></small>
                        </div>
                      </div>
                    </div>
                  @endforeach
                  @endif




                  </div>
                  <button type="submit" class="btn btn-danger pull-right" style="margin-top:15px;">ลบรูปภาพที่เลือกไว้</button>
                  </form>



                  </div>
                  </section>
                  <!-- end: page -->


              </div>
            </div>
        </div>
</section>
@stop



@section('scripts')
<script src="{{URL::asset('assets/upload_image/js/fileinput.js')}}"></script>
<script>


 $('.datepicker').datepicker({
    format: 'yyyy-mm-dd',
    startDate: '-3d'
});


</script>

@if ($message = Session::get('add_success'))
<script type="text/javascript">

  var stack_topleft = {"dir1": "down", "dir2": "right", "push": "top"};
      var notice = new PNotify({
            title: 'ทำรายการสำเร็จ',
            text: 'ยินดีด้วย ได้ทำการเพิ่มข้อมูล สำเร็จเรียบร้อยแล้วค่ะ',
            type: 'success',
            addclass: 'stack-topright'
          });
</script>
@endif


@if ($message = Session::get('del_success'))
<script type="text/javascript">

  var stack_topleft = {"dir1": "down", "dir2": "right", "push": "top"};
      var notice = new PNotify({
            title: 'ทำรายการสำเร็จ',
            text: 'ยินดีด้วย ได้ทำการเพิ่มข้อมูล สำเร็จเรียบร้อยแล้วค่ะ',
            type: 'success',
            addclass: 'stack-topright'
          });
</script>
@endif


@if ($message = Session::get('error'))
<script type="text/javascript">

  var stack_topleft = {"dir1": "down", "dir2": "right", "push": "top"};
      var notice = new PNotify({
            title: 'แย่แล้ว',
            text: 'กรุณาใส่ข้อมูล ให้ครบด้วยค่ะ',
            type: 'error',
            addclass: 'stack-topright'
          });
</script>
@endif

@stop('scripts')
