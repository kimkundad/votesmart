@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="{{url('swiper-4.2.2/dist/css/swiper.css')}}" rel="stylesheet">
@section('content')

<style>
  .zoom-menu li {
    border:none !important;
  }
  .img-in-chart2,.img-in-chart-in2 {
    max-width: 90px;
    border-radius: 50%;
    margin-top:-30px;
  }

.swiper-wrapper #content-home1 {
  width:100% !important;
}

  .the-join {
    font-size:24px;
    font-family:Kanit;
  }

 .welcome-footer .btn{
      border-radius: 24px;
      background-color: #08B0ED;
      border: none;
      box-shadow: 0 6px 12px rgba(0,0,0,0.12);
      color: #FFFFFF;
      font-family: Kanit;
      font-size: 24px;
      line-height: 40px;
      text-align: center;
      text-shadow: 0 1px 2px rgba(35,31,32,0.24);
      height: 48px;
      width: 232px;
    }
    .welcome-footer .btn:hover{
      background-color: #5EC8F2;
      box-shadow: 0 6px 12px rgba(0,0,0,0.12);
    }
    .welcome-footer .btn:focus{
      background-color: #0479BD;
      box-shadow: 0 3px 6px rgba(0,0,0,0.12);
    }
    .welcome-footer .btn .fa{
      color:#fff;
    }
    .welcome-footer .btn span{
      color:#ffffff;
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


</style>

        @if (Auth::guest())
<section class="bg-whites " id="about" style="padding: 90px 0 8px 0;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3 text-center">
        <a class="quiz-title" style="color:#0479bd;">จะเลือกอะไรได้?</a>
        <br><br>
      </div>

      <div class="col-md-6 hidden-sm hidden-xs" style="text-align: center;">
        <p class="text-muted" style="font-size:14px;">มาดูกันว่าแต่ละคนได้เลือกเรื่องอะไร ถ้าต้องมาบริหารประเทศ <br>หรือเลือกเข้าร่วมด้วย Facebook เพื่อบอกว่าคุณจะเลือกอะไร? </p>
      </div>

      <div class="col-md-6 text-center visible-sm visible-xs">
        <p class="text-muted" style="font-size:14px;">มาดูกันว่าแต่ละคนได้เลือกเรื่องอะไร ถ้าต้องมาบริหารประเทศ <br>หรือเลือกเข้าร่วมด้วย Facebook เพื่อบอกว่าคุณจะเลือกอะไร? </p>
      </div>


      <div class="col-md-3 text-center">


        @if (Auth::guest())
        <a class="btn btn-primary btn-xl js-scroll-trigger" href="{{url('/redirect')}}" style="padding: 0.9rem 2rem;font-weight: 500;"><i class="fa fa-facebook-official"></i> เลือกเรื่องสำคัญของคุณ</a>
        @else
        <a class="btn btn-primary btn-xl js-scroll-trigger" href="{{url('/quiz_choices')}}" style="padding: 0.9rem 2rem;font-weight: 500;"><i class="fa fa-facebook-official"></i> เลือกเรื่องสำคัญของคุณ</a>
        @endif

        <br>
      </div>
    </div>
  </div>
</section>

        @endif

<div class="toggle toggle-primary toggle-sm" style="position: absolute;z-index:9">
  <div class="toggle active zoom">
    <label id="zoomBtn" class="zoom-fab zoom-btn-large"
    style="border-radius: 5px 5px 5px 5px; padding: 10px; text-align: left; box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);">
    <i class="fa fa-info-circle"></i> หมวดหมู่ <i class="fa fa-angle-up" style="float: right;"></i></label>
    <div class="toggle-content" >

      <ul class="zoom-menu visible-sm visible-xs" style="">

      <!--  <li>
          <a class="zoom-fab zoom-btn-sm  scale-transition " style="background: #fff; border-radius: 5px 5px 0px 0px;">
          <i class="fa fa-user" style="background-color: #F44336; color:#F44336;"></i><span > เศรษฐกิจ</span>
          </a>
        </li> -->

        @if(isset($cat))
            @foreach($cat as $u)

        <li >
          <a class="zoom-fab zoom-btn-sm  scale-transition scale-out" style="background: #fff;">
            <i class="fa fa-user" style="background-color: {{$u->color_bg}}; color:{{$u->color_bg}};"></i> {{$u->name_cat}}
          </a>
        </li>


          @endforeach
        @endif



      <!--  <li>
          <a class="zoom-fab zoom-btn-sm  scale-transition " style="background: #fff; border-radius: 0px 0px 5px 5px;">
            <i class="fa fa-user" style="background-color: #9c27b0; color:#9c27b0;"></i> คมนาคม
          </a>
        </li> -->

      </ul>



      <ul class="zoom-menu hidden-sm hidden-xs" style="">

      <!--  <li>
          <a class="zoom-fab zoom-btn-sm  scale-transition " style="background: #fff; border-radius: 5px 5px 0px 0px;">
          <i class="fa fa-user" style="background-color: #F44336; color:#F44336;"></i><span > เศรษฐกิจ</span>
          </a>
        </li> -->

        @if(isset($cat))
            @foreach($cat as $u)

        <li >
          <a class="zoom-fab zoom-btn-sm  scale-transition " style="background: #fff;">
            <i class="fa fa-user" style="background-color: {{$u->color_bg}}; color:{{$u->color_bg}};"></i> {{$u->name_cat}}
          </a>
        </li>


          @endforeach
        @endif



      <!--  <li>
          <a class="zoom-fab zoom-btn-sm  scale-transition " style="background: #fff; border-radius: 0px 0px 5px 5px;">
            <i class="fa fa-user" style="background-color: #9c27b0; color:#9c27b0;"></i> คมนาคม
          </a>
        </li> -->

      </ul>

    </div>
  </div>

</div>

<style>
    .the-margin-top {
      margin-top:70px;
    }
    .the-choose-quiz {
      margin-bottom: 0px; font-size:22px; color:#fff;
    }

.choose-quiz {
  min-height: 228px;
}



    @media (max-width: 480px) {
      .parent-chart {
        margin: auto auto 15px;
      }
      .choose-quiz {
  min-height: 200px;
}
      .user-name {
        margin-top: -10px;
      }
      .parent-chart {
      //padding: 10px 0 10px 0;
      height: 200px;
    }
    .parent-chart canvas {

       margin-top: -15px;
    }
      .col-md-2 {
        padding: 0px 10px !important;
      }
      .the-margin-top {
      margin-top:50px;
    }
    .the-choose-quiz {
      font-size:18px !important;
    }


    }
  </style>

    @if (!Auth::guest())



       @endif


<section id="services" class="the-margin-top" style="background: #f2f8fa; padding: 1.5rem 0;">

  <div class="container-fluid">
    <div class="row">

      @if($objs)
      <div class="infinite-scroll">
         @foreach($objs as $u => $j)

         <!-- /* col-md-3 col-lg-2 */ -->
      <div class="col-6  text-center" >
        <a data-toggle="modal" data-target="#myModal-{{$j->id}}" href="#">
        <div class="parent-chart">
          <canvas id="user-{{$j->id}}" ></canvas>
          <div class="overlay-chart">

            @if($j->provider == 'email')
            <img class="img-in-chart2" src="{{url('assets/images/avatar/'.$j->avatar)}}">

            @else

            <img class="img-in-chart2" src="//{{$j->avatar}}&access_token=EAACGpXHuvGkBABN7vIs8c5azBUrZBnwKwW0BbkF3kQSbCfK4W0Guwgv6ZCaqOsq5adhZB07zZA25BMZCOYwulLDoHAcFeNtGLA63rx6D6BG0wtPxywRaBjn4Afkr4tHwQTHC7mGvH1RFAxZB9ysqpcb9wsmYvzd5ZAcQKWjfO9MzZBBanKrISGz4">

            @endif



          </div>
          <div class="user-name">
            <p style="margin-bottom: 0px; font-size:12px; color:#9e9e9e;">{{$j->name}}</p>
          </div>
        </div>
      </a>

      <!-- Modal -->
      <div class="modal fade" id="myModal-{{$j->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="z-index: 10000;">
        <div class="modal-dialog" role="document" style="border: 1px solid rgba(33, 37, 41, 0.1);">
          <div class="modal-content1">

            <div class="modal-body text-center">


              <a data-dismiss="modal" aria-label="Close" class="view-more"><span aria-hidden="true" class="plus-sign"><i class="fa fa-remove"></i></span></a>

              <br><br>
              <div class="parent-chart" style="box-shadow: 0 2px 12px rgba(0, 0, 0, 0); border-radius: 8px;">
                <canvas id="users-{{$j->id}}" style="width: 150px; height: 86px;"></canvas>
                <div class="overlay-chart">

                  @if($j->provider == 'email')
                  <img class="img-in-chart-in2" src="{{url('assets/images/avatar/'.$j->avatar)}}">

                  @else

                  <img class="img-in-chart-in2" src="//{{$j->avatar}}&access_token=EAACGpXHuvGkBABN7vIs8c5azBUrZBnwKwW0BbkF3kQSbCfK4W0Guwgv6ZCaqOsq5adhZB07zZA25BMZCOYwulLDoHAcFeNtGLA63rx6D6BG0wtPxywRaBjn4Afkr4tHwQTHC7mGvH1RFAxZB9ysqpcb9wsmYvzd5ZAcQKWjfO9MzZBBanKrISGz4">

                  @endif




                </div>

              </div>

              <h5 class="text-center" style="color: #0479bd; font-weight: 700; font-size:20px;">{{$j->name}}</h5>
              <p class="p-pop">เลือกประเด็นสำคัญดังนี้</p>

              @if(isset($j->labels))
                  @foreach($j->labels as $u)



                  <div class="education">
                      <p>
                          <span style="background-color: {{$u->color_bg}};">1</span>{{$u->name_cat}}</p>
                      <ul>
                        @if(isset($u->options))
                            @foreach($u->options as $u1)
                          <li style="background: {{$u->color_bg}};">{{$u1->name_quiz}}</li>

                          @endforeach
                        @endif

                      </ul>
                  </div>



                  @endforeach
              @endif




            </div>

          </div>
        </div>
      </div>





      </div>


      @endforeach
      {{ $objs->links() }}

    </div>
      @endif





<style>




.swiper-slide {
  text-align: center;
  font-size: 18px;


  /* Center slide text vertically */
  display: -webkit-box;
  display: -ms-flexbox;
  display: -webkit-flex;

  -webkit-box-pack: center;
  -ms-flex-pack: center;

  -webkit-box-align: center;
  -ms-flex-align: center;
  -webkit-align-items: center;
  align-items: center;
}

.swiper-container {
  width: 100%;
  height: 100%;
}
</style>














    </div>

















    @if (Auth::guest())


    <div class="panel-content-set" style="top: 0;  position: fixed;     margin-right: -15px; margin-left: -15px; z-index: 3;">
    <div class=" content_leena panel-content" >
      <div class="swiper-container">
      <div class="swiper-wrapper">

      <div id="content-home1" class="content-home swiper-slide">
        <div class="real-content" style="padding-top: 70px;">
          <div class="mask-content">
            <!-- First Container -->
            <div class="welcome-section text-center">
              <div id="front-page" class="front-content">
                <div class="panel-text-asking">
                  <h3 class="margin">จะเลือกอะไรได้?</h3>
                  <div class="text-asking">
                    <p>ถ้าต้องเป็นนายกรัฐมนตรี คุณจะเลือกอะไร?<br>
                    การศึกษา, เศรษฐกิจ, สิทธิมนุษยชน <br> หรืออีกหลายประเด็นอื่นๆ<br>
                    ประเทศไทยควรเดินไปทางไหน<br> อะไรที่เราควรให้ความสำคัญ?</p>
                  </div>
                </div>

              </div>
              <div class="welcome-footer">



                @if (Auth::guest())

                <a class="scroll-down btn the-join" href="{{url('/redirect')}}" style="    color: #08c1f4;">
                 <!-- <i class="fa fa-angle-double-down"></i> -->
                  <span>เข้าร่วม</span>
                </a>


                @else
                <a class="scroll-down btn the-join" href="{{url('/quiz_choices')}}" style="    color: #08c1f4;">
                 <!--  <i class="fa fa-angle-double-down"></i> -->
                  <span>เข้าร่วม</span>
                </a>

                @endif


              </div>
              <div class="padding-bottom-footer"></div>
            </div>
          </div>
        </div>
      </div>

      <div id="content-home2" class="content-home swiper-slide">
        <div class="real-content" style="padding-top: 70px;">


          <div class="mask-content">
            <!-- First Container -->
            <div class="welcome-section text-center">
              <div id="front-page" class="front-content">

                <div class="panel-text-asking">
                  <h3 class="margin">จะเลือกใครดี??</h3>
                  <div class="text-asking">
                    <p>ทำความรู้จักผู้แทนของคุณให้มากขึ้น<br>
                    และบอกพวกเขาว่าอะไรที่สำคัญสำหรับคุณ</p>

                  </div>
                </div>
              </div>
              <div class="welcome-footer">
                <a class="scroll-down btn hometo2" href="{{url('representatives_all')}}" style="    color: #08c1f4;">
                  <i class="fa fa-angle-double-down"></i>
                  <span>เลื่อนลง</span>
                </a>
              </div>
              <div class="padding-bottom-footer"></div>
            </div>
          </div>
        </div>
      </div>




      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      </div>
    </div>
    </div>

    @else





    @endif





  </div>
</section>




<style>
.zoom {
  position: fixed;
  bottom: 45px;
  right: 24px;
  height: 20px;
}

.zoom-fab {
  display: inline-block;
  width: 140px;
  height: 22px;
  line-height: 22px;

  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14);
  vertical-align: middle;
  text-decoration: none;
  text-align: left;
  padding-left: 8px;
  transition: 0.2s ease-out;

  cursor: pointer;
  color: #FFF;
}



