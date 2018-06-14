@extends('layouts.app')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" />
<link rel="stylesheet" href="{{url('autoComplete/auto-complete.css')}}">
@section('content')


<style>
input:-webkit-autofill {
    -webkit-box-shadow: 0 0 0 30px white inset;
}
.reps-map-search {
    margin-bottom: 0;
    padding: 0px 20px 10px 20px;
    z-index: 999999;
    display: block;

    position: relative;
}
.form-style-9 {
    background: transparent;
    padding: 0px;
    margin: 0px auto;
}
.form-style-9 ul {
    padding: 0;
    margin: 0;
    list-style: none;
}
.form-style-9 ul li {
    display: block;
    margin-bottom: 10px;
    min-height: 48px;
    text-align: left;
}
.form-style-9 ul li .fieldf-select {
    border-radius: 2px;
    background-color: #5EC8F2;
    height: 48px;
    width: 218px !important;
    color: #FFFFFF;
    font-family: 'Kanit', sans-serif;
    font-size: 14px;
    line-height: 21px;
    border: 0;
    margin-right: 10px;
    padding: 0 16px;
}
.form-style-9 ul li .fieldf-select2 {
    border-radius: 2px;
    background-color: #5EC8F2;
    height: 48px;
    width: 218px !important;
    color: #FFFFFF;
    font-family: 'Kanit', sans-serif;
    font-size: 14px;
    line-height: 21px;
    border: 0;
    margin-right: 10px;
    padding: 0 16px;
}
.form-style-9 ul li .field-style {
    width: 570px;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    padding: 0 16px;
    outline: none;
    border-radius: 2px;
    background-color: #FFFFFF;
    box-shadow: 0 2px 12px rgba(0, 0, 0, 0.06);
    border: 0;
    -webkit-transition: all 0.30s ease-in-out;
    -moz-transition: all 0.30s ease-in-out;
    -ms-transition: all 0.30s ease-in-out;
    -o-transition: all 0.30s ease-in-out;
    height: 48px;
    color: #9B9B9B;
    font-family: 'Prompt', sans-serif;
    font-size: 12px;
    line-height: 18px;
    text-shadow: 0 1px 2px rgba(35, 31, 32, 0.24);
}
.form-style-9 ul li input[type="button"], .form-style-9 ul li input[type="submit"] {
    background-color: transparent;
    border: 0;
    display: inline-block;
    cursor: pointer;
    color: #08B0ED;
    padding: 8px 18px;
    text-decoration: none;
    font-size: 18px;
    line-height: 18px;
    font-family: georgia, FontAwesome;
    height: 48px;
    margin-left: -57px;
}
.rectangle-copy-6 {
  height: 49px;
    width: 96px;
    border-radius: 2px;
    background-color: #FFFFFF;
    box-shadow: 0 2px 12px rgba(0, 0, 0, 0.06);
    padding: 14px 15px;
    float: right;
}
.rectangle-copy-6 a {
    color: #EEEEEE;
    font-size: 18px;
    line-height: 18px;
}
.rectangle-copy-6 a.btn-list {
    float: right !important;
}
.rectangle-copy-6 a.active {
    color: #08B0ED;
}
.candidate-box .candidate-image img {
    width: 100%;
    margin-bottom: 20px;
}
.candidate-box {
    border-radius: 2px;
    background-color: #FFFFFF;
    box-shadow: 0 2px 12px rgba(0, 0, 0, 0.06);
    padding: 25px;
    margin-bottom: 30px;
}
.img-circle {
    border-radius: 50%;
}
.candidate-box .candidate-info h3 {
    color: #0479BD;
    font-family: 'Kanit', sans-serif;
    font-size: 20px;
    font-weight: 500;
    line-height: 30px;
    text-align: center;
    text-shadow: 1px 1px 0 #F2F8FA;
    margin: 0;
}
.stylish-7{
  background-color: transparent;
    border: 0;
    display: inline-block;
    cursor: pointer;
    color: #08B0ED;
    padding: 8px 18px;
    text-decoration: none;
    font-size: 18px;
    line-height: 18px;
    font-family: georgia, FontAwesome;
    height: 48px;
    margin-left: -57px;
}
.fieldf-select2{
  display: block;

    padding: 0.6rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #fff;
    background-color: #5ec8f2;
    background-clip: padding-box;
    border: 1px solid #fff;
    border-radius: 0.25rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
.form-control{
    background-color: #fff;
}
.scroll-to-top {
    border: 1px solid #f0f0f0;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    /* transition: all 0.3s; */
    background: #ffffff;
    bottom: 15px;
    /* color: #FFF; */
    height: 9px;
    padding: 13px 18px 28px 0px;
    position: fixed;
    right: 10px;
    text-align: center;
    text-decoration: none;
    min-width: 49px;
    z-index: 1040;
}
</style>


<section class="bg-whites page-header-sub visible-sm visible-xs" id="about" style="padding: 60px 0 8px 0; z-index: 9998; position: fixed;">
  <div class="container">
    <div class="row">

      <form class=" search-form" id="form1" name="form1" method="POST" action="{{ url('reps_list2') }}" onsubmit="return false;">
          {{ csrf_field() }}
      <div class="col-5" style="float:left; padding-right: 4px;">

        <select name="cars" class="fieldf-select2  align-right" onchange="this.form.submit()" style="width: 100%;">
          <option value="1" >เขตกรุงเทพ</option>
          @if($objs_pro)
             @foreach($objs_pro as $pro)
            <option value="{{$pro->id_p}}" >ผู้สมัคร ส.ส. {{$pro->name_in_thai1}}</option>
            @endforeach
        @endif
        </select>

      </div>
      <div class="col-7" style="float:left; padding-left: 4px;">
        <div class="input-group" style="box-shadow: 0 2px 12px rgba(0, 0, 0, 0.06);s">
              <input id="hero-demo2" type="text"  name="field3" class="form-control" placeholder="ค้นหา" >
              <div class="input-group-btn" style="    padding: 5px;">
                  <button class="btn btn-default" type="submit" style="background: #fff; font-size: 18px;" onclick="eatFood();"><i class="fa fa-search"></i></button>
              </div>
          </div>
        </div>



      </form>


      <style>
      .scroll-to-top_1{
        .scroll-to-top {
    border: 1px solid #f0f0f0;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    /* transition: all 0.3s; */
    background: #ffffff;
    bottom: 15px;
    /* color: #FFF; */
    height: 9px;
    padding: 13px 18px 28px 0px;
    position: fixed;
    /* right: 10px; */
    text-align: center;
    text-decoration: none;
    min-width: 49px;
    z-index: 1040;
}

      }
      </style>

<div class="col-4 mx-auto">
<div class="rectangle-copy-6 scroll-to-top_1">
  <a href="{{url('representatives_all')}}" class="btn-list active"><i class="fa fa-map"></i></a>
  <a href="{{url('representatives_grid')}}" class=""><i class="fa fa-th-list"></i></a>
      </div>
</div>
      <!--
      <div class="reps-map-search" style="padding: 0px 20px 0px 20px;">
          <form class="form-style-9 pure-form" id="form1" name="form1" method="POST" action="{{ url('reps_list2') }}" onsubmit="return false;">
            {{ csrf_field() }}
              <ul>
                  <li style="margin-bottom: 5px;">
                      <select name="cars" class="fieldf-select2  align-right" style="width:73%" onchange="this.form.submit()">
                        @if($objs_pro)
                           @foreach($objs_pro as $pro)
                          <option value="{{$pro->id_p}}" >ผู้สมัคร ส.ส. {{$pro->name_in_thai1}}</option>
                          @endforeach
                      @endif
                      </select>
                      <div class="rectangle-copy-6" style="width: 24%; padding: 15px 10px; margin-right: 6px;    height: 47px;">
                          <a href="#" class=""><i class="fa fa-map"></i></a>
                          <a href="#" class="btn-list active"><i class="fa fa-th-list"></i></a>
                      </div>
                      <input id="hero-demo2" autofocus type="text"  name="field3" class="field-style" style="width: 98%;" placeholder="ค้นหาจาก แขวง , เขต หรือ ชื่อผู้แทน" />
                      <input type="submit" value="&#xf002;" onclick="eatFood();" class="stylish " />


                  </li>
              </ul>
              </form>
      </div>

    -->



    </div>
  </div>
</section>


<section class="bg-whites page-header-sub hidden-sm hidden-xs" id="about" style="padding: 90px 0 8px 0;  width: 100%; z-index: 9998; position: fixed;">
  <div class="container">
    <form class="" id="form2" name="form2" method="POST" action="{{ url('reps_list') }}" onsubmit="return false;">
      {{ csrf_field() }}
    <div class="row">



      <div class="col-md-3">
        <div class="form-group">
          <select name="cars" class="form-control" style="height: 49px; background-color: #5ec8f2;" onchange="this.form.submit()">
            @if($objs_pro)
               @foreach($objs_pro as $pro)
              <option value="{{$pro->id_p}}" >ผู้สมัคร ส.ส. {{$pro->name_in_thai1}}</option>
              @endforeach
          @endif
          </select>
        </div>
						</div>

            <div class="col-md-6" style="padding-right: 10px; padding-left: 0px;">
              <div class="form-group">

                <input type="text" class="form-control" id="hero-demo" name="field2" placeholder="ค้นหาจาก แขวง , เขต หรือ ชื่อผู้แทน" style="background-color: #FFFFFF; color:#666; box-shadow: 0 2px 12px rgba(0, 0, 0, 0.06); height: 49px;">
                <input type="submit" value="&#xf002;" onclick="eatFood2();" class="stylish-7 " style="position: absolute; right: 30px; top: 0px;" />
              </div>
						</div>

            <div class="col-md-2" style="padding-right: 25px; padding-left: 0px;">
              <div class="form-group">
                <select name="sort" class="form-control" style="height: 49px; color:#666;  background-color: #FFFFFF; box-shadow: 0 2px 12px rgba(0, 0, 0, 0.06); height: 49px;" onchange="this.form.submit()">
                  <option value="1" >เรียง ก - ฮ</option>
                  <option value="2" >เรียง ฮ - ก</option>
                </select>
              </div>
      						</div>


            <div class="col-md-1">
              <div class="rectangle-copy-6">
                <a href="{{url('representatives_all')}}" class=""><i class="fa fa-map"></i></a>
                <a href="{{url('representatives_grid')}}" class="btn-list active"><i class="fa fa-th-list"></i></a>
              </div>
      						</div>


    <!--  <div class="reps-map-search">
          <form class="form-style-9 pure-form" id="form1" name="form1" method="POST" action="{{ url('reps_list') }}" onsubmit="return false;">
            {{ csrf_field() }}
              <ul>
                  <li>
                      <select name="cars" class="fieldf-select " style="float:left">
                          <option value="volvo">ผู้สมัคร ส.ส. กรุงเทพฯ</option>
                          <option value="saab">ผู้สมัคร ส.ส. ขอนแก่น</option>
                          <option value="fiat">ผู้สมัคร ส.ส. สมุทรสาคร</option>
                          <option value="audi">ผู้สมัคร ส.ส. อยุธยา</option>
                      </select>
                      <div style="width:100%; float:left">
                      <input id="hero-demo" style="min-width: 570px;" autofocus type="text" name="field2" class="field-style" placeholder="ค้นหาจาก แขวง , เขต หรือ ชื่อผู้แทน" />
                      <input type="submit" value="&#xf002;" onclick="eatFood();" class="stylish " />
                      <div class="rectangle-copy-6">
                          <a href="#" class=""><i class="fa fa-map"></i></a>
                          <a href="#" class="btn-list active"><i class="fa fa-th-list"></i></a>
                      </div>
                    </div>

                  </li>
              </ul>
              </form>
      </div>-->
    </div>
      </form>
  </div>
</section>




<section id="services" style="background: #f2f8fa; padding: 125px 10px 10px 10px; ">

  <div class="container">
    <div class="row">




<div class="col-md-12">


  <div class="candidate-container text-center hidden-sm hidden-xs" style="margin-top:55px;">
      <div class="row">

        @if($objs)
           @foreach($objs as $u)
        <div class="col-md-3 col-sm-6">
          <a href="{{url('reps_result/'.$u->id)}}">
            <div class="candidate-box">
                <div class="candidate-image">
                    <img class="img-circle" src="{{url('assets/images/avatar/'.$u->avatar)}}" />
                </div>
                <div class="candidate-info">
                    <h3>{{$u->name}}</h3>
                    <p style="font-size: 13px;color: #666;">{{$u->sub_title}}</p>
                </div>
            </div>
          </a>
        </div>
        @endforeach
    @endif


      </div>
  </div>

<style>
ul.simple-user-list {
    list-style: none;
    padding: 0;
}
ul.simple-user-list li {
  border-bottom: 1px solid rgba(33, 37, 41, 0.1);
padding-bottom: 30px;
padding-top: 0px;
margin: 0px 0 20px;
}
ul.simple-user-list {
    list-style: none;
    padding: 0;
}
ul.simple-user-list li .image {

    float: left;
    margin: 0 10px 0 0;
}
.rounded {
    border-radius: 5px;
}
.img-circle {
    border-radius: 50%;
}
ul.simple-user-list li .title {
  color: #0479BD;
  font-family: 'Kanit', sans-serif;
  font-size: 20px;
  font-weight: 500;
  line-height: 30px;
  text-align: center;
  text-shadow: 1px 1px 0 #F2F8FA;
  margin: 0;
}
ul.simple-user-list li .message {
    display: block;
    font-size: 13px;
    color: #666;
}
.panel-heading + .panel-body {
    border-radius: 5px 5px 5px 5px;
}
.panel-body {
    background: #fdfdfd;
    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
    border-radius: 5px;
}
.panel-body {
    padding: 15px;
}
</style>

<div class="panel-body visible-sm visible-xs">
  <div class="content">
										<ul class="simple-user-list">
                      @if($objs)
                         @foreach($objs as $u)
											<li>
                        <a href="{{url('reps_result/'.$u->id)}}">
												<figure class="image rounded">
													<img src="{{url('assets/images/avatar/'.$u->avatar)}}" alt="{{$u->name}}" style="width: 60px;" class="img-circle">
												</figure>
												<span class="title">{{$u->name}}</span>
												<span class="message truncate">{{$u->sub_title}}</span>
                        </a>
											</li>

                      @endforeach
                  @endif


										</ul>


									</div>

                  </div>

</div>













    </div>
  </div>
</section>


@endsection

@section('scripts')
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script>
<script src="{{url('autoComplete/auto-complete.js')}}"></script>





<script>

function eatFood() {
document.getElementById('form1').submit();
}

function eatFood2() {
document.getElementById('form2').submit();
}


    var xhr;
    new autoComplete({
        selector: 'input[name="field2"]',
        minChars: 1,
        source: function(term, response){

            xhr = $.getJSON('{{secure_url('/search/data/')}}', { field2: term }, function(data){
              //secure_url
              response(data.data);
            });
        }
    });


</script>


<script>


    var xhr3;
    new autoComplete({
        selector: 'input[name="field3"]',
        minChars: 1,
        source: function(term, response){

            xhr3 = $.getJSON('{{secure_url('/search/data2/')}}', { field3: term }, function(data){
              //secure_url
              response(data.data);
            });
        }
    });


</script>



@stop('scripts')
