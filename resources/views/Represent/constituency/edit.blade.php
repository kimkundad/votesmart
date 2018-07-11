@extends('Represent.layouts.template')





@section('Represent.content')






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








                        <div class="tabs">

                          <div class="tab-content">

                            <div id="edit" class="tab-pane active">
                              <h4 class="col-md-12 ">แบ่งเขตเลือกตั้ง*</h4>

                              <br>
                              <form class="form-horizontal form-bordered" action="{{url('admin/del_constituency')}}" method="POST">
                                {{ csrf_field() }}
                                  <input type="hidden" class="form-control" name="id_pro" value="{{$objs->id}}">

                        @if($message)
                            @foreach($message as $u)

													<div class="form-group row">
														<label class="col-sm-4 control-label" style="padding-top: 0px; "><b>เขตเลือกตั้งที่ {{$u->con_id}}</b></label>

														<div class="col-sm-8">

                              @if($u->option)
                                  @foreach($u->option as $u1)

															<div class="checkbox-custom checkbox-success">
																<input type="checkbox" name="del_dis[]" value="{{$u1->id_del}}">
																<label for="checkboxExample3">{{$u1->name_dis}}</label>
															</div>

                              @endforeach
                           @endif

														</div>
													</div>


                          @endforeach
                       @endif




                          <div class="panel-footer">
                            <div class="row">
                              <div class="col-md-9 col-md-offset-3">
                                
                              </div>
                            </div>
                          </div>
												</form>

                              </div>
                              </div>
                              </div>



          						</div>























          						</div>




</section>
@stop



@section('scripts')
<script src="{{asset('/assets/javascripts/tables/examples.datatables.default.js')}}"></script>


@if ($message = Session::get('edit_success'))
<script type="text/javascript">

  var stack_topleft = {"dir1": "down", "dir2": "right", "push": "top"};
      var notice = new PNotify({
            title: 'ทำรายการสำเร็จ',
            text: 'ยินดีด้วย ได้ทำการแก้ไขข้อมูล สำเร็จเรียบร้อยแล้วค่ะ',
            type: 'success',
            addclass: 'stack-topright'
          });
</script>
@endif

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
            text: 'ยินดีด้วย ได้ทำการลบข้อมูล สำเร็จเรียบร้อยแล้วค่ะ',
            type: 'success',
            addclass: 'stack-topright'
          });
</script>
@endif




@stop('scripts')
