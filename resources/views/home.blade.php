@extends('layouts.app')

@section('content')
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand " href="#page-top">เลือกได้...เลือกดี</a>

    <div class="btn-varunteer visible-sm visible-xs" style="padding-left: 8px; border-left: 1px solid #e6e1e1;">
              <i class="fa fa-hand-paper-o"></i>
              <span>อาสา</span>
            </div>

    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger hidden-sm hidden-xs" href="#about">About</a>

          <div class="service-box mt-5 mx-auto text-center visible-sm visible-xs">
              <i class="fa fa-4x fa-diamond text-primary mb-3 sr-icons" data-sr-id="2" style="; visibility: visible;  -webkit-transform: scale(1); opacity: 1;transform: scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; "></i>
              <h3 class="mb-3">Sturdy Templates</h3>
              <p class="text-muted mb-0">Our templates are updated regularly so they don't break.</p>
            </div>


        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>



<section class="bg-primary" id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <h2 class="section-heading text-white">We've got what you need!</h2>
        <hr class="light my-4">
        <p class="text-faded mb-4">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p>
        <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
      </div>
    </div>
  </div>
</section>

<section id="services">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading">At Your Service</h2>
        <hr class="my-4">
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 text-center">
        <div class="service-box mt-5 mx-auto">
          <i class="fa fa-4x fa-diamond text-primary mb-3 sr-icons"></i>
          <h3 class="mb-3">Sturdy Templates</h3>
          <p class="text-muted mb-0">Our templates are updated regularly so they don't break.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="service-box mt-5 mx-auto">
          <i class="fa fa-4x fa-paper-plane text-primary mb-3 sr-icons"></i>
          <h3 class="mb-3">Ready to Ship</h3>
          <p class="text-muted mb-0">You can use this theme as is, or you can make changes!</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="service-box mt-5 mx-auto">
          <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
          <h3 class="mb-3">Up to Date</h3>
          <p class="text-muted mb-0">We update dependencies to keep things fresh.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="service-box mt-5 mx-auto">
          <i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i>
          <h3 class="mb-3">Made with Love</h3>
          <p class="text-muted mb-0">You have to make your websites with love these days!</p>
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
