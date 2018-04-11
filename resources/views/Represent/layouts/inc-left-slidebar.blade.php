<style>

ul.nav-main > li.nav-expanded > a {
  box-shadow: 2px 0 0 #3b8dbf inset;
}
html.no-overflowscrolling .nano > .nano-pane > .nano-slider {
    background: #3b8dbf;
}
.page-header h2 {
    border-bottom-color: #3b8dbf;
}
</style>
<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">

					<div class="sidebar-header">
						<div class="sidebar-title">
							Navigation
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar" ></i>
						</div>
					</div>

					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">


									<li {{ (Request::is('representatives/dashboard*') ? 'class=nav-expanded' : '') }} >
										<a href="{{url('representatives/dashboard/')}}"  >
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>ส่วนควบคุม</span>
										</a>
									</li>

                  <li {{ (Request::is('representatives/profile*') ? 'class=nav-expanded' : '') }} >
										<a href="{{url('representatives/profile/')}}"  >
											<i class="fa fa-user" aria-hidden="true"></i>
											<span>ข้อมูลส่วนตัว</span>
										</a>
									</li>


                  <li {{ (Request::is('representatives/exper*') ? 'class=nav-expanded' : '') }} >
										<a href="{{url('representatives/exper/')}}"  >
											<i class="fa fa-coffee" aria-hidden="true"></i>
											<span>ประสบการณ์</span>
										</a>
									</li>

                  <li {{ (Request::is('representatives/education*') ? 'class=nav-expanded' : '') }} >
										<a href="{{url('representatives/education/')}}"  >
											<i class="fa fa-graduation-cap" aria-hidden="true"></i>
											<span>การศึกษา</span>
										</a>
									</li>

                  <li {{ (Request::is('representatives/timeline*') ? 'class=nav-expanded' : '') }} >
										<a href="{{url('representatives/timeline/')}}"  >
											<i class="fa fa-history" aria-hidden="true"></i>
											<span>กำหนดการ</span>
										</a>
									</li>


                  <li {{ (Request::is('representatives/gallery*') ? 'class=nav-expanded' : '') }} >
										<a href="{{url('representatives/gallery/')}}"  >
											<i class="fa fa-camera-retro" aria-hidden="true"></i>
											<span>รูปภาพ</span>
										</a>
									</li>

                  <li {{ (Request::is('representatives/votesmart*') ? 'class=nav-expanded' : '') }} >
										<a href="{{url('representatives/votesmart')}}"  >
											<i class="fa fa-child" aria-hidden="true"></i>
											<span>Vote_Smart</span>
										</a>
									</li>








								</ul>



							</nav>



							<hr class="separator" />


						</div>

					</div>

				</aside>
				<!-- end: sidebar -->
