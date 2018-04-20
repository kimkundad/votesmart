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
      <div class="modal fade" id="myModal-{{$j->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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


@endsection

@section('scripts')
<script src="{{url('front/js/Chart.bundle.js?v1')}}"></script>
<script type="text/javascript">

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
