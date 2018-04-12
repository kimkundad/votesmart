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
  /*  z-index: 999999; */
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


      <style>
      #map {
        height: 100%;
        position: relative;
        width: 100%;
      }
      .leaflet-marker-icon{
        border-radius: 24px;
      }
      .candidate-info h3 {
          color: #0479BD;
          font-family: 'Kanit', sans-serif;
          font-size: 16px;
          font-weight: 500;
          line-height: 30px;
          text-align: center;
          text-shadow: 1px 1px 0 #F2F8FA;
          margin: 0;
          text-align: center;
      }
    .candidate-info p {
    color: #4A4A4A;
    font-family: 'Kanit', sans-serif;
    font-size: 10px;
    font-weight: 300;
    line-height: 0px;
    text-align: center;
    }
      </style>

<div class="col-md-12">

<div id="map"></div>
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
	var map = L.map('map').setView([13.7464779, 100.5325729], 10);

	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	}).addTo(map);

	var LeafIcon = L.Icon.extend({
		options: {
			shadowUrl: '{{url('front/img/pin-rep.svg')}}',
			iconSize:     [40, 40],
			shadowSize:   [80, 108],
			iconAnchor:   [-16, 40],
			shadowAnchor: [4, 62],
			popupAnchor:  [35, -56]
		}
	});

     @if(isset($objs))
        @foreach($objs as $u)

        var  greenIcon{{$u->id}} = new LeafIcon({iconUrl: '{{url("assets/images/avatar/".$u->avatar)}}'});
        L.marker([{{$u->lat}}, {{$u->lng}}], {icon: greenIcon{{$u->id}}}).bindPopup('<div style="text-align: center;"><a href="{{url('reps_result/'.$u->id)}}"><img src="{{url("assets/images/avatar/".$u->avatar)}}" style="width:80px"></a></div><div class="candidate-info"><a href="{{url('reps_result/'.$u->id)}}"><h3>{{$u->name}}</h3></a><p>{{$u->sub_title}}</p></div>').addTo(map);
        @endforeach
    @endif

/*	var greenIcon = new LeafIcon({iconUrl: '//graph.facebook.com/1556099071134652/picture?width=80&height=80'}),
		redIcon = new LeafIcon({iconUrl: '//graph.facebook.com/10156358433350625/picture?width=80&height=80'}),
		orangeIcon = new LeafIcon({iconUrl: '//graph.facebook.com/1556099071134652/picture?width=80&height=80'});

	L.marker([13.7464779, 100.5325729], {icon: greenIcon}).bindPopup('<div style="text-align: center;"><img src="//graph.facebook.com/1556099071134652/picture?width=100&height=100"></div><div class="candidate-info"><h3>Landon Black</h3><p>ผู้สมัคร ส.ส เขต 1</p></div>').addTo(map);
	L.marker([13.751565, 100.5204733], {icon: redIcon}).bindPopup('<div style="text-align: center;"><img src="//graph.facebook.com/1556099071134652/picture?width=100&height=100"></div><div class="candidate-info"><h3>Landon Black</h3><p>ผู้สมัคร ส.ส เขต 1</p></div>').addTo(map);
	L.marker([13.7559235, 100.5535695], {icon: orangeIcon}).bindPopup('<div style="text-align: center;"><img src="//graph.facebook.com/1556099071134652/picture?width=100&height=100"></div><div class="candidate-info"><h3>Landon Black</h3><p>ผู้สมัคร ส.ส เขต 1</p></div>').addTo(map);
*/
</script>


<script>


    var xhr;
    new autoComplete({
        selector: 'input[name="field2"]',
        minChars: 1,
        source: function(term, response){

            xhr = $.getJSON('{{url('/search/data/')}}', { field2: term }, function(data){
              //secure_url
              response(data.data);
            });
        }
    });


</script>



@stop('scripts')
