@extends('Represent.layouts.template')
@section('Represent.content')






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
              <div class="col-xs-12">

            <section class="panel">
              <header class="panel-heading">
                <div class="panel-actions">
                  <a href="#"  class="panel-action panel-action-toggle" data-panel-toggle></a>

                </div>

                <h2 class="panel-title">{{$header}}</h2>
              </header>
              <div class="panel-body">

                <a class="mb-xs mt-xs mr-xs modal-basic btn btn-success" href="#modalSuccess">เพิ่มข้อมูล</a>

                <div id="modalSuccess" class="modal-block modal-block-success mfp-hide">
                  <section class="panel">
                    <form  method="POST" action="{{ url('representatives/timeline') }}" enctype="multipart/form-data">
                    <header class="panel-heading">
                      <h2 class="panel-title">เพิ่มข้อมูล กำหนดการ ?</h2>
                    </header>
                    <div class="panel-body">

                                {{ csrf_field() }}

                                  <div class="panel-body" >




                                  <div class="form-group">
                                    <label>รายละเอียดของ กำหนดการ</label>
                                    <textarea class="form-control"  name="detail" rows="4"  placeholder="รายละเอียด.."></textarea>
                                  </div>

                                  <div class="form-group">
                                    <label>วันที่ของกำหนดการ</label>
                                    <div class="input-group">
                                      <span class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                      </span>
                                      <input type="text" name="day_start" data-plugin-datepicker class="datepicker form-control">
                                    </div>
                                  </div>

                                  




                                  </div>

                    </div>
                    <footer class="panel-footer">
                      <div class="row">
                        <div class="col-md-12 text-right">
                          <button class="btn btn-primary " type="submit">เพิ่มข้อมูล</button>
                          <button class="btn btn-default modal-dismiss">ยกเลิก</button>
                        </div>
                      </div>
                    </footer>
                    </form>
                  </section>
									</div>


                <br>
                <table class="table mb-none" >
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>รายละเอียด</th>
                      <th style="width:120px;">วันที่</th>


                      <th style="width:80px;">Actions</th>
                    </tr>
                  </thead>
                  <tbody>

                    @if($objs)
                @foreach($objs as $u)
                    <tr>
                      <td>{{$s}}</td>
                      <td>{{$u->detail}}</td>
                      <td>{{$u->day_start}}</td>

                      <td>
                        <a style="float:left; margin-right:8px;" title="แก้ไขหมวดหมู่" class="btn btn-primary btn-xs" href="{{url('representatives/timeline/'.$u->id.'/edit')}}" role="button"><i class="fa fa-cog "></i> </a>

                          <form  action="{{url('representatives/timeline/'.$u->id)}}" method="post" onsubmit="return(confirm('Do you want Delete'))">
                            <input type="hidden" name="_method" value="DELETE">
                             <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" title="ลบหมวดหมู่" class="btn btn-danger btn-xs"><i class="fa fa-times "></i></button>
                          </form>

                      </td>


                    </tr id="{{$s++}}">
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
