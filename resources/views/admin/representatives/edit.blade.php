@extends('admin.layouts.template')



@section('admin.stylesheet')

<link href="{{url('assets/croppie/croppie.css')}}" rel="stylesheet" type="text/css">
<meta name="csrf-token" content="{{ csrf_token() }}">
<style>
.portlet.light {
    border-radius: 4px!important;
}
.profile-userpic img {

    height: auto;

}
.croppie-container {
    padding: 0px 0px 30px 0px;
}
.entry:not(:first-of-type)
{
    margin-top: 10px;
}

.glyphicon
{
    font-size: 12px;
}
</style>
@stop('stylesheet')



@section('admin.content')






        <section role="main" class="content-body">

          <header class="page-header">
            <h2>{{$header}}</h2>

            <div class="right-wrapper pull-right">
              <ol class="breadcrumbs">
                <li>
                  <a href="{{url('representatives/dashboard')}}">
                    <i class="fa fa-home"></i>
                  </a>
                </li>

                <li><span>{{$header}}</span></li>
              </ol>

              <a class="sidebar-right-toggle" data-open="sidebar-right" ><i class="fa fa-chevron-left"></i></a>
            </div>
          </header>


          <!-- start: page -->



          <div class="row">
          							<div class="col-md-4">


                          <div class="tabs">

                            <div class="tab-content">

                              <div id="edit" class="tab-pane active">



                                <div class="form-group">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div id="upload-demo" style="max-width: 350px; "></div>
                                                            <form enctype="multipart/form-data">
                                                            <div>
                                                                <span class="btn default btn-file">
                                                                    <span class="btn btn-primary fileinput-new"> เลือกรูปภาพ </span>
                                                                    <span class="btn btn-warning fileinput-exists"> เปลี่ยน </span>

                                                                    <input type="file" id="upload" name="image" accept="image/*" > </span>
                                                                <a href="javascript:;" class="btn btn-danger fileinput-exists" data-dismiss="fileinput"> ลบ </a>
                                                            </div>
                                                             </form>
                                                        </div>
                                                        <div class="clearfix margin-top-10">
                                                            <span class="label label-danger">NOTE! </span>
                                                            <span> ภาพขนาดย่อของรูปภาพที่แนบมาได้รับการสนับสนุนในรูปแบบล่าสุด Firefox, Chrome, Opera, Safari และ Internet Explorer 10 เท่านั้น </span>

                                                        </div>
                                                    </div>
                                                    <div class="margin-top-10">

                                                      <button type="submit" class="btn btn-success upload-result">
                                                          บันทึกรูปภาพ
                                                      </button>
                                                        <a href="javascript:;" class="btn btn-default"> ยกเลิก </a>
                                                    </div>


                              </div>
                            </div>
                          </div>


          							</div>







                        <div class="col-md-8">


                          <div class="tabs">

                            <div class="tab-content">

                              <div id="edit" class="tab-pane active">
                                  <h2 class="panel-title">ข้อมูลส่วนตัว ผู้สมัคร ส.ส. บัญชีรายชื่อ</h2>
                                  <br>
                                  <form  method="POST" action="{{ $url }}">
                                            {{ method_field($method) }}
                                            {{ csrf_field() }}

                                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} mb-lg" style="margin-bottom: 12px !important;">
                                                <label>ชื่อ - นามสกุล</label>

                                                <div class="input-group input-group-icon">
                                                    <input id="name" type="text" class="form-control" name="name" value="{{old('name', $objs->name)}}" required autofocus>

                                                    @if ($errors->has('name'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} mb-lg" style="margin-bottom: 12px !important;">
                                                <label>อีเมล</label>

                                                <div class="input-group input-group-icon">
                                                    <input id="email" type="text" class="form-control" name="email" value="{{old('email', $objs->email)}}" readonly>

                                                    @if ($errors->has('email'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }} mb-lg" style="margin-bottom: 12px !important;">
                                                <label>เบอร์โทรศัพท์</label>

                                                <div class="input-group input-group-icon">
                                                    <input id="phone" type="number" class="form-control" name="phone" value="{{old('phone', $objs->phone)}}" required>

                                                    @if ($errors->has('phone'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('phone') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>


                                            <div class="form-group{{ $errors->has('fb') ? ' has-error' : '' }} mb-lg" style="margin-bottom: 12px !important;">
                                                <label>facebook</label>


                                                  <input type="text" class="form-control" name="fb" value="{{old('fb', $objs->fb)}}" placeholder="( facebook url )">
                                                    @if ($errors->has('fb'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('fb') }}</strong>
                                                        </span>
                                                    @endif

                                            </div>



                                            <div class="form-group{{ $errors->has('tw') ? ' has-error' : '' }} mb-lg" style="margin-bottom: 12px !important;">
                                                <label>twitter</label>


                                                  <input type="text" class="form-control" name="tw" value="{{old('tw', $objs->tw)}}" placeholder="( twitter url )">
                                                    @if ($errors->has('tw'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('tw') }}</strong>
                                                        </span>
                                                    @endif

                                            </div>



                                            <div class="form-group{{ $errors->has('ig') ? ' has-error' : '' }} mb-lg" style="margin-bottom: 12px !important;">
                                                <label>instagram</label>


                                                  <input type="text" class="form-control" name="ig" value="{{old('ig', $objs->ig)}}" placeholder="( instagram url )">
                                                    @if ($errors->has('ig'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('ig') }}</strong>
                                                        </span>
                                                    @endif

                                            </div>


                                            <div class="form-group{{ $errors->has('line_id') ? ' has-error' : '' }} mb-lg" style="margin-bottom: 12px !important;">
                                                <label>Line ID</label>


                                                  <input type="text" class="form-control" name="line_id" value="{{old('line_id', $objs->line_id)}}" placeholder="( Line ID )">
                                                    @if ($errors->has('line_id'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('line_id') }}</strong>
                                                        </span>
                                                    @endif

                                            </div>



                                            <div class="form-group{{ $errors->has('sub_title') ? ' has-error' : '' }} mb-lg" style="margin-bottom: 12px !important;">
                                                <label>ตำแหน่ง</label>


                                                  <input type="text" class="form-control" name="sub_title" value="{{old('sub_title', $objs->sub_title)}}" placeholder="( ผู้สมัคร ส.ส. บัญชีรายชื่อ )">
                                                    @if ($errors->has('sub_title'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('sub_title') }}</strong>
                                                        </span>
                                                    @endif

                                            </div>


                                            <div class="form-group">
                                                <label class="col-md-12 control-label" for="textareaAutosize">เขตพิ้นที่ ส.ส.</label>
                                                <div class="col-sm-4">
                                                    <select data-plugin-selecttwo id="province" name="province_id" class="form-control " required="">
                                                        <option value="">-- เลือกจังหวัด --</option>

                                                        @foreach($provinces as $dataPro)
                                                        <option value="{{$dataPro->id}}" @if($objs->province_id == $dataPro->id)
                        selected="selected"
                        @endif>{{$dataPro->name_in_thai}}</option>
                                                        @endforeach
                                                </select>
                                                </div>


                                                <div class="col-sm-4">
                                                    <select data-plugin-selecttwo id="amphoe" name="amphoe_id" class="form-control " required="">
                                                        @if($objs->amphur_id != null)
                                                        <option value="{{$objs->amphur_id}}">{{$objs->name_in_thai_d}}</option>
                                                        @endif

                                                        <option value="">-- เลือกอำเภอ --</option>

                                                </select>
                                                </div>

                                                <div class="col-sm-4">
                                                    <select data-plugin-selecttwo id="district" name="district_id" class="form-control " required="">
                                                      @if($objs->district_id != null)
                                                      <option value="{{$objs->district_id}}">{{$objs->name_in_thai_s}}</option>
                                                      @endif
                                                        <option value="">-- เลือกตำบล --</option>

                                                </select>
                                                </div>



                                                </div>








                                            <div class="form-group{{ $errors->has('bio') ? ' has-error' : '' }} mb-lg" style="margin-bottom: 12px !important;">
                                                <label>คำแนะนำ</label>


                                                  <textarea class="form-control" name="bio" placeholder="( อดีตรัฐมนตรีกระทรวงศึกษาธิการ, รัฐมนตรีว่าการกระทรวงธรรมการ (พ.ศ. 2475 - พ.ศ. 2485))" rows="4"  id="textareaAutosize" data-plugin-textarea-autosize >{{old('bio', $objs->bio)}}</textarea>

                                                    @if ($errors->has('bio'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('bio') }}</strong>
                                                        </span>
                                                    @endif

                                            </div>



                                            <div class="form-group">

                                                  <div class="col-sm-12">
                                                    <div id="map_canvas" style="width:100%; border:0; height:316px;" frameborder="0">
                                                    </div>
                                                  <br>
                                                  </div>
                                                  <label for="name" class="col-sm-3 control-label">Location <span class="text-danger">*</span></label>
                                                  <div class="col-sm-4">
                                                      <input type="text" name="lat" id="lat" size="10" value="{{$objs->lat}}" class="form-control" required>
                                                  </div>
                                                  <div class="col-sm-4">
                                                      <input type="text" name="lng" id="lng" size="10" value="{{$objs->lng}}" class="form-control" required>
                                                  </div>
                                                  </div>










                               <legend class="section"></legend>
                                <div class="text-center">
                                <button type="submit" class="btn btn-primary" onclick="clicksound.playclip()"><i class="fa fa-save"></i> อัพเดทข้อมูล</button>
                                <button type="reset" class="btn btn-default" onclick="showhide('#show','#add');"><i class="fa fa-eraser"></i> ยกเลิก</button>
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
<script src="{{asset('/assets/vendor/ios7-switch/ios7-switch.js')}}"></script>
<script src="{{asset('/assets/vendor/autosize/autosize.js')}}"></script>
<script src="{{url('assets/croppie/croppie.js')}}" type="text/javascript"></script>


<script type="text/javascript">
  //secure_url
      $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).on('change','#province',function(){
            $.ajax({
                'type':'POST',
                'url':'{{url('amphoe/')}}',
                'cache':false,
                'data':{province:jQuery(this).val()},
                'success':function(html){
                    jQuery("#amphoe").html(html);
                }
            });
            return false;
        });
         $(document).on('change','#amphoe',function(){
            $.ajax({
                'type':'POST',
                'url':'{{url('district/')}}',
                'cache':false,
                'data':{amphoe:jQuery(this).val()},
                'success':function(html){
                    jQuery("#district").html(html);
                }
            });
            return false;
        });

</script>

</body>




<script type="text/javascript">




$(document).on('click', '.btn-add', function(e)
  {
      e.preventDefault();

      var controlForm = $('.controls .ssl:first'),
          currentEntry = $(this).parents('.entry:first'),
          newEntry = $(currentEntry.clone()).appendTo(controlForm);

      newEntry.find('input').val('');
      controlForm.find('.entry:not(:last) .btn-add')
          .removeClass('btn-add').addClass('btn-remove')
          .removeClass('btn-success').addClass('btn-danger')
          .html('<span class="glyphicon glyphicon-minus"></span>');
  }).on('click', '.btn-remove', function(e)
  {
  $(this).parents('.entry:first').remove();

  e.preventDefault();
  return false;
});


$('.my-image').croppie();
$.ajaxSetup({
headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});

$uploadCrop = $('#upload-demo').croppie({
    url: '{{url('./assets/images/avatar/'.Auth::user()->avatar)}}',
    enableExif: true,
    viewport: {
        width: 250,
        height: 250,
        type: 'circle'
    },
    boundary: {
        width: 300,
        height: 300
    }
});

$('#upload').on('change', function () {

	var reader = new FileReader();
    reader.onload = function (e) {
    	$uploadCrop.croppie('bind', {
    		url: e.target.result
    	}).then(function(){
    		console.log('jQuery bind complete');
    	});
    }
    reader.readAsDataURL(this.files[0]);
});




$('.upload-result').on('click', function (ev) {

	$uploadCrop.croppie('result', {
		type: 'canvas',
		size: 'viewport'
	}).then(function (resp) {
		$.ajax({
			url: "{{url('image-crop')}}",
			type: "POST",
			data: {"image":resp},
			success: function (data) {
				//swal("Success!", "Change avatar image success!", "success");


        var stack_topleft = {"dir1": "down", "dir2": "right", "push": "top"};
            var notice = new PNotify({
                  title: 'ทำรายการสำเร็จ',
                  text: 'ยินดีด้วย ได้ทำการแก้ไขข้อมูล สำเร็จเรียบร้อยแล้วค่ะ',
                  type: 'success',
                  addclass: 'stack-topright'
                });


			}
		});
	});
});


</script>



<script type="text/javascript" src='https://maps.google.com/maps/api/js?key=AIzaSyA89Rb8Kz1ArY3ks6sSvz2cNrn66CHKDiA&libraries=places&sensor=false'></script>
<script type="text/javascript">
      var map;
      var geocoder;
      var mapOptions = { center: new google.maps.LatLng({{$objs->lat ? : '13.7621523'}}, {{$objs->lng ? : '100.4914945'}}), zoom: 14,
        mapTypeId: google.maps.MapTypeId.ROADMAP };

      function initialize() {
var myOptions = {
                center: new google.maps.LatLng(13.7211075, 100.5904873 ),
                zoom: 14,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            geocoder = new google.maps.Geocoder();
            var map = new google.maps.Map(document.getElementById("map_canvas"),
            myOptions);


            var myLatlng = new google.maps.LatLng({{$objs->lat ? : '13.7621523'}}, {{$objs->lng ? : '100.4914945'}});
            var myOptions = {
                zoom: 14,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
                }
             map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
             var marker = new google.maps.Marker({
                 position: myLatlng,
                 map: map
            });


            google.maps.event.addListener(map, 'click', function(event) {
                placeMarker(event.latLng);
            });

            var marker;
            function placeMarker(location) {
                if(marker){ //on vérifie si le marqueur existe
                    marker.setPosition(location); //on change sa position
                }else{
                    marker = new google.maps.Marker({ //on créé le marqueur
                        position: location,
                        map: map
                    });
                }
                document.getElementById('lat').value=location.lat();
                document.getElementById('lng').value=location.lng();
                getAddress(location);
            }










      function getAddress(latLng) {
        geocoder.geocode( {'latLng': latLng},
          function(results, status) {
            if(status == google.maps.GeocoderStatus.OK) {
              if(results[0]) {
                document.getElementById("address").value = results[0].formatted_address;
              }
              else {
                document.getElementById("address").value = "No results";
              }
            }
            else {
              document.getElementById("address").value = status;
            }
          });
        }
      }
      google.maps.event.addDomListener(window, 'load', initialize);
</script>


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


@if ($message = Session::get('add_about_success'))
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
