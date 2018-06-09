<div class="header-right">


  <ul class="notifications">
    <li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-envelope"></i>
								<span class="badge">{{$count_contact}}</span>
							</a>

              <div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="pull-right label label-default">{{$count_contact}}</span>
									Alerts
								</div>

								<div class="content">
									<ul>
										<li>
											<a href="{{url('admin/contact')}}" class="clearfix">
												<div class="image">
													<i class="fa fa-comment-o bg-info"></i>
												</div>
												<span class="title">มีข้อความใหม่!</span>
												<span class="message">จากผู้ร่วม อาสา ใหม่</span>
											</a>
										</li>


									<div class="text-right">
										<a href="{{url('admin/contact')}}" class="view-more">ดูทั้งหมด</a>
									</div>
								</div>
							</div>

						</li>
    <li class="">
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown" aria-expanded="false">
								<i class="fa fa-bell"></i>
								<span class="badge">{{$count_users}}</span>
							</a>

							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="pull-right label label-default">{{$count_users}}</span>
									Alerts
								</div>

								<div class="content">
									<ul>
										<li>
											<a href="{{url('admin/representatives_new')}}" class="clearfix">
												<div class="image">
													<i class="fa fa-graduation-cap bg-danger"></i>
												</div>
												<span class="title">มีรายชื่อใหม่!</span>
												<span class="message">ส.ส. รอการยืนยัน</span>
											</a>
										</li>


									<div class="text-right">
										<a href="{{url('admin/representatives_new')}}" class="view-more">ดูทั้งหมด</a>
									</div>
								</div>
							</div>
						</li>

</ul>




                    <span class="separator"></span>
                  @if (Auth::guest())
              @else
                    <div id="userbox" class="userbox">
                        <a href="#" data-toggle="dropdown">
                            <figure class="profile-picture">
                              @if(Auth::user()->avatar != NULL)
                                <img src="{{url('./assets/images/avatar/'.Auth::user()->avatar)}}" width="35" height="35"  class="img-circle" data-lock-picture="{{asset('./assets/images/avatar/'.Auth::user()->image)}}" />
                              @else
                              <img src="{{asset('./assets/images/avatar/blank_avatar_240x240.gif')}}" width="35" height="35"  class="img-circle" data-lock-picture="{{asset('./assets/images/avatar/blank_avatar_240x240.gif')}}" />
                              @endif
                            </figure>
                            <div class="profile-info" data-lock-name="{{ Auth::user()->name }}" >
                                <span class="name">{{ Auth::user()->name }}</span>
                                <span class="role"></span>
                            </div>

                            <i class="fa custom-caret"></i>
                        </a>

                        <div class="dropdown-menu">
                            <ul class="list-unstyled">
                                <li class="divider"></li>
                              <!--  <li>
                                    <a role="menuitem" tabindex="-1" href="{{url('admin/profile/')}}" ><i class="fa fa-user"></i> ข้อมูลส่วนตัว</a>
                                </li> -->
                                <li>
                                    <a role="menuitem" tabindex="-1" href="{{url('logout')}}" ><i class="fa fa-power-off"></i> ออกจากระบบ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
@endif


                </div>
