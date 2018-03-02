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


									<li {{ (Request::is('admin/dashboard*') ? 'class=nav-expanded' : '') }} >
										<a href="{{url('admin/dashboard/')}}"  >
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>ส่วนควบคุม</span>
										</a>
									</li>

                  <li {{ (Request::is('admin/user*') ? 'class=nav-expanded' : '') }} >
										<a href="{{url('admin/user/')}}"  >
											<i class="fa fa-user" aria-hidden="true"></i>
											<span>รายชื่อสมาชิก</span>
										</a>
									</li>

                  <li {{ (Request::is('admin/category*') ? 'class=nav-expanded' : '') }} >
										<a href="{{url('admin/category/')}}"  >
											<i class="fa fa-tasks" aria-hidden="true"></i>
											<span>จัดการหมวดหมู่</span>
										</a>
									</li>

                  <li {{ (Request::is('admin/quiz*') ? 'class=nav-expanded' : '') }} >
										<a href="{{url('admin/quiz/')}}"  >
											<i class="fa fa-bullseye" aria-hidden="true"></i>
											<span>จัดการ Quiz</span>
										</a>
									</li>

                  <li {{ (Request::is('admin/result*') ? 'class=nav-expanded' : '') }} >
										<a href="{{url('admin/result/')}}"  >
											<i class="fa fa-external-link" aria-hidden="true"></i>
											<span>จัดการ Result</span>
										</a>
									</li>

                  <li {{ (Request::is('admin/votesmart*') ? 'class=nav-expanded' : '') }} >
										<a href="{{url('admin/votesmart/')}}"  >
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
