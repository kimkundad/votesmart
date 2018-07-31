@extends('admin.layouts.template')

@section('admin.stylesheet')
<style>
.dropdown-item {
    display: block;
    width: 100%;
    padding: 0.25rem 1.5rem;
    clear: both;
    font-weight: 400;
    color: #212529;
    text-align: inherit;
    white-space: nowrap;
    background: none;
    border: 0;
}
a:hover, a:focus {
    color: #2a6496;
    text-decoration: none;
}
</style>
@stop('admin.stylesheet')

@section('admin.content')


<?php
function DateThai($strDate)
{
$strYear = date("Y",strtotime($strDate))+543;
$strMonth= date("n",strtotime($strDate));
$strDay= date("j",strtotime($strDate));
$strHour= date("H",strtotime($strDate));
$strMinute= date("i",strtotime($strDate));
$strSeconds= date("s",strtotime($strDate));
$strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
$strMonthThai=$strMonthCut[$strMonth];
return "$strDay $strMonthThai $strYear";
}
 ?>



        <section role="main" class="content-body">

          <header class="page-header">
            <h2>{{$datahead}}</h2>

            <div class="right-wrapper pull-right">
              <ol class="breadcrumbs">
                <li>
                  <a href="{{url('admin/dashboard')}}">
                    <i class="fa fa-home"></i>
                  </a>
                </li>

                <li><span>{{$datahead}}</span></li>
              </ol>

              <a class="sidebar-right-toggle" data-open="sidebar-right" ><i class="fa fa-chevron-left"></i></a>
            </div>
          </header>


          <!-- start: page -->



<div class="row">
              <div class="row">
              <div class="col-xs-12">

            <section class="panel">



              <div class="panel-body">

                <div class="col-md-12 " style="padding-left: 1px;">

                  <a class="btn btn-primary " href="{{url('admin/result/create')}}" >
                      <i class="fa fa-plus"></i> เพิ่ม Result</a>
                </div>
                <br><br>




                <table class="table table-responsive-lg table-striped table-sm mb-0" id="datatable-default">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Result image</th>
                      <th>หมวดหมู่</th>
                      <th>จำนวนที่มี</th>

                      <th>วันที่สร้าง</th>
                      <th>จัดการ</th>
                    </tr>
                  </thead>
                  <tbody>
             @if($objs)
                @foreach($objs as $u)
                    <tr id="{{$u->id_r}}">
                      <td>{{$u->id_r}}</td>
                      <td><img src="{{url('assets/result/'.$u->result_name)}}" class="img-responsive" style="height:75px;" /></td>
                      <td>{{$u->name_cat}}</td>
                      <td></td>

                      <td><?php echo DateThai($u->create); ?></td>
                      <td>

                        <div class="btn-group flex-wrap">
  												<button type="button" class="mb-1 mt-1 mr-1 btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">จัดการ <span class="caret"></span></button>
  												<div class="dropdown-menu" role="menu">

  													<a class="dropdown-item text-1" href="{{url('admin/result/'.$u->id_r.'/edit')}}">แก้ไข</a>

                            <form  action="{{url('admin/result/'.$u->id_r)}}" method="post" onsubmit="return(confirm('Do you want Delete'))">
                              <input type="hidden" name="_method" value="DELETE">
                               <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <button type="submit" class="dropdown-item text-1 text-danger">ลบ</button>
                            </form>
  												

  												</div>
  											</div>

                      </td>
                    </tr>
                 @endforeach
              @endif

                  </tbody>
                </table>
              </div>
            </section>

              </div>
            </div>
        </div>
</section>
@stop



@section('scripts')
<script src="{{asset('/assets/javascripts/tables/examples.datatables.default.js')}}"></script>


@if ($message = Session::get('add_success'))
<script type="text/javascript">
var stack_topleft = {"dir1": "down", "dir2": "right", "push": "top"};
    var notice = new PNotify({
          title: 'ทำรายการสำเร็จ',
          text: 'ยินดีด้วย ได้ทำการเพิ่ม Result สำเร็จเรียบร้อยแล้วค่ะ',
          type: 'success',
          addclass: 'stack-topright'
        });
</script>
@endif


@if ($message = Session::get('del_result'))
<script type="text/javascript">
var stack_topleft = {"dir1": "down", "dir2": "right", "push": "top"};
    var notice = new PNotify({
          title: 'ทำรายการสำเร็จ',
          text: 'ยินดีด้วย ได้ทำการลบ Result สำเร็จเรียบร้อยแล้วค่ะ',
          type: 'success',
          addclass: 'stack-topright'
        });
</script>
@endif

@stop('scripts')
