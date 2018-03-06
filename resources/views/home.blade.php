@extends('layouts.app')

@section('content')
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" style="border-bottom: 1px solid rgba(33, 37, 41, 0.1);">
  <div class="container">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand " href="#page-top" style="font-size: 1.5rem;">เลือกได้...เลือกดี</a>

    <div class="btn-varunteer visible-sm visible-xs" style="padding-left: 8px; border-left: 1px solid #e6e1e1;">
      <a data-toggle="modal" data-target="#myModal" href="#" style="font-size: 14px; ">
              <i class="fa fa-hand-paper-o"></i>
              <span>อาสา</span>
      </a>
            </div>




            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">

                  <div class="modal-body text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:#fff; padding: 0px 0px 10px 10px;"><span aria-hidden="true">&times;</span> ปิด</button>

                    <br><br>
                    <h3 class="text-center">อาสา</h3>
                    <p class="p-pop">ร่วมกันสร้างความเปลี่ยนแปลง</p>
                    <hr class="my-4">
                    <p class="p-pop">หากคุณเป็นคนๆนึงที่อยากเห็นความเปลี่ยนแปลง <br>
                    ไม่ว่าคุณจะอายุเท่าไหร่ เพศไหน<br>
                    หรือมีความถนัดอะไร<br>
                    เราต้องการคุณมาร่วมเปลี่ยนแปลงไปด้วยกัน</p>

                    <p class="p-pop">เพียงกรอกข้อมูลด้านล่าง<br>
                    ทีมงานของเราจะรีบติดต่อกลับไปโดยเร็ว</p>

                    <form>

                    <div class="col-md-12 " style="padding-right: 0px; padding-left: 0px;">

                          <div class="form-group">
                            <label for="exampleInputEmail1" style="pull-left">ชื่อ</label>
                            <input type="text" name="name" class="form-control" >
                          </div>

                        </div>
                    <div class="col-md-12 " style="padding-right: 0px; padding-left: 0px;">
                      <div class="form-group">
                        <label for="exampleInputEmail1">สกุล</label>
                        <input type="text" name="surname" class="form-control" >
                      </div>
                    </div>

                    <div class="col-md-12 " style="padding-right: 0px; padding-left: 0px;">
                      <div class="form-group">
                        <label for="exampleInputEmail1">อีเมล</label>
                        <input type="email" name="email" class="form-control" >
                      </div>
                    </div>

                    <div class="col-md-12 " style="padding-right: 0px; padding-left: 0px;">
                      <div class="form-group">
                        <label for="exampleInputEmail1">อายุ</label>
                        <input type="number" name="year_old" class="form-control" >
                      </div>
                    </div>

                    <div class="col-md-12 " style="padding-right: 0px; padding-left: 0px;">
                      <div class="form-group" style="height:55px;">

                        <label for="exampleInputEmail1">เพศ</label>
                        <br>
                    				<div class="form-check">
                    					<label>
                    						<input type="radio" name="radio"> <span class="label-text" style="margin-right: 15px;">ชาย</span>
                    					</label>
                    				</div>

                    				<div class="form-check">
                    					<label>
                    						<input type="radio" name="radio"> <span class="label-text" style="margin-right: 15px;">หญิง</span>
                    					</label>
                    				</div>
                    				<div class="form-check">
                    					<label>
                    						<input type="radio" name="radio"> <span class="label-text" style="margin-right: 15px;">ไม่ระบุ</span>
                    					</label>
                    				</div>

                      </div>
                    </div>


                    <div class="col-md-12 " style="padding-right: 0px; padding-left: 0px;">
                      <div class="form-group">
                        <label for="exampleInputEmail1">ความสนใจ</label>
                        <textarea class="form-control" rows="3"></textarea>
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="button" class="btn btn-light btn-block" style="border-radius: 3px; color: #08B0ED;">ยืนยัน</button>
                    </div>
                  </form>





                  </div>

                </div>
              </div>
            </div>






    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger hidden-sm hidden-xs" href="#about">เลือกอะไรได้?</a>

          <div class="service-box mt-nav mx-auto text-center visible-sm visible-xs">
             <h5 class="mb-3" style="font-weight: 700;">เลือกอะไรได้?</h5>
              <p class="text-muted mb-0">ถ้าต้องเป็นนายกรัฐมนตรี คุณจะเลือกอะไร? อะไรที่เราควรให้ความสำคัญ?</p>
            </div>


        </li>
        <li class="nav-item">

          <a class="nav-link js-scroll-trigger hidden-sm hidden-xs" href="#about">เลือกใครดี?</a>

          <div class="service-box mt-nav mx-auto text-center visible-sm visible-xs">
             <h5 class="mb-3" style="font-weight: 700;">เลือกใครดี?</h5>
              <p class="text-muted mb-0">รู้จักผู้แทนของคุณมากขึ้น และบอกพวกเค้าว่าอะไรที่สำคุณ?</p>
            </div>
        </li>
        <li class="nav-item">
          <div class="service-box mt-nav mx-auto text-center visible-sm visible-xs">

              <p class="text-muted mb-0">ด้วยการเปลี่ยนแปลงเกิดขึ้นไม่ได้<br> ด้วยคนๆเดียว</p>
              <br>
              <a class="btn btn-light js-scroll-trigger" href="#services" style="color: #08B0ED; border: 1px solid #08B0ED; font-size: 15px;"><i class="fa fa-hand-paper-o"></i> อาสาช่วยงาน</a>
            </div>
        </li>

      </ul>
    </div>
  </div>
