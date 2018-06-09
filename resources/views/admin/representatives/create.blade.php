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

  <div class="col-md-2 col-lg-2">
  </div>

              <div class="col-md-8 col-lg-8">

            <section class="panel">


              <div class="panel-body">


                @if (count($errors) > 0)
                    <br>
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif



                    <form class="form-horizontal" action="{{$url}}" method="post" enctype="multipart/form-data">
                      {{ method_field($method) }}
											{{ csrf_field() }}

											<h4 class="mb-xlg">ใส่ข้อมูลสภาผู้แทนราษฎร</h4>

											<fieldset>
                        <div class="form-group">
													<label class="col-md-3 control-label" for="profileFirstName">Username*</label>
													<div class="col-md-8">
														<input type="text" class="form-control" name="name" value="{{ old('name') }}" id="profileFirstName">

													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileFirstName">ชื่อจริง</label>
													<div class="col-md-8">
														<input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" id="profileFirstName">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileLastName">นามสกกุล</label>
													<div class="col-md-8">
														<input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" id="profileLastName">
													</div>
												</div>
                        <div class="form-group">
													<label class="col-md-3 control-label" for="profileCompany">Email*</label>
													<div class="col-md-8">
														<input type="text" class="form-control" name="email" value="{{ old('email') }}" id="profileCompany" >
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileCompany">เบอร์โทร.</label>
													<div class="col-md-8">
														<input type="number" class="form-control" name="phone" value="{{ old('phone') }}" id="profileCompany" >
													</div>
												</div>

											</fieldset>


											<hr class="dotted tall">
											<h4 class="mb-xlg">Password</h4>
											<fieldset class="mb-xl">
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileNewPassword">Password*</label>
													<div class="col-md-8">
														<input type="password" class="form-control" name="password" placeholder="ใส่พาสเวิร์ด 6 ตัว"  value="{{ old('password') }}">
													</div>
												</div>
                        <div class="form-group">
													<label class="col-md-3 control-label" for="profileNewPassword">Confirm Password*</label>
													<div class="col-md-8">
														<input type="password" class="form-control" name="password_confirmation" placeholder="ใส่พาสเวิร์ด 6 ตัว"  value="{{ old('password_confirmation') }}">
													</div>
												</div>
											</fieldset>




											<div class="panel-footer">
												<div class="row">
													<div class="col-md-9 col-md-offset-3">
														<button type="submit" class="btn btn-primary">Submit</button>
														<button type="reset" class="btn btn-default">Reset</button>
													</div>
												</div>
											</div>

										</form>




              </div>
            </section>

              </div>

        </div>
</section>
@stop



@section('scripts')
<script src="{{asset('/assets/javascripts/tables/examples.datatables.default.js')}}"></script>






@if ($message = Session::get('success'))
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
