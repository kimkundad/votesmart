@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}">
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

.animate {
  transition: transform 0.3s ease-out;
}
.slider-wrap {

  position: absolute;

}
.slider {
  width: 100%;
  height: 100%;
  overflow: hidden;
}
.ms-touch.slider {
  overflow-x: scroll;
  overflow-y: hidden;

  -ms-overflow-style: none;
  /* Hides the scrollbar. */

  -ms-scroll-chaining: none;
  /* Prevents Metro from swiping to the next tab or app. */

  -ms-scroll-snap-type: mandatory;
  /* Forces a snap scroll behavior on your images. */

  -ms-scroll-snap-points-x: snapInterval(0%, 100%);
  /* Defines the y and x intervals to snap to when scrolling. */
}
.holder {
  width: 33.333%;
  height: 100%;
  float: left;
  height: 500px;
  position: relative;
  overflow: hidden;
}

.slide-wrapper {

  height: 100%;
  float: left;



}
.slide {
  height: 100%;

}
.slide .mask-content {

  z-index: 0;
  transform: translatex(-100px);

}
.slide:before {
  content: "";
  position: absolute;
  z-index: 1;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 40%;

}
</style>



@if (Auth::guest())



<div class="slider-wrap content_leena panel-content" style="position: fixed;">
<div class="slider" id="slider">
  <div class="holder">

  <div id="content-home1" class="content-home slide-wrapper">
    <div class="slide real-content" style="padding-top: 70px;">
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
            <div class="panel-fa panel-fa-right" style="color: #08c1f4; font-size: 65px; width: 80px;">
              <div class="btn-click btn-home" data-target="2">
                <i class="fa fa-angle-right"></i>
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

  <div id="content-home2" class="content-home slide-wrapper">
    <div class="slide real-content" style="padding-top: 70px;">


      <div class="mask-content">
        <!-- First Container -->
        <div class="welcome-section text-center">
          <div id="front-page" class="front-content">
            <div class="panel-fa panel-fa-left" style="color: #08c1f4; font-size: 65px; width: 80px;">
              <div class="btn-click btn-home" data-target="1">
                <i class="fa fa-angle-left" ></i>
              </div>
            </div>
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
</div>
</div>

@else





@endif










    </div>
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


<script>


$(document).ready(function () {
  $('#content-home1').show();




    $(".hometo1").click(function(){
        $(".content_leena").slideUp();
  });




  if (navigator.msMaxTouchPoints) {

  $('#slider').addClass('ms-touch');

  $('#slider').on('scroll', function() {
    $('.slide-image').css('transform','translate3d(-' + (100-$(this).scrollLeft()/6) + 'px,0,0)');
  });

} else {

  var slider = {

    el: {
      slider: $("#slider"),
      holder: $(".holder"),
      imgSlide: $(".slide-image")
    },

    slideWidth: $('#slider').width(),
    touchstartx: undefined,
    touchmovex: undefined,
    movex: undefined,
    index: 0,
    longTouch: undefined,

    init: function() {
      this.bindUIEvents();
    },

    bindUIEvents: function() {

      this.el.holder.on("touchstart", function(event) {
        slider.start(event);
      });

      this.el.holder.on("touchmove", function(event) {
        slider.move(event);
      });

      this.el.holder.on("touchend", function(event) {
        slider.end(event);
      });

    },

    start: function(event) {
      // Test for flick.
      this.longTouch = false;
      setTimeout(function() {
        window.slider.longTouch = true;
      }, 250);

      // Get the original touch position.
      this.touchstartx =  event.originalEvent.touches[0].pageX;

      // The movement gets all janky if there's a transition on the elements.
      $('.animate').removeClass('animate');
    },

    move: function(event) {
      // Continuously return touch position.
      this.touchmovex =  event.originalEvent.touches[0].pageX;
      // Calculate distance to translate holder.
      this.movex = this.index*this.slideWidth + (this.touchstartx - this.touchmovex);
      // Defines the speed the images should move at.
      var panx = 100-this.movex/6;
      if (this.movex < 600) { // Makes the holder stop moving when there is no more content.
        this.el.holder.css('transform','translate3d(-' + this.movex + 'px,0,0)');
      }
      if (panx < 100) { // Corrects an edge-case problem where the background image moves without the container moving.
        this.el.imgSlide.css('transform','translate3d(-' + panx + 'px,0,0)');
      }
    },

    end: function(event) {
      // Calculate the distance swiped.
      var absMove = Math.abs(this.index*this.slideWidth - this.movex);
      // Calculate the index. All other calculations are based on the index.
      if (absMove > this.slideWidth/2 || this.longTouch === false) {
        if (this.movex > this.index*this.slideWidth && this.index < 2) {
          this.index++;
        } else if (this.movex < this.index*this.slideWidth && this.index > 0) {
          this.index--;
        }
      }
      // Move and animate the elements.
      this.el.holder.addClass('animate').css('transform', 'translate3d(-' + this.index*this.slideWidth + 'px,0,0)');
      this.el.imgSlide.addClass('animate').css('transform', 'translate3d(-' + 100-this.index*50 + 'px,0,0)');

    }

  };

  slider.init();
}


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