</nav>



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

<section class="p-0" id="portfolio">
  <div class="container-fluid p-0">
    <div class="row no-gutters popup-gallery">
      <div class="col-lg-4 col-sm-6">
        <a class="portfolio-box" href="img/portfolio/fullsize/1.jpg">
          <img class="img-fluid" src="img/portfolio/thumbnails/1.jpg" alt="">
          <div class="portfolio-box-caption">
            <div class="portfolio-box-caption-content">
              <div class="project-category text-faded">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-sm-6">
        <a class="portfolio-box" href="img/portfolio/fullsize/2.jpg">
          <img class="img-fluid" src="img/portfolio/thumbnails/2.jpg" alt="">
          <div class="portfolio-box-caption">
            <div class="portfolio-box-caption-content">
              <div class="project-category text-faded">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-sm-6">
        <a class="portfolio-box" href="img/portfolio/fullsize/3.jpg">
          <img class="img-fluid" src="img/portfolio/thumbnails/3.jpg" alt="">
          <div class="portfolio-box-caption">
            <div class="portfolio-box-caption-content">
              <div class="project-category text-faded">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-sm-6">
        <a class="portfolio-box" href="img/portfolio/fullsize/4.jpg">
          <img class="img-fluid" src="img/portfolio/thumbnails/4.jpg" alt="">
          <div class="portfolio-box-caption">
            <div class="portfolio-box-caption-content">
              <div class="project-category text-faded">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-sm-6">
        <a class="portfolio-box" href="img/portfolio/fullsize/5.jpg">
          <img class="img-fluid" src="img/portfolio/thumbnails/5.jpg" alt="">
          <div class="portfolio-box-caption">
            <div class="portfolio-box-caption-content">
              <div class="project-category text-faded">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-sm-6">
        <a class="portfolio-box" href="img/portfolio/fullsize/6.jpg">
          <img class="img-fluid" src="img/portfolio/thumbnails/6.jpg" alt="">
          <div class="portfolio-box-caption">
            <div class="portfolio-box-caption-content">
              <div class="project-category text-faded">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<section class="bg-dark text-white">
  <div class="container text-center">
    <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
    <a class="btn btn-light btn-xl sr-button" href="http://startbootstrap.com/template-overviews/creative/">Download Now!</a>
  </div>
</section>

<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <h2 class="section-heading">Let's Get In Touch!</h2>
        <hr class="my-4">
        <p class="mb-5">Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 ml-auto text-center">
        <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
        <p>123-456-6789</p>
      </div>
      <div class="col-lg-4 mr-auto text-center">
        <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
        <p>
          <a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a>
        </p>
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
