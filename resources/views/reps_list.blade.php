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
</style>


<section class="bg-whites " id="about" style="padding: 90px 0 8px 0;">
  <div class="container">
    <div class="row">
      <div class="reps-map-search">
        <form class="form-style-9 pure-form" id="form1" name="form1" method="POST" action="{{ url('reps_list') }}" onsubmit="return false;">
          {{ csrf_field() }}
            <ul>
                <li>
                    <select name="cars" class="fieldf-select  align-right">
                        <option value="volvo">ผู้สมัคร ส.ส. กรุงเทพฯ</option>
                        <option value="saab">ผู้สมัคร ส.ส. ขอนแก่น</option>
                        <option value="fiat">ผู้สมัคร ส.ส. สมุทรสาคร</option>
                        <option value="audi">ผู้สมัคร ส.ส. อยุธยา</option>
                    </select>
                    <input id="hero-demo" autofocus type="text" name="field2" class="field-style" placeholder="ค้นหาจาก แขวง , เขต หรือ ชื่อผู้แทน" />
                    <input type="submit" value="&#xf002;" onclick="eatFood();" class="stylish " />

                    <div class="rectangle-copy-6">
                        <a href="#" class=""><i class="fa fa-map"></i></a>
                        <a href="#" class="btn-list active"><i class="fa fa-th-list"></i></a>
                    </div>
                </li>
            </ul>
            </form>
      </div>
    </div>
  </div>
</section>




<section id="services" style="background: #f2f8fa; padding: 0px 10px 10px 10px; ">

  <div class="container">
    <div class="row">




<div class="col-md-12">
  <br>
  <h4 style="color: #0591c3;">ผลการค้นหาของคุณ " {{$search}} "</h4>
 <br>

  <div class="candidate-container text-center">
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
                    <p style="font-size: 13px;">{{$u->sub_title}}</p>
                </div>
            </div>
          </a>
        </div>
        @endforeach
    @endif


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

    var xhr;
    new autoComplete({
        selector: 'input[name="field2"]',
        minChars: 1,
        source: function(term, response){

            xhr = $.getJSON('{{url('/search/data/')}}', { field2: term }, function(data){

              response(data.data);
            });
        }
    });


</script>



@stop('scripts')
