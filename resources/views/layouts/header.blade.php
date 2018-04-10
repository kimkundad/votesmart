<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" style="border-bottom: 1px solid rgba(33, 37, 41, 0.1); padding-top:5px; padding-bottom:5px;">
  <div class="container">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand " href="{{url('/')}}" style="font-size: 1.8rem; font-weight: 700;"><I>เลือกได้...เลือกดี</I></a>

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
                    <hr class="my-4" style="margin: 0 auto;">
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
          <a class="nav-link {{ (Request::is('/') ? 'a-head' : '') }}  js-scroll-trigger hidden-sm hidden-xs" {{ (Request::is('/') ? 'id="a-head-set"' : '') }}  style="font-size: 16px; padding: 16px 25px 10px; " href="{{url('/')}}">เลือกอะไรได้?</a>

          <a href="{{url('/')}}">
          <div class="service-box mt-nav mx-auto text-center visible-sm visible-xs">
             <h5 class="mb-3" style="font-weight: 700;">เลือกอะไรได้?</h5>
              <p class="text-muted mb-0">ถ้าต้องเป็นนายกรัฐมนตรี คุณจะเลือกอะไร? อะไรที่เราควรให้ความสำคัญ?</p>
            </div>
          </a>

        </li>
        <li class="nav-item" style="margin-right: 30px;">

          <a class="nav-link {{ (Request::is('representatives_all') ? 'a-head' : '') }} js-scroll-trigger hidden-sm hidden-xs" {{ (Request::is('representatives_all') ? 'id="a-head-set"' : '') }} style="font-size: 16px; padding: 16px 25px 10px; " href="{{url('/representatives_all')}}">เลือกใครดี?</a>

          <a href="{{url('/')}}">
          <div class="service-box mt-nav mx-auto text-center visible-sm visible-xs">
             <h5 class="mb-3" style="font-weight: 700;">เลือกใครดี?</h5>
              <p class="text-muted mb-0">รู้จักผู้แทนของคุณมากขึ้น และบอกพวกเค้าว่าอะไรที่สำคุณ?</p>
            </div>
          </a>

        </li>

        <li class="nav-item hidden-sm hidden-xs">
          <a class="btn btn-light btn-asa btn-xl js-scroll-trigger " href="#" data-toggle="modal" data-target="#myModal" style="background-color: #ffffff; margin-top: 5px;"><i class="fa fa-hand-paper-o"></i> อาสาช่วยงาน</a>
        </li>









        <li class="nav-item dropdown open">
          <div class="service-box mt-nav mx-auto text-center visible-sm visible-xs">

              <p class="text-muted mb-0">ด้วยการเปลี่ยนแปลงเกิดขึ้นไม่ได้<br> ด้วยคนๆเดียว</p>
              <br>
              <a class="btn btn-light js-scroll-trigger" data-toggle="modal" data-target="#myModal" href="#" style="color: #08B0ED; border: 1px solid #08B0ED; font-size: 15px;"><i class="fa fa-hand-paper-o"></i> อาสาช่วยงาน</a>
            </div>
        </li>

      </ul>




      <ul class="nav navbar-nav navbar-right hidden-xs">

      <li class="nav-item hidden-sm hidden-xs">








        @if (Auth::guest())

        @else
        <div id="dd" class="wrapper-dropdown-3" tabindex="1">

                        @if(Auth::user()->provider == 'email')

                        <img src="{{url('assets/images/avatar/'.Auth::user()->avatar)}}" alt="{{Auth::user()->name}}"
                        style="margin-left: 10px; height:45px; vertical-align: middle; margin-right:7px; border-radius: 50%; margin-top: 5px;"
                        class="img-circle">


                        <ul class="dropdown" style="width: 200px;">
                          <li><a href="{{url('/')}}" class="info2" id="SHOW_HELP2" style="font-size: 12px;">
                            <img src="{{url('assets/images/avatar/'.Auth::user()->avatar)}}" alt="{{Auth::user()->name}}"
                            style="margin-left: 10px; height:25px; vertical-align: middle; margin-right:7px; border-radius: 50%; margin-top: 5px;"
                            class="img-circle"> {{Auth::user()->name}}
                          </a></li>
                          <li><a href="{{url('result')}}" class="info" id="SHOW_HELP"><i class="fa fa-pie-chart"></i> ดูหน้าผลลัพท์</a></li>
                          <li><a href="{{url('logout')}}" class="info-3" id="SHOW_HELP-3"><i class="fa fa-sign-out"></i> ออกจากระบบ</a></li>
                        </ul>

                        @else

                        <img src="//{{Auth::user()->avatar}}" alt="{{Auth::user()->name}}" style="margin-left: 10px; height:45px; vertical-align: middle; margin-right:7px; border-radius: 50%; margin-top: 5px;" class="img-circle">

                        <ul class="dropdown" style="width: 200px;">
                          <li><a href="{{url('/')}}" class="info2" id="SHOW_HELP2" style="font-size: 12px;">
                            <img src="{{url('//'.Auth::user()->avatar)}}" alt="{{Auth::user()->name}}"
                            style="margin-left: 10px; height:25px; vertical-align: middle; margin-right:7px; border-radius: 50%; margin-top: 5px;"
                            class="img-circle"> {{Auth::user()->name}}
                          </a></li>
                          <li><a href="{{url('result')}}" class="info" id="SHOW_HELP"><i class="fa fa-pie-chart"></i> ดูหน้าผลลัพท์</a></li>
                          <li><a href="{{url('logout')}}" class="info-3" id="SHOW_HELP-3"><i class="fa fa-sign-out"></i> ออกจากระบบ</a></li>
                        </ul>

                        @endif
      @endif



                          </div>
      </li>

      </ul>




    </div>
  </div>
</nav>
