@extends('admin.layouts.template')
@section('admin.content')


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
return "$strDay $strMonthThai $strYear $strHour:$strMinute น.";
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
              <header class="panel-heading">
                <div class="panel-actions">
                  <a href="#"  class="panel-action panel-action-toggle" data-panel-toggle></a>

                </div>

                <h2 class="panel-title">{{$datahead}}</h2>
              </header>
              <div class="panel-body">

                <div class="col-md-12 " style="padding-left: 1px;">

                  <a class="btn btn-primary " href="{{url('admin/votesmart/create')}}" >
                      <i class="fa fa-plus"></i> เพิ่ม Vote</a>
                </div>
                <br><br>


                <table class="table table-responsive-lg table-striped table-sm mb-0" >
                  <thead>
                    <tr>
                      <th>วันที่ Vote</th>
                      <th>ผู้ใช้งาน</th>
                      <th>จำนวน Quiz</th>
                      <th>เรื่องสนใจอันกับ 1</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
             @if($objs)
                @foreach($objs as $u)
                    <tr>
                      <td>
                        @if($u->result)
                        <?php echo DateThai($u->result->created_ats); ?>
                        @endif
                      </td>
                      <td>
                        @if($u->provider == 'email')
                        <img src="{{url('assets/images/avatar/'.$u->avatar)}}" alt="{{$u->name}}" style="height:32px;" class="img-circle">
                        @else
                        <img src="//{{$u->avatar}}" alt="{{$u->name}}" style="height:32px;" class="img-circle">
                        @endif

                        {{$u->name}}</td>
                      <td>{{$u->options}} ข้อ</td>
                      <td>
                        @if($u->result)
                        {{$u->result->name_cat}}
                        @endif
                    </td>
                      <td>

                        <div class="btn-group flex-wrap">
  												<button type="button" class="mb-1 mt-1 mr-1 btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">จัดการ <span class="caret"></span></button>
  												<div class="dropdown-menu" role="menu">
  													<a class="dropdown-item text-1" href="{{url('admin/votesmart/'.$u->id)}}">ดูข้อมูล</a>
                            <a class="dropdown-item text-1 text-danger" href="">ลบ</a>


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
          text: 'ยินดีด้วย ได้ทำการเพิ่มข้อมูล สำเร็จเรียบร้อยแล้วค่ะ',
          type: 'success',
          addclass: 'stack-topright'
        });
</script>
@endif


@if ($message = Session::get('delete'))
<script type="text/javascript">
var stack_topleft = {"dir1": "down", "dir2": "right", "push": "top"};
    var notice = new PNotify({
          title: 'ทำรายการสำเร็จ',
          text: 'ยินดีด้วย ได้ทำการลบข้อมูล สำเร็จเรียบร้อยแล้วค่ะ',
          type: 'success',
          addclass: 'stack-topright'
        });
</script>
@endif

@stop('scripts')
