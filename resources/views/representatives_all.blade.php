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
.form-style-9 ul li .fieldf-select2 {
    border-radius: 2px;
    background-color: #5EC8F2;
    height: 48px;
    width: 74%;
    color: #FFFFFF;
    font-family: 'Kanit', sans-serif;
    font-size: 14px;
    line-height: 21px;
    border: 0;
    margin-right: 0px;
    padding: 0 16px;
}
.rectangle-copy-5 {
    height: 49px;
    width: 23%;
    border-radius: 2px;
    background-color: #FFFFFF;
    box-shadow: 0 2px 12px rgba(0, 0, 0, 0.06);
    padding: 15px 10px;
    float: right;
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
@media (min-width: 1200px){
  .mask-content {
    padding-top: 100px;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.9);
    width: 100%;
  }
  .modal-open .modal {
    overflow-x: hidden;
    overflow-y: auto;
    background: rgba(0,0,0,0.7);
  }

  #front-page h3{
    font-weight: 600;
    margin-bottom:40px;
  }
  .text-asking{
    font-size:16px;
    font-weight: 500;
  }
  ul.navbar-nav.ml-auto{
    float:none;
    margin:auto;
    //margin-left: 30% !important;
  }
  #navbarResponsive{
    position: relative;
  }
  li.nav-item.hidden-sm.hidden-xs{
    position: absolute;
    right: 0;
  }
  .swiper-button-prev.swiper-button-disabled{
    opacity:0;
  }
  .quiz-title{
    padding:0;
    font-size:24px;
  }
  .btn-primary{
    float:right;
  }
  .btn-primary:hover{
    background-color: #5EC8F2 !important;
    box-shadow: 0 6px 12px rgba(0,0,0,0.12) !important;
  }
  .btn-primary:focus,
  .btn-primary:active{
    background-color: #0479BD !important;
    box-shadow: 0 3px 6px rgba(0,0,0,0.12) !important;
  }
  .btn-asa:hover{
    color:  #5EC8F2 !important;
    background: #FFFFFF;
    border: 1px solid #5EC8F2;
  }
  .btn-asa:focus,
  .btn-asa:active{
    color:  #0479BD !important;
    background: #F5F5F5;
    border: 1px solid #0479BD !important;
  }
  .parent-chart{
    border-radius: 8px;
  }
  .parent-chart:hover{
    background-color: #fafafa;
    box-shadow: 0 8px 12px rgba(0, 0, 0, 0.12);
  }
  .panel-content-set {
    width: 100%;
  }
  .real-content{
    max-width: 100%;
  }
  .modal.show .modal-dialog .modal-content1{
    border:0 !important;
    box-shadow: 0 12px 12px rgba(0, 0, 0, 0.06);
    border-radius:8px !important;
  }
  .zoom-menu{
    top: -1500% !important;
    border-radius:20px !important;
  }
  .zoom-menu li{
    border-bottom: none !important;
  }
  .zoom-menu li a{
    height: 25px;
  }
  .zoom-menu i{
    width: 10px !important;
    height: 10px !important;
  }
  .zoom-menu  .fa-user:before{
    content:none;
  }
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
          <select name="cars" class="form-control" style="height: 49px;     background-color: #5ec8f2;" onchange="this.form.submit()">
            @if($objs_pro)
               @foreach($objs_pro as $pro)
              <option value="{{$pro->id_p}}">ผู้สมัคร ส.ส. {{$pro->name_in_thai1}}</option>
              @endforeach
          @endif
          </select>
        </div>
						</div>

            <div class="col-md-8" style="padding-right: 30px; padding-left: 0px;">
              <div class="form-group">

                <input type="text" class="form-control" id="hero-demo" name="field2" placeholder="ค้นหาจาก แขวง , เขต หรือ ชื่อผู้แทน" style="background-color: #FFFFFF; box-shadow: 0 2px 12px rgba(0, 0, 0, 0.06); height: 49px;">
                <input type="submit" value="&#xf002;" onclick="eatFood2();" class="stylish-7 " style="position: absolute; right: 30px; top: 0px;" />
              </div>
						</div>


            <div class="col-md-1">
              <div class="rectangle-copy-6">
                <a href="{{url('representatives_all')}}" class="active"><i class="fa fa-map"></i></a>
                <a href="{{url('representatives_grid')}}" class="btn-list "><i class="fa fa-th-list"></i></a>
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




<section id="services" class="representatives_all" style="background: #f2f8fa; height: 100%;">

  <div class="" style="height: 100%;>
    <div class="row" style="height: 100%;>


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
    .gmnoprint{
      width: 80px;
      height: 80px;
    }
    .leaflet-popup-content p {
    margin: 5px 0px;
}
      </style>

