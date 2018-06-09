@extends('admin.layouts.template')





@section('admin.content')






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


                              <form  method="POST" action="{{url('admin/constituency/')}}" enctype="multipart/form-data">

                                          {{ csrf_field() }}

          											<h4 class="mb-xlg">{{$objs->name_in_thai}}</h4>
                                <input type="hidden" class="form-control" name="id_pro" value="{{$objs->id}}">
          											<fieldset>
                                  <div class="form-group">
          													<label class="col-md-3 control-label" for="profileFirstName">เลือกเขต*</label>
          													<div class="col-md-8">

                                      <select class="form-control mb-3" name="con_id">
                                        <?php
                                          $i = 33;
                                          for($j = 1; $j <= $i; $j++){
                                            echo "<option value=".$j.">เขตเลือกตั้งที่ ".$j."</option>";
                                          }
                                          ?>


            													</select>

          														</div>
          												</div>

<style>
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice {
    color: #555;
    background: #fff;
    border: 1px solid #ccc;
    border-radius: 4px;
    cursor: default;
    float: left;
    margin: 5px 0 0 6px;
    padding: 0 6px;
}
.select2-search-choice-close {
    display: block;
    width: 12px;
    height: 13px;
    position: absolute;
    right: 3px;
    top: 13px;
    font-size: 1px;
    outline: none;
    background: url(select2.png) right top no-repeat;
}
.select2-container-multi .select2-choices .select2-search-choice {
    padding: 6px 6px 6px 18px;

}
.select2-search-choice-close:after {
    content: 'x';
    font-size: 12px;
    color: #d2322d;
    padding: 0 4px;
    font-weight: bold;
}
</style>
                                  <div class="form-group">
          													<label class="col-md-3 control-label" for="profileFirstName">เลือกพื้นที่ของเขตุนั้นๆ*</label>
          													<div class="col-md-8">

                                      <select multiple data-plugin-selectTwo name="district[]" class="form-control populate">

            														<optgroup label="{{$objs->name_in_thai}}">
                                          @if($districts)
                                             @foreach($districts as $u)
            															<option value="{{$u->id_dd}}">{{$u->name_in_thai}}</option>
                                            @endforeach
                                         @endif

            														</optgroup>

            													</select>

          														</div>
          												</div>
                                  <br>







          											</fieldset>







          											<div class="panel-footer">
          												<div class="row">
          													<div class="col-md-9 col-md-offset-3">
          														<button type="submit" class="btn btn-primary">เพิ่มข้อมูล</button>
          														<button type="reset" class="btn btn-default">ยกเลิก</button>
          													</div>
          												</div>
          											</div>

          										</form>

          									</div>
          								</div>
          							</div>






                        <div class="tabs">

                          <div class="tab-content">

                            <div id="edit" class="tab-pane active">
                              <h4 class="col-md-12 ">แบ่งเขตเลือกตั้ง*</h4>
                              <p class="text-danger" style="    padding-left: 15px;">*Checkboxe เลือกเขตที่ต้องการจะลบออก</p>
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
                                <button type="submit" class="btn btn-primary">อัพเดทข้อมูล</button>
                                <button type="reset" class="btn btn-default">ยกเลิก</button>
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