.zoom-btn-large {
    line-height: 20px;
    background: #fff;
    color: #666;
    width: 140px;
    height: 35px;
}

.zoom-btn-person { background-color: #F44336; }

.zoom-btn-person:hover { background-color: #e57373; }

.zoom-btn-doc { background-color: #ffeb3b; }

.zoom-btn-doc:hover { background-color: #fff176; }

.zoom-btn-tangram { background-color: #4CAF50; }

.zoom-btn-tangram:hover { background-color: #81c784; }

.zoom-btn-report { background-color: #2196F3; }

.zoom-btn-report:hover { background-color: #64b5f6; }

.zoom-btn-feedback { background-color: #9c27b0; }

.zoom-btn-feedback:hover { background-color: #ba68c8; }

.zoom-menu {
    position: absolute;
    right: 142px;
    left: auto;
        top: -1380%;
    //transform: translateY(-50%);
    height: 100%;
    width: 0px;
    list-style: none;
    text-align: right;
}

.zoom-menu li {

  display: inline-block;
  margin-right: 10px;
}

.zoom-menu i {
  width: 16px;
  height: 16px;

  border-radius: 50%;
  padding: 3px;
}

.zoom-card {
  position: absolute;
  right: 150px;
  bottom: 70px;
  transition: box-shadow 0.25s;
  padding: 24px;
  border-radius: 2px;
  background-color: #009688;

  color: #FFF;
}

.zoom-card ul {
  -webkit-padding-start: 0;
  list-style: none;
  text-align: left;
}

.zoom-menu li{
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.scale-out{
  display: none;
}

.scale-transition { transition: transform 0.3s cubic-bezier(0.53, 0.01, 0.36, 1.63) !important; }

.scale-transition.scale-out {
  transform: scale(0);
  transition: transform 0.2s !important;
}

.scale-transition.scale-in { transform: scale(1); }


</style>

<!--<div class="zoom">
  <a class="zoom-fab zoom-btn-large" id="zoomBtn"><i class="fa fa-bars"></i></a>
  <ul class="zoom-menu">
    <li><a class="zoom-fab zoom-btn-sm zoom-btn-person scale-transition "><i class="fa fa-user"></i> คมนาคม</a></li>
    <li><a class="zoom-fab zoom-btn-sm zoom-btn-doc scale-transition "><i class="fa fa-book"></i></a></li>
    <li><a class="zoom-fab zoom-btn-sm zoom-btn-tangram scale-transition "><i class="fa fa-dashboard"></i></a></li>
    <li><a class="zoom-fab zoom-btn-sm zoom-btn-report scale-transition "><i class="fa fa-edit"></i></a></li>
    <li><a class="zoom-fab zoom-btn-sm zoom-btn-feedback scale-transition "><i class="fa fa-bell"></i></a></li>
  </ul>

</div> -->







@endsection

@section('scripts')
<script src="{{url('front/js/Chart.bundle.js?v2')}}"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.5.0/velocity.min.js"></script>
<script type="text/javascript">

  var the_add_quiz = '<div class="col-6 col-md-3 col-lg-2 text-center">\
    <a href="{{url('/quiz_choices')}}">\
        <div class="parent-chart choose-quiz" style="background:#08B0ED;">\
            <div class="user-name" style="">\
                <p style="height: 100px;">\
                    <span class="plus" style="color:#fff;font-size: 60px;font-weight: 100;    line-height: 160px;">+</span>\
                </p>\
                <p  class="the-choose-quiz" style="">เลือกเรื่องสำคัญสำหรับคุณ</p>\
            </div>\
        </div>\
    </a>\
</div>';

$(document).ready(function () {

  $("#services .row").prepend(the_add_quiz);

  $('#zoomBtn').click(function() {

    $('.zoom-btn-sm').toggleClass('scale-out');
    if (!$('.zoom-card').hasClass('scale-out')) {
      $('.zoom-card').toggleClass('scale-out');
      $('.toggle-content').addClass('hidden');
    }
  });

  $('.zoom-btn-sm').click(function() {
    var btn = $(this);
    var card = $('.zoom-card');

    if ($('.zoom-card').hasClass('scale-out')) {
      $('.zoom-card').toggleClass('scale-out');
    }
    if (btn.hasClass('zoom-btn-person')) {
      card.css('background-color', '#d32f2f');
    } else if (btn.hasClass('zoom-btn-doc')) {
      card.css('background-color', '#fbc02d');
    } else if (btn.hasClass('zoom-btn-tangram')) {
      card.css('background-color', '#388e3c');
    } else if (btn.hasClass('zoom-btn-report')) {
      card.css('background-color', '#1976d2');
    } else {
      card.css('background-color', '#7b1fa2');
    }
  });

  });

//document.getElementById("doughnutChart").style.height = '128px';

@if($objs)
   @foreach($objs as $u => $j)

  var ctxD = document.getElementById("user-{{$j->id}}").getContext('2d');
  var myLineChart = new Chart(ctxD, {
    type: 'doughnut',
    data: {
      labels: [
        @if(isset($u->labels))
            @foreach($u->labels as $u)
        "{{$u->name_cat}}",
        @endforeach
      @endif
      ],
      datasets: [{
        data: [
          @if(isset($j->labels))
              @foreach($j->labels as $u)
          {{$u->sort_result}},
          @endforeach
        @endif
           ],
        backgroundColor: [
          @if(isset($j->labels))
              @foreach($j->labels as $u)
          "{{$u->color_bg}}",
          @endforeach
        @endif
        ]
      }]
    },
    options: {
      legend: {
        display: false
      },
      responsive: true
    }
  });

  var ctxDs = document.getElementById("users-{{$j->id}}").getContext('2d');
  var myLineChart = new Chart(ctxDs, {
    type: 'doughnut',
    data: {
      labels: [
        @if(isset($u->labels))
            @foreach($u->labels as $u)
        "{{$u->name_cat}}",
        @endforeach
      @endif
      ],
      datasets: [{
        data: [
          @if(isset($j->labels))
              @foreach($j->labels as $u)
          {{$u->sort_result}},
          @endforeach
        @endif
           ],
        backgroundColor: [
          @if(isset($j->labels))
              @foreach($j->labels as $u)
          "{{$u->color_bg}}",
          @endforeach
        @endif
        ]
      }]
    },
    options: {
      legend: {
        display: false
      },
      responsive: true
    }
  });






  @endforeach
  @endif


</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.4.1/jquery.jscroll.min.js"></script>
<script type="text/javascript">
        $('ul.pagination').hide();
        $(function() {
            $('.infinite-scroll').jscroll({
                autoTrigger: true,
                loadingHtml: '<img class="center-block" src="/images/loading.gif" alt="Loading..." />', // MAKE SURE THAT YOU PUT THE CORRECT IMG PATH
                padding: 0,
                nextSelector: '.pagination li.active + li a',
                contentSelector: 'div.infinite-scroll',
                callback: function() {
                    $('ul.pagination').remove();
                }
            });
        });
    </script>


<script src="{{url('swiper-4.2.2/dist/js/swiper.js')}}"></script>
<script>
  var swiper = new Swiper('.swiper-container', {
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
</script>
<script>


$(document).ready(function () {
  $('#content-home1').show();




    $(".hometo1").click(function(){
        $(".content_leena").slideUp();
  });


});


  /*$(document).ready(function () {
    $('#content-home1').show();


    $(document).on('click', '.btn-home', (el) => {
  //  $('.content_leena').on('scroll', function() {

      const dataTarget = $(el.currentTarget).data('target');
      console.log('dataTarget', dataTarget);

      if (dataTarget === 1) {
        $('#content-home1').show();
        $('#content-home2').hide();
        $('#btn_home1').parent().addClass('active');
        //a-head

        $('#btn_home2').parent().removeClass('active');
      } else {
        $('#content-home2').show();
        $('#content-home1').hide();
        $('#btn_home2').parent().addClass('active');
        $('#btn_home1').parent().removeClass('active');
      }
    });


    $(document).on('click', '.hometo1', (el) => {


      $('.content_leena').hide();

    });




  }); */




</script>





@stop('scripts')
