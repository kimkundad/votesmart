<!-- Navigation fixed-top-->
<style>
.page-header {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  box-sizing: border-box;
  -webkit-transition: top 0.6s;
  -moz-transition: top 0.6s;
  transition: top 0.6s;
  z-index: 9999;
}
.page-header.off-canvas { top: -89px; }
.page-header.fixed {
  top: 0;
  z-index: 9999;
}


.page-header-sub {
  position: fixed;
  left: 0;
  top: 0px;
  width: 100%;
  box-sizing: border-box;
  -webkit-transition: top 0.6s;
  -moz-transition: top 0.6s;
  transition: top 0.6s;
  z-index: 9999;
}
.page-header-sub.off-canvas { top: -59px; }
.page-header-sub.fixed {
  top: 0;
  z-index: 9999;
}

</style>
<nav class="navbar navbar-expand-lg navbar-light page-header" id="mainNav" style="border-bottom: 1px solid rgba(33, 37, 41, 0.1); padding-top:5px; padding-bottom:5px;">
  <div class="container-fluid">


    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="header-column justify-content-start">
    <a class="navbar-brand " href="{{url('/')}}" style="font-size: 1.8rem; font-weight: 700;"><I>เลือกได้...เลือกดี</I></a>
    </div>


    <div class="btn-varunteer visible-sm visible-xs" style="padding-left: 8px; border-left: 1px solid #e6e1e1; height: 42px; margin-right: -25px;">
      <div class="header-column justify-content-start" style="padding-top: 10px;">
      <a data-toggle="modal" data-target="#myModal" href="#" style="font-size: 16px; color: #08B0ED; ">
              <i class="fa fa-hand-paper-o"></i>
              <span>อาสา</span>
      </a>
            </div>
            </div>






            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">

                  <div class="modal-body text-center">
                    <a data-dismiss="modal" aria-label="Close" class="view-more">
                      <span aria-hidden="true" class="plus-sign" style="border: 1px solid #fff;">
                        <i class="fa fa-remove" style="color: #fff;"></i>
                      </span>
                    </a>

                    <br><br>
                    <h3 class="text-center">อาสา</h3>
                    <p class="p-pop">ร่วมกันสร้างความเปลี่ยนแปลง</p>
                    <hr class="my-4" style="margin: 0 auto;">
                    <p class="p-pop" id="text2">หากคุณเป็นคนๆนึงที่อยากเห็นความเปลี่ยนแปลง <br>
                    ไม่ว่าคุณจะอายุเท่าไหร่ เพศไหน<br>
                    หรือมีความถนัดอะไร<br>
                    เราต้องการคุณมาร่วมเปลี่ยนแปลงไปด้วยกัน</p>

                    <p class="p-pop" id="text2">เพียงกรอกข้อมูลด้านล่าง<br>
                    ทีมงานของเราจะรีบติดต่อกลับไปโดยเร็ว</p>

                    <h3 id="head1"></h3>
                    <h3 id="head2" style="color:red"></h3>

                    <form action="{{url('/contact')}}" id="form" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                    <div class="col-6 " style="padding-right: 5px; float:left; padding-left: 0px;">

                          <div class="form-group">
                            <label for="exampleInputEmail1" style="pull-left">ชื่อ</label>
                            <input type="text" name="name" id="name" class="form-control" style="background-color: #5ec8f2;" >
                          </div>

                        </div>
                    <div class="col-6 " style="padding-right: 0px; float:left; padding-left: 5px;">
                      <div class="form-group">
                        <label for="exampleInputEmail1">สกุล</label>
                        <input type="text" name="surname" id="surname" class="form-control" style="background-color: #5ec8f2;">
                      </div>
                    </div>

                    <div class="col-md-12 " style="padding-right: 0px; float: left; padding-left: 0px;">
                      <div class="form-group">
                        <label for="exampleInputEmail1">อีเมล</label>
                        <input type="email" name="email" id="email" class="form-control" style="background-color: #5ec8f2;">
                      </div>
                    </div>

                    <div class="col-3 " style="padding-right: 10px; padding-left: 0px;float: left; margin-right: 10px;">
                      <div class="form-group">
                        <label for="exampleInputEmail1">อายุ</label>
                        <input type="text" name="year_old" id="year_old" class="form-control" style="background-color: #5ec8f2;">
                      </div>
                    </div>

                    <div class="col-8 " style="padding-right: 0px; float: left; padding-left: 0px;">
                      <div class="form-group" style="height:55px;">

                        <label for="exampleInputEmail1">เพศ</label>
                        <br><br>
                    				<div class="form-check" style="padding-left: 0rem;">
                    					<label>
                    						<input type="radio" name="radio" id="radio" value="ชาย"> <span class="label-text" style="margin-right: 7px;">ชาย</span>
                    					</label>
                    				</div>

                    				<div class="form-check">
                    					<label>
                    						<input type="radio" name="radio" id="radio" value="หญิง"> <span class="label-text" style="margin-right: 7px;">หญิง</span>
                    					</label>
                    				</div>
                    				<div class="form-check">
                    					<label>
                    						<input type="radio" name="radio" id="radio" value="ไม่ระบุ"> <span class="label-text" style="margin-right: 0px;">ไม่ระบุ</span>
                    					</label>
                    				</div>

                      </div>
                    </div>

                    <br><br>
                    <div class="col-md-12 " style="padding-right: 0px; float: left; padding-left: 0px;">
                      <div class="form-group">
                        <label for="exampleInputEmail1">ความสนใจ</label>
                        <textarea class="form-control" name="detail" rows="3" id="detail" style="background-color: #5ec8f2;"></textarea>
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-light btn-block" style="border-radius: 3px;     padding: 10px; color: #08B0ED;">ยืนยัน</button>
                    </div>
                  </form>





                  </div>

                </div>
              </div>
            </div>


            @if(Request::is('reps_result*'))
            <!-- Modal -->
            <div class="modal fade" id="myModal-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">

                  <div class="modal-body text-center" style="padding-right: 50px; padding-left: 50px;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:#fff; padding: 0px 0px 10px 10px; margin-right: -30px;"><span aria-hidden="true">&times;</span> ปิด</button>

                    <br><br>
                    <h3 class="text-center">พูดคุย</h3>




                    <p class="p-pop">มีเรื่องอยากคุย มีปัญหาให้ช่วยแก้</p>
                    <hr class="my-4" style="margin: 0 auto;">
                    <p class="p-pop">บอกให้ผู้สมัครของเราได้รู้ ให้เราได้เข้าใจและทำงาน<br>ได้ดีขึ้น อย่ารั้งรอ พูดคุยกับเราได้ทางช่องทางเหล่านี้</p>
                    <button class="button-z" id="btn-line"><img src="{{url('assets/image/Line_icon-icons.com_66976.png')}}" style="height:20px;"> LINE to {{$user->line_id}}</button>
                    <button class="button-z" id="btn-mail"><i class="fa fa-envelope" style="font-size:18px"></i> {{$user->email}}</button>
                    <p class="p-pop" id="textreps2">หรือส่งข้อความ</p>


                    <h3 id="headreps1"></h3>
                    <h3 id="headreps2" style="color:red"></h3>

                    <form action="{{url('/contact_to_reps')}}" id="contact-to-reps" method="post" enctype="multipart/form-data">

                    <div class="col-md-12 " style="padding-right: 0px; padding-left: 0px;">

                          <div class="form-group">
                            <label for="exampleInputEmail1" style="pull-left">ชื่อ</label>
                            <input type="text" name="name" id="namereps" class="form-control" >
                          </div>

                        </div>
                    <div class="col-md-12 " style="padding-right: 0px; padding-left: 0px;">
                      <div class="form-group">
                        <label for="exampleInputEmail1">สกุล</label>
                        <input type="text" name="surname" id="surnamereps" class="form-control" >
                      </div>
                    </div>

                    <div class="col-md-12 " style="padding-right: 0px; padding-left: 0px;">
                      <div class="form-group">
                        <label for="exampleInputEmail1">อีเมล</label>
                        <input type="email" name="email" id="emailreps" class="form-control" >
                      </div>
                    </div>




                    <div class="col-md-12 " style="padding-right: 0px; padding-left: 0px;">
                      <div class="form-group">
                        <label for="exampleInputEmail1">ข้อความ</label>
                        <textarea class="form-control" id="detailreps" name="detail" rows="3"></textarea>
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-light btn-block" style="border-radius: 3px; color: #08B0ED; padding: 12px;">ส่งข้อความ</button>
                    </div>
                  </form>





                  </div>

                </div>
              </div>
            </div>
            @endif


    <div class="header-column justify-content-start">
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item {{ (Request::is('/') ? 'action-nav' : '') }}">
          <a class="nav-link {{ (Request::is('/') ? 'a-head' : '') }} {{ (Request::is('home') ? 'a-head' : '') }}  {{ (Request::is('quiz_choices') ? 'a-head' : '') }} {{ (Request::is('result') ? 'a-head' : '') }} js-scroll-trigger hidden-sm hidden-xs" {{ (Request::is('/') ? 'id="a-head-set"' : '') }}  style="font-size: 16px; padding: 16px 25px 10px; " href="{{url('/home')}}">เลือกอะไรได้?</a>

          <a href="{{url('/home')}}">
          <div class="service-box mt-nav mx-auto text-center visible-sm visible-xs">
             <h5 class="mb-3" style="font-weight: 700;">เลือกอะไรได้?</h5>
              <p class="text-muted mb-0">ถ้าต้องเป็นนายกรัฐมนตรี คุณจะเลือกอะไร? อะไรที่เราควรให้ความสำคัญ?</p>
            </div>
          </a>

        </li>
        <li class="nav-item {{ (Request::is('representatives_all*') ? 'action-nav' : '') }} {{ (Request::is('reps_list*') ? 'action-nav' : '') }}" >

          <a class="nav-link {{ (Request::is('reps_result*') ? 'a-head' : '') }} {{ (Request::is('representatives_grid') ? 'a-head' : '') }} {{ (Request::is('representatives_all') ? 'a-head' : '') }} {{ (Request::is('reps_list') ? 'a-head' : '') }} js-scroll-trigger hidden-sm hidden-xs" {{ (Request::is('representatives_all') ? 'id="a-head-set"' : '') }}
          {{ (Request::is('reps_list') ? 'id="a-head-set"' : '') }} style="font-size: 16px; padding: 16px 25px 10px; " href="{{url('/representatives_all')}}">เลือกใครดี?</a>

          <a href="{{url('/representatives_all')}}">
          <div class="service-box mt-nav mx-auto text-center visible-sm visible-xs">
             <h5 class="mb-3" style="font-weight: 700;">เลือกใครดี?</h5>
              <p class="text-muted mb-0">รู้จักผู้แทนของคุณมากขึ้น และบอกพวกเค้าว่าอะไรที่สำคุณ?</p>
            </div>
          </a>

        </li>











        <li class="nav-item dropdown open">
          <div class="service-box mt-nav mx-auto text-center visible-sm visible-xs">

              <p class="text-muted mb-0">ด้วยการเปลี่ยนแปลงเกิดขึ้นไม่ได้<br> ด้วยคนๆเดียว</p>
              <br>
              <a class="btn btn-light js-scroll-trigger" data-toggle="modal" data-target="#myModal" href="#" style="font-weight: 400;padding: 10px 40px; background-color: #fff; color: #08B0ED; border: 1px solid #08B0ED; font-size: 15px; color:#08B0ED"><i class="fa fa-hand-paper-o"></i> อาสาช่วยงาน</a>
            </div>
        </li>

        @if (Auth::guest())

        @else
        <li class="nav-item dropdown open visible-sm visible-xs" style="border-top: 1px solid #ddd;">
        <style>

        .userbox {
            display: inline-block;
            margin: 3px 17px 10px 0;
            position: relative;
            vertical-align: middle;
        }
        .userbox > a {
    display: inline-block;
    text-decoration: none;
}
.userbox .profile-info, .userbox .profile-picture {
    display: inline-block;
    vertical-align: middle;
}
figure {
    margin: 0;
}
.userbox .profile-picture img {
    width: 45px;
    color: transparent;
}
.userbox .profile-info {
    margin: 0 25px 0 10px;
}
.userbox .profile-info, .userbox .profile-picture {
    display: inline-block;
    vertical-align: middle;
}
.userbox .name {
    color: #000011;
    font-size: 1.3rem;
    line-height: 1.2em;
}
.userbox .role {
    color: #ACACAC;
    font-size: 1.1rem;
    line-height: 1.5em;
}
.img-circle{
  border-radius: 50%;
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
}
.justify-content-start {
    -ms-flex-pack: start!important;
    justify-content: flex-start!important;
}
        </style>

        <div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
                @if(Auth::user()->provider == 'email')
                <img src="{{url('assets/images/avatar/'.Auth::user()->avatar)}}" alt="{{url('Auth::user()->name')}}" class="img-circle">
                @else
                <img src="//{{Auth::user()->avatar}}&access_token=EAACGpXHuvGkBABN7vIs8c5azBUrZBnwKwW0BbkF3kQSbCfK4W0Guwgv6ZCaqOsq5adhZB07zZA25BMZCOYwulLDoHAcFeNtGLA63rx6D6BG0wtPxywRaBjn4Afkr4tHwQTHC7mGvH1RFAxZB9ysqpcb9wsmYvzd5ZAcQKWjfO9MzZBBanKrISGz4" alt="{{url('Auth::user()->name')}}" class="img-circle">
                @endif

							</figure>
							<div class="profile-info" style="text-align:left; margin: 15px 17px 10px 10px;">
								<span class="name" style="color: #0591c3; padding-bottom:8px;">{{Auth::user()->name}}</span><div style="height:10px;"></div>
								<a href="{{url('result')}}" class="info" style="font-size: 13px; color:#999" id="SHOW_HELP"><i class="fa fa-pie-chart"></i> ดูหน้าผลลัพท์</a>
                <a href="{{url('logout')}}" class="info" style="font-size: 13px; color:#999" id="SHOW_HELP"><i class="fa fa-sign-out"></i> ออกจากระบบ</a>

							</div>


						</a>



					</div>
          </li>


        @endif

      </ul>








    </div>
    </div>

    <div class="hidden-sm hidden-xs">
    <div class="header-column justify-content-start">


        <a class="btn btn-light btn-asa btn-xl js-scroll-trigger " style=" margin-top: 8px; background-color: #fff;" href="#" data-toggle="modal" data-target="#myModal"
        style="background-color: #ffffff; font-size: 14px; margin-top: 5px; color:#08B0ED">
        <i class="fa fa-hand-paper-o"></i> อาสาช่วยงาน</a>


        @if (Auth::guest())

        @else
        <div id="dd" class="wrapper-dropdown-3" tabindex="1" style="  float: right; top: 0px; padding: 0px;">

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

                        <img src="//{{Auth::user()->avatar}}&access_token=EAACGpXHuvGkBABN7vIs8c5azBUrZBnwKwW0BbkF3kQSbCfK4W0Guwgv6ZCaqOsq5adhZB07zZA25BMZCOYwulLDoHAcFeNtGLA63rx6D6BG0wtPxywRaBjn4Afkr4tHwQTHC7mGvH1RFAxZB9ysqpcb9wsmYvzd5ZAcQKWjfO9MzZBBanKrISGz4" alt="{{Auth::user()->name}}" style="margin-left: 10px; height:45px; vertical-align: middle; margin-right:7px; border-radius: 50%; margin-top: 5px;" class="img-circle">

                        <ul class="dropdown" style="width: 200px;">
                          <li><a href="{{url('/')}}" class="info2" id="SHOW_HELP2" style="font-size: 12px;">
                            <img src="{{url('//'.Auth::user()->avatar)}}&access_token=EAACGpXHuvGkBABN7vIs8c5azBUrZBnwKwW0BbkF3kQSbCfK4W0Guwgv6ZCaqOsq5adhZB07zZA25BMZCOYwulLDoHAcFeNtGLA63rx6D6BG0wtPxywRaBjn4Afkr4tHwQTHC7mGvH1RFAxZB9ysqpcb9wsmYvzd5ZAcQKWjfO9MzZBBanKrISGz4" alt="{{Auth::user()->name}}"
                            style="margin-left: 10px; height:25px; vertical-align: middle; margin-right:7px; border-radius: 50%; margin-top: 5px;"
                            class="img-circle"> {{Auth::user()->name}}
                          </a></li>
                          <li><a href="{{url('result')}}" class="info" id="SHOW_HELP"><i class="fa fa-pie-chart"></i> ดูหน้าผลลัพท์</a></li>
                          <li><a href="{{url('logout')}}" class="info-3" id="SHOW_HELP-3"><i class="fa fa-sign-out"></i> ออกจากระบบ</a></li>
                        </ul>

                        @endif
                        </div>
      @endif
      </div>







    </div>





  </div>


</nav>
