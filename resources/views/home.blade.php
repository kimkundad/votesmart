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
        <p class="text-muted" style="font-size:11px;">มาดูกันว่าแต่ละคนได้เลือกเรื่องอะไร ถ้าต้องมาบริหารประเทศ <br>หรือเลือกเข้าร่วมด้วย Facebook เพื่อบอกว่าคุณจะเลือกอะไร?</p>
      </div>
      <div class="col-md-3 text-center">
        @if (Auth::guest())
        <a class="btn btn-primary btn-xl js-scroll-trigger" href="{{url('/redirect')}}" style="padding: 0.9rem 2rem;font-weight: 500;"><i class="fa fa-facebook-official"></i> เลือกเรื่องสำคัญของคุณ</a>
        @else
        <a href="{{('/')}}" style="color: #f05f40; font-weight: 700; font-size: 12px;"><img src="//{{Auth::user()->avatar}}" alt="{{Auth::user()->name}}" style="height:32px; vertical-align: middle; margin-right:7px;" class="img-circle"> {{ Auth::user()->name }}</a>
        @endif

        <br>
      </div>
    </div>
  </div>
</section>


<section id="services" style="background: #f2f8fa; padding: 1.5rem 0;">

  <div class="container">
    <div class="row">


      <div class="col-6 col-md-3 text-center" style="padding-right: 6px; padding-left: 6px;">
        <a data-toggle="modal" data-target="#myModal-1" href="#">
        <div class="parent-chart">
          <canvas id="doughnutChart" style="width: 150px; height: 86px;"></canvas>
          <div class="overlay-chart">
          <img class="img-in-chart" src="{{url('assets/avatar/400x400.jpg')}}">
          </div>
          <div class="user-name">
            <p style="margin-bottom: 0px; font-size:9px;">shuvit funsok</p>
          </div>
        </div>
      </a>

      <!-- Modal -->
      <div class="modal fade" id="myModal-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document" style="border: 1px solid rgba(33, 37, 41, 0.1);">
          <div class="modal-content1">

            <div class="modal-body text-center">


              <a data-dismiss="modal" aria-label="Close" class="view-more"><span aria-hidden="true" class="plus-sign"><i class="fa fa-remove"></i></span></a>

              <br><br>
              <img class="img-in-chart-in" style="width: 100px; height: 100px;" style="vertical-align: middle;" src="{{url('assets/avatar/400x400.jpg')}}">
              <br><br>
              <h5 class="text-center" style="color: #0479bd; font-weight: 700;">shuvit funsok</h5>
              <p class="p-pop">เลือกประเด็นสำคัญดังนี้</p>
                                            <div class="education">
                                                <p>
                                                    <span>1</span>การศึกษา</p>
                                                <ul>
                                                    <li>พัฒนาห้องสมุด</li>
                                                    <li>พัฒนาครู</li>
                                                    <li>ปฏิรูปหลักสูตร</li>
                                                    <li>เรียนฟรี</li>
                                                    <li>เพิ่มทุนการศึกษา</li>
                                                    <li>โรงเรียนในพื้นที่ห่างไกล</li>
                                                    <li>พัฒนาห้องสมุด</li>
                                                </ul>
                                            </div>

                                            <div class="economy">
                                                <p>
                                                    <span>2</span>เศรษฐกิจ
                                                </p>
                                                <ul>
                                                    <li>สนับสนุน SME</li>
                                                    <li>กองทุนสตาร์ทอัพ</li>
                                                    <li>กองทุนหมู่บ้าน</li>
                                                    <li>ส่งเสริมการส่งออก</li>
                                                    <li>เศรษฐกิจสร้างสรรค์</li>
                                                </ul>
                                            </div>
                                            <div class="public-health">
                                                <p>
                                                    <span>3</span>สาธารณสุข
                                                </p>
                                                <ul>
                                                    <li>พัฒนาครู</li>
                                                    <li>พัฒนาห้องสมุด</li>
                                                    <li>เพิ่มทุนการศึกษา</li>
                                                    <li>เรียนฟรี</li>
                                                </ul>
                                            </div>
            </div>

          </div>
        </div>
      </div>





      </div>


      <div class="col-6 col-md-3 text-center" style="padding-right: 6px; padding-left: 6px;">

        <a data-toggle="modal" data-target="#myModal-2" href="#">
        <div class="parent-chart">
          <canvas id="doughnutChart1"></canvas>
          <div class="overlay-chart">
            <img class="img-in-chart" src="{{url('assets/avatar/400x400.jpg')}}">
          </div>
          <div class="user-name">
            <p style="margin-bottom: 0px; font-size:9px;">kimkundad</p>
          </div>
        </div>
        </a>

        <!-- Modal -->
        <div class="modal fade" id="myModal-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document" style="border: 1px solid rgba(33, 37, 41, 0.1);">
            <div class="modal-content1">

              <div class="modal-body text-center">


                <a data-dismiss="modal" aria-label="Close" class="view-more"><span aria-hidden="true" class="plus-sign"><i class="fa fa-remove"></i></span></a>

                <br><br>
                <img class="img-in-chart-in" style="width: 100px; height: 100px;" style="vertical-align: middle;" src="{{url('assets/avatar/400x400.jpg')}}">
                <br><br>
                <h5 class="text-center" style="color: #0479bd; font-weight: 700;">shuvit funsok</h5>
                <p class="p-pop">เลือกประเด็นสำคัญดังนี้</p>
                                              <div class="education">
                                                  <p>
                                                      <span>1</span>การศึกษา</p>
                                                  <ul>
                                                      <li>พัฒนาห้องสมุด</li>
                                                      <li>พัฒนาครู</li>
                                                      <li>ปฏิรูปหลักสูตร</li>
                                                      <li>เรียนฟรี</li>
                                                      <li>เพิ่มทุนการศึกษา</li>
                                                      <li>โรงเรียนในพื้นที่ห่างไกล</li>
                                                      <li>พัฒนาห้องสมุด</li>
                                                  </ul>
                                              </div>

                                              <div class="economy">
                                                  <p>
                                                      <span>2</span>เศรษฐกิจ
                                                  </p>
                                                  <ul>
                                                      <li>สนับสนุน SME</li>
                                                      <li>กองทุนสตาร์ทอัพ</li>
                                                      <li>กองทุนหมู่บ้าน</li>
                                                      <li>ส่งเสริมการส่งออก</li>
                                                      <li>เศรษฐกิจสร้างสรรค์</li>
                                                  </ul>
                                              </div>
                                              <div class="public-health">
                                                  <p>
                                                      <span>3</span>สาธารณสุข
                                                  </p>
                                                  <ul>
                                                      <li>พัฒนาครู</li>
                                                      <li>พัฒนาห้องสมุด</li>
                                                      <li>เพิ่มทุนการศึกษา</li>
                                                      <li>เรียนฟรี</li>
                                                  </ul>
                                              </div>
              </div>

            </div>
          </div>
        </div>



      </div>

    </div>
  </div>
