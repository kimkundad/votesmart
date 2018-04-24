@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="{{url('swiper-4.2.2/dist/css/swiper.css')}}" rel="stylesheet">
@section('content')





<section class="bg-whites " id="about" style="padding: 90px 0 8px 0;">
  <div class="container">
    <div class="row">
      <div class="col-md-3 text-center">
        <a class="quiz-title" style="color:#0479bd;">จะเลือกอะไรได้?</a>
        <br><br>
      </div>

      <div class="col-md-6 text-center hidden-sm hidden-xs">
        <p class="text-muted" style="font-size:14px;">มาดูกันว่าแต่ละคนได้เลือกเรื่องอะไร ถ้าต้องมาบริหารประเทศ <br>หรือเลือกเข้าร่วมด้วย Facebook เพื่อบอกว่าคุณจะเลือกอะไร? </p>
      </div>

      <div class="col-md-6 text-center visible-sm visible-xs">
        <p class="text-muted" style="font-size:11px;">มาดูกันว่าแต่ละคนได้เลือกเรื่องอะไร ถ้าต้องมาบริหารประเทศ <br>หรือเลือกเข้าร่วมด้วย Facebook เพื่อบอกว่าคุณจะเลือกอะไร? </p>
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




<section id="services" style="background: #f2f8fa; padding: 1.5rem 0;">

  <div class="container">
    <div class="row">

      @if($objs)
         @foreach($objs as $u => $j)


      <div class="col-6 col-md-3 text-center" style="padding-right: 6px; padding-left: 6px;">
        <a data-toggle="modal" data-target="#myModal-{{$j->id}}" href="#">
        <div class="parent-chart">
          <canvas id="user-{{$j->id}}" style="width: 150px; height: 86px;"></canvas>
          <div class="overlay-chart">

            @if($j->provider == 'email')
            <img class="img-in-chart" src="{{url('assets/images/avatar/'.$j->avatar)}}">

            @else

            <img class="img-in-chart" src="//{{$j->avatar}}&access_token=EAACGpXHuvGkBABN7vIs8c5azBUrZBnwKwW0BbkF3kQSbCfK4W0Guwgv6ZCaqOsq5adhZB07zZA25BMZCOYwulLDoHAcFeNtGLA63rx6D6BG0wtPxywRaBjn4Afkr4tHwQTHC7mGvH1RFAxZB9ysqpcb9wsmYvzd5ZAcQKWjfO9MzZBBanKrISGz4">

            @endif



          </div>
          <div class="user-name">
            <p style="margin-bottom: 0px; font-size:9px;">{{$j->name}}</p>
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
              <div class="parent-chart" style="box-shadow: 0 2px 12px rgba(0, 0, 0, 0);">
                <canvas id="users-{{$j->id}}" style="width: 150px; height: 86px;"></canvas>
                <div class="overlay-chart">

                  @if($j->provider == 'email')
                  <img class="img-in-chart-in" src="{{url('assets/images/avatar/'.$j->avatar)}}">

                  @else

                  <img class="img-in-chart-in" src="//{{$j->avatar}}&access_token=EAACGpXHuvGkBABN7vIs8c5azBUrZBnwKwW0BbkF3kQSbCfK4W0Guwgv6ZCaqOsq5adhZB07zZA25BMZCOYwulLDoHAcFeNtGLA63rx6D6BG0wtPxywRaBjn4Afkr4tHwQTHC7mGvH1RFAxZB9ysqpcb9wsmYvzd5ZAcQKWjfO9MzZBBanKrISGz4">

                  @endif




                </div>

              </div>

              <h5 class="text-center" style="color: #0479bd; font-weight: 700;">{{$j->name}}</h5>
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


    <div class="panel-content-set" style="top: 0;  position: fixed;     margin-right: -15px; margin-left: -15px;">
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
                <a class="scroll-down btn hometo1" style="    color: #08c1f4;">
                  <i class="fa fa-angle-double-down"></i>
                  <span>เลื่อนลง</span>
                </a>
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
  height: 40px;
  line-height: 40px;

  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14);
  vertical-align: middle;
  text-decoration: none;
  text-align: center;
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
        top: -1040%;
    transform: translateY(-50%);
    height: 100%;
    width: 0px;
    list-style: none;
    text-align: right;
}

.zoom-menu li {

  display: inline-block;
  margin-right: 10px;
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




<div class="toggle toggle-primary toggle-sm" >
  <div class="toggle active zoom">
    <label id="zoomBtn" class="zoom-fab zoom-btn-large"
    style="border-radius: 5px 5px 5px 5px; padding: 10px; text-align: left; box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);">
    <i class="fa fa-info-circle"></i> หมวดหมู่ <i class="fa fa-angle-up" style="float: right;"></i></label>
    <div class="toggle-content" >

      <ul class="zoom-menu" style="">
        <li><a class="zoom-fab zoom-btn-sm  scale-transition " style="background: #fff;"><i class="fa fa-user"></i> คมนาคม</a></li>
        <li><a class="zoom-fab zoom-btn-sm  scale-transition " style="background: #fff;"><i class="fa fa-book"></i></a></li>
        <li><a class="zoom-fab zoom-btn-sm  scale-transition " style="background: #fff;"><i class="fa fa-dashboard"></i></a></li>
        <li><a class="zoom-fab zoom-btn-sm  scale-transition " style="background: #fff;"><i class="fa fa-edit"></i></a></li>
        <li><a class="zoom-fab zoom-btn-sm  scale-transition " style="background: #fff;"><i class="fa fa-bell"></i></a></li>
      </ul>

    </div>
  </div>

</div>


@endsection

@section('scripts')
<script src="{{url('front/js/Chart.bundle.js?v1')}}"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.5.0/velocity.min.js"></script>
<script type="text/javascript">


$(document).ready(function () {

  $('#zoomBtn').click(function() {
    $('.zoom-btn-sm').toggleClass('scale-out');
    if (!$('.zoom-card').hasClass('scale-out')) {
      $('.zoom-card').toggleClass('scale-out');
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