<div class="col-md-12" style="height: 100%;">

<div id="map" style="height: 100%;"></div>
</div>













    </div>
  </div>
</section>


@endsection

@section('scripts')
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script>
<script src="{{url('autoComplete/auto-complete.js')}}"></script>


<!--
<script>
  var map;

  function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
      zoom: 17,
      center: new google.maps.LatLng(13.7464779, 100.5325729),
      mapTypeId: 'roadmap'
    });

    var iconBase = '{{url('assets/images/avatar/')}}';
    var icons = {

      parking: {
        icon: {
          url: '{{url('assets/images/avatar/1483556517.png')}}',
          scaledSize: new google.maps.Size(50, 50)
        },

      },
      library: {
        icon: {
          url: '{{url('assets/images/avatar/1483537975.png')}}',
          scaledSize: new google.maps.Size(50, 50)
        },

      },
      info: {
        icon: iconBase + 'info-i_maps.png'
      }

    };

    var shadowImage = new google.maps.MarkerImage(
    'http://votesmart.me/front/img/pin-rep.svg',
        	      new google.maps.Size(80, 80),
        	      new google.maps.Point(80,80),
        	      new google.maps.Point(80, 32)
);

    var features = [{
      position: new google.maps.LatLng(13.7464779, 100.5325729),
      type: 'parking',
      content: "<div style='text-align: center;'><img src='//graph.facebook.com/1556099071134652/picture?width=100&height=100'></div><div class='candidate-info'><h3>Landon Black</h3><p>ผู้สมัคร ส.ส เขต 1</p></div>"
    }, {
      position: new google.maps.LatLng(13.747056, 100.532612),
      type: 'library'
    }, {
      position: new google.maps.LatLng(40.713664, -74.007819),
      type: 'info'
    }];





    function addInfoWindow(marker, message) {

            var infoWindow = new google.maps.InfoWindow({
                content: message
            });

            google.maps.event.addListener(marker, 'click', function () {
                infoWindow.open(map, marker);
            });
        }





    // Create markers.
    features.forEach(function(feature) {
    /*  var marker = new google.maps.Marker({
        position: feature.position,
        icon: icons[feature.type].icon,
        map: map
      }); */

    //  var iconBase = '{{url('front/img/')}}';
      var marker = new google.maps.Marker({
      position: feature.position,
      map: map,
      title: feature.content,
      icon: icons[feature.type].icon,
      shadow: shadowImage,
      animation: google.maps.Animation.DROP
    });




      marker.addListener('click', function() {
      // infowindow.open(map, marker);
      console.log(marker)

      addInfoWindow(marker, marker.title)

      });



    });





  }

</script>-->
<!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvkk7wNQcIYXZ7S8XNG8cG-elq0QE2v3k&callback=initMap">  -->


</script>


<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.44.2/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.44.2/mapbox-gl.css' rel='stylesheet' />
<script>

function eatFood() {
document.getElementById('form1').submit();
}

function eatFood2() {
document.getElementById('form2').submit();
}


	var map = L.map('map').setView([13.7464779, 100.5325729], 10);

/*	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	}).addTo(map); */

  L.tileLayer('https://api.mapbox.com/styles/v1/kimkundad/cjg7yspo916gv2rrpcww4g6kk/tiles/256/{z}/{x}/{y}@2x?access_token=pk.eyJ1Ijoia2lta3VuZGFkIiwiYSI6ImNqZnMxNXlyYjBneG4yeHA2ODE0c2IxbXIifQ.89YSTeu4fE1KaNtWYXa3KQ', {
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
    maxZoom: 11,
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1Ijoia2lta3VuZGFkIiwiYSI6ImNqZnMxNXlyYjBneG4yeHA2ODE0c2IxbXIifQ.89YSTeu4fE1KaNtWYXa3KQ'
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
        L.marker([{{$u->lat}}, {{$u->lng}}], {icon: greenIcon{{$u->id}}}).bindPopup('<div style="text-align: center; margin-bottom: 5px;"><a href="{{url('reps_result/'.$u->id)}}"><img src="{{url("assets/images/avatar/".$u->avatar)}}" style="width:80px"></a></div><div class="candidate-info text-center"><a href="{{url('reps_result/'.$u->id)}}"><h3 style="font-size: 1.2rem;">{{$u->name}}</h3></a><p style="margin: 5px 0px;">{{$u->sub_title}}</p></div>').addTo(map);
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