</section>


@endsection

@section('scripts')
<script src="{{url('front/js/Chart.bundle.js?v1')}}"></script>
<script type="text/javascript">

document.getElementById("doughnutChart").style.height = '128px';

  var ctxD = document.getElementById("doughnutChart").getContext('2d');
  var myLineChart = new Chart(ctxD, {
    type: 'doughnut',
    data: {
      labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
      datasets: [{
        data: [300, 50, 100, 40, 120],
        backgroundColor: ["#ED2E7D", "#50E3C2", "#F8E71C", "#4A90E2", "#5EC8F2"]
      }]
    },
    options: {
      legend: {
        display: false
      },
      responsive: true
    }
  });

  var ctxD = document.getElementById("doughnutChart1").getContext('2d');
  var myLineChart = new Chart(ctxD, {
    type: 'doughnut',
    data: {
      labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
      datasets: [{
        data: [300, 50, 100, 40, 120],
        backgroundColor: ["#ED2E7D", "#50E3C2", "#F8E71C", "#4A90E2", "#5EC8F2"]
      }]
    },
    options: {
      legend: {
        display: false
      },
      responsive: true
    }
  });


  var ctxD = document.getElementById("doughnutChart2").getContext('2d');
  var myLineChart = new Chart(ctxD, {
    type: 'doughnut',
    data: {
      labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
      datasets: [{
        data: [300, 50, 100, 40, 120],
        backgroundColor: ["#ED2E7D", "#50E3C2", "#F8E71C", "#4A90E2", "#5EC8F2"]
      }]
    },
    options: {
      legend: {
        display: false
      },
      responsive: true
    }
  });


</script>
@stop('scripts')
