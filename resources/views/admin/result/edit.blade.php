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




                              <form  method="POST" action="{{$url}}" enctype="multipart/form-data">
                                          {{ method_field($method) }}
                                          {{ csrf_field() }}

          											<h4 class="mb-xlg">แก้ไข Quiz</h4>

          											<fieldset>
                                  <div class="form-group">
          													<label class="col-md-3 control-label" for="profileFirstName">เลือกหมวดหมู่*</label>
          													<div class="col-md-8">

                                      <select  name="category_id"  class="form-control " required="">
                                              <option value="">-- เลือกหมวดหมู่ Result --</option>

                                              @if(isset($cat))
                                              @foreach($cat as $u)
                                                  <option value="{{$u->id}}" @if( $objs->category_id == $u->id)
                              selected='selected'
                              @endif

                              >{{$u->name_cat}}</option>
                                              @endforeach
                                            @endif

                                      </select>
          														</div>
          												</div>

                                  <div class="form-group">
              					             <label class="col-md-3 control-label">รูป result</label>
              												<div class="col-md-8">
              													<img src="{{url('assets/result/'.$objs->result_name)}}" class="img-responsive img-thumbnail">
              												</div>
              											</div>

                                  <div class="form-group">
                                      <label class="col-md-3 control-label" for="exampleInputEmail1">รูปหลักรถเช่า*</label>
                                      <div class="col-md-8">
                                      <div class="fileupload fileupload-new" data-provides="fileupload">
                    														<div class="input-append">
                    															<div class="uneditable-input">
                    																<i class="fa fa-file fileupload-exists"></i>
                    																<span class="fileupload-preview"></span>
                    															</div>
                    															<span class="btn btn-default btn-file">
                    																<span class="fileupload-exists">Change</span>
                    																<span class="fileupload-new">Select file</span>
                    																<input type="file" name="image">
                    															</span>
                    															<a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                    														</div>
                    													</div>
                                              </div>
                                    </div>




                                  <br>





          											</fieldset>







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
            text: 'ยินดีด้วย ได้ทำการแก้ไข Result สำเร็จเรียบร้อยแล้วค่ะ',
            type: 'success',
            addclass: 'stack-topright'
          });
</script>
@endif




@stop('scripts')
