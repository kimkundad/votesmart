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
<style>
.ap-questions-featured {
    margin-left: 3px;
    border: medium none;
    color: #ff951e;
    display: inline;
    font-size: 16px;
    height: auto;
    margin-right: 5px;

    position: static;
    vertical-align: baseline;
    width: auto;
}
.ap-questions-featured2 {
    margin-left: 3px;
    border: medium none;
    color: #666;
    display: inline;
    font-size: 16px;
    height: auto;
    margin-right: 5px;

    position: static;
    vertical-align: baseline;
    width: auto;
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
                <p>*รูปดาวสีเหลือง หมายถึงข้อความที่ยังไม่ได้อ่าน ,สีเทา คือข้อความที่ถูกเปิดอ่านแล้ว</p>
              </header>
              <div class="panel-body">




                <table class="table table-responsive-lg table-striped table-sm mb-0" >
                  <thead>
                    <tr>
                      <th>วันที่</th>
                      <th>ชื่อ-นามสกุล</th>
                      <th>อีเมล์</th>
                      <th>อายุ</th>
                      <th>เพศ</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
             @if($objs)
                @foreach($objs as $u)
                    <tr>
                      <td>
                        @if($u->status == null || $u->status == 0)
                        <i class="fa fa-star ap-questions-featured"></i>
                        @else
                        <i class="fa fa-star ap-questions-featured2"></i>
                        @endif
                         <?php echo DateThai($u->created_at); ?>
                      </td>
                      <td>


                        {{$u->name}} {{$u->surname}}</td>
                      <td>{{$u->email}}</td>
                      <td>{{$u->year_old}}</td>
                      <td>{{$u->radio}}</td>
                      <td>

                        <div class="btn-group flex-wrap">
  												<button type="button" class="mb-1 mt-1 mr-1 btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">จัดการ <span class="caret"></span></button>
  												<div class="dropdown-menu" role="menu">
  													<a class="dropdown-item modal-basic text-1" href="#modalBasic-{{$u->id}}">ดูข้อมูล</a>


                            <form  action="{{url('admin/contact/'.$u->id)}}" method="post" onsubmit="return(confirm('Do you want Delete'))">
                            <input type="hidden" name="_method" value="DELETE">
                             <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" title="ลบบทความ" class="dropdown-item text-1 text-danger"><i class="fa fa-times "></i> ลบ</button>
                            </form>

  												</div>
  											</div>


                  <div id="modalBasic-{{$u->id}}" class="modal-block mfp-hide">
										<section class="panel">
											<header class="panel-heading">
												<h2 class="panel-title">ข้อมุลของคุณ {{$u->name}} {{$u->surname}}</h2>
											</header>
											<div class="panel-body">
												<div class="modal-wrapper">
													<div class="modal-text">

                            <div class="table-responsive">
											<table class="table mb-none">

												<tbody>
													<tr>
                            <td>
                              <b>วันที่ส่ง :</b> <?php echo DateThai($u->created_at); ?>
                            </td>
                          </tr>
                          <tr>
                            <td><b>ชื่อ-นามสกุล :</b> {{$u->name}} {{$u->surname}}</td>
                            </tr>
                            <tr>
                            <td><b>อีเมล์ :</b> {{$u->email}}</td>
                            </tr>
                            <tr>
                            <td><b>อายุ :</b> {{$u->year_old}}</td>
                            </tr>
                            <tr>
                            <td><b>เพศ :</b> {{$u->radio}}</td>
													  </tr>
                            <tr>
                            <td><b>IP Address :</b> {{$u->ip_address}}</td>
													  </tr>
                            <tr>
                            <td><b>รายละเอียด :</b> {{$u->detail}}</td>
													  </tr>

												</tbody>
											</table>
										</div>

													</div>
												</div>
											</div>
											<footer class="panel-footer">
												<div class="row">
													<div class="col-md-12 text-right">
														<button class="btn btn-danger modal-dismiss" id="{{$u->id}}" onClick="reply_click(this.id)">ปิดหน้าต่าง</button>
													</div>
												</div>
											</footer>
										</section>
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


<script type="text/javascript">
function reply_click(clicked_id){


    $.ajax({
            type:'POST',
            url:'{{url('api/post_read')}}',
            headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}' },
            data: { "user_id" : clicked_id },
            success: function(data){
              if(data.data.success){


                $('.ap-questions-featured').addClass('ap-questions-featured2');

                $('.ap-questions-featured2').removeClass('ap-questions-featured');



              }
            }
        });
  }
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


@if ($message = Session::get('delete_envelope'))
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
