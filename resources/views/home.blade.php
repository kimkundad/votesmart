@extends('layouts.app')

@section('content')





<section class="bg-whites " id="about" style="padding: 65px 0 8px 0;">
  <div class="container">
    <div class="row">
      <div class="col-md-3 text-center">
        <a class="quiz-title" style="color:#0479bd;">จะเลือกอะไรได้?</a>
        <br><br>
      </div>
      <div class="col-md-6 text-center">
        <p class="text-muted" style="font-size:11px;">มาดูกันว่าแต่ละคนได้เลือกเรื่องอะไร ถ้าต้องมาบริหารประเทศ <br>หรือเลือกเข้าร่วมด้วย Facebook เพื่อบอกว่าคุณจะเลือกอะไร? </p>
      </div>
      <div class="col-md-3 text-center">
        @if (Auth::guest())
        <a class="btn btn-primary btn-xl js-scroll-trigger" href="{{url('/redirect')}}" style="padding: 0.9rem 2rem;font-weight: 500;"><i class="fa fa-facebook-official"></i> เลือกเรื่องสำคัญของคุณ</a>
        @else
        <a href="" style="color: #f05f40; font-weight: 700; font-size: 12px;"><img src="//{{Auth::user()->avatar}}" alt="{{Auth::user()->name}}" style="height:32px; vertical-align: middle; margin-right:7px;" class="img-circle"> {{ Auth::user()->name }}</a>
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
          <img class="img-in-chart" src="//{{$j->avatar}}">
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
                <img class="img-in-chart-in" src="//{{$j->avatar}}">
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
@stop('scripts')