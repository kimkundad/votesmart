@extends('layouts.app')

@section('content')
<!-- Navigation -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<link href="{{url('social-feed-gh-pages/css/jquery.socialfeed.css')}}" rel="stylesheet">




<style type="text/css">



#bg-selector {
  font-size: 1em;
  font-style: italic;
}
.color {
  width: 32px;
  height: 32px;
  border: 1px solid #555;
  display: inline-block;
  margin: 0 0 0 0.2em;
  cursor: pointer;
  padding: 5px;
    border-radius: 50%;
}
.color img {
  max-width: 100%;
  max-height: 100%;
  display: block;
}
.black {
  background-color: #000;
}
.gray,
.picker {
  background-color: #eaeaea;
}
.white {
  background-color: #fff;
}
.blue {
  background-color: #00529c;
}
#colorpicker { visibility: hidden; }


  #mainNav .navbar-brand ,h1,h2,h3,h4,h5,h6{
    font-family: "Kanit" !important;
    font-weight: 400;
  }
  .nav-link {
    font-family: "Kanit";
    font-weight: 400;
  }

  .candidate-profile-2 ul li {
    font-family: "Kanit";
    font-size: 13px;
    padding: 5px 10px;
  }

  .show-vision h3,.share-vision h3 {
      color: #0479BD;
      font-weight: 400;
      font-size: 20px;
      margin: 30px auto;
  }



  .btn-primary:hover, .btn-primary:focus, .btn-primary:active {
    background-color: #fff;
  }

  .btn {
        display: inline-block;
  }

  .share-result .btn, .show-vision .btn,.candidate-link .btn {  height: 48px; width: 232px; border: 1px solid #08B0ED;  border-radius: 24px; padding:14px 24px;
    font-weight: 400;
 color: #08B0ED; font-family: 'Kanit', sans-serif;  font-size: 14px;  line-height: 21px;  text-align: center; text-shadow: 0 1px 2px 0 rgba(35,31,32,0.24);}
  }
.head_title h3{
      color: #0479BD;
      font-weight: 400;
      font-size: 20px;
      margin: 30px auto;
  }


  #heading_b{
    color: #0479BD;
font-family: 'Kanit', sans-serif;
font-size: 36px;
font-weight: 500;
line-height: 56px;
text-align: center;
margin-bottom: 24px;
text-shadow: 1px 1px 0 #5EC8F2, 2px 2px 0 #5EC8F2, 3px 3px 0 #5EC8F2, 4px 4px 0 #5EC8F2, 5px 5px 0 #5EC8F2, 6px 6px 0 #5EC8F2, 7px 7px 0 #5EC8F2, 8px 8px 0 #5EC8F2, 9px 9px 0 #5EC8F2, 10px 10px 0 #5EC8F2;

  }





  @media (max-width: 280px){

    .img-in-chart {
        margin-top: -1px;
        width: 140px;
        height: 140px;
    }

    #canvas {
    max-width: 100%;
    width: 500px;
    height: 370px;
    background-color: #08B0ED;
    margin: 0px auto;
}

#canvas > img {
    float: right;
    /* position: relative; */
    /* text-align: right; */
    /* left: 70px; */
    width: 50%;
    /* height: 50%; */
}
#canvas > div {
    padding-right: 10px;
    padding-left: 10px;
    width: 90%;
    position: absolute;
    top: 200px;
    /* left: 5px; */
}
h2.avatar-heading {
    color: #fff;
    font-family: 'Kanit', sans-serif;
    font-size: 15px;
    font-weight: 100;
    line-height: 25px;
    text-align: left;
    /* margin-bottom: 24px; */
    text-shadow: 1px 1px 0 #0479BD, 2px 2px 0 #0479BD, 3px 3px 0 #0479BD, 4px 4px 0 #0479BD, 5px 5px 0 #0479BD, 6px 6px 0 #0479BD, 7px 7px 0 #0479BD, 8px 8px 0 #0479BD, 9px 9px 0 #0479BD, 10px 10px 0 #0479BD;
}
#heading-t{

  color: #0479BD;
font-family: 'Kanit', sans-serif;
font-size: 22px;
font-weight: 500;
line-height: 26px;
text-align: center;
margin-bottom: 24px;
text-shadow: 1px 1px 0 #5EC8F2, 2px 2px 0 #5EC8F2, 3px 3px 0 #5EC8F2, 4px 4px 0 #5EC8F2, 5px 5px 0 #5EC8F2, 6px 6px 0 #5EC8F2, 7px 7px 0 #5EC8F2, 8px 8px 0 #5EC8F2, 9px 9px 0 #5EC8F2, 10px 10px 0 #5EC8F2;


}

  }



  @media (min-width: 320px) {

    .img-in-chart {
        margin-top: -1px;
        width: 140px;
        height: 140px;
    }

    #canvas {
    max-width: 100%;
    width: 500px;
    height: 320px;
    background-color: #08B0ED;
    margin: 0px auto;
}

#canvas > img {
    float: right;
    /* position: relative; */
    /* text-align: right; */
    /* left: 70px; */
    width: 50%;
    /* height: 50%; */
}
#canvas > div {
    padding-right: 10px;
    padding-left: 10px;
    width: 90%;
    position: absolute;
    top: 200px;
    /* left: 5px; */
}
h2.avatar-heading {
    color: #fff;
    font-family: 'Kanit', sans-serif;
    font-size: 18px;
    font-weight: 100;
    line-height: 25px;
    text-align: left;
    /* margin-bottom: 24px; */
    text-shadow: 1px 1px 0 #0479BD, 2px 2px 0 #0479BD, 3px 3px 0 #0479BD, 4px 4px 0 #0479BD, 5px 5px 0 #0479BD, 6px 6px 0 #0479BD, 7px 7px 0 #0479BD, 8px 8px 0 #0479BD, 9px 9px 0 #0479BD, 10px 10px 0 #0479BD;
}
#heading-t{

  color: #0479BD;
font-family: 'Kanit', sans-serif;
font-size: 22px;
font-weight: 500;
line-height: 26px;
text-align: center;
margin-bottom: 24px;
text-shadow: 1px 1px 0 #5EC8F2, 2px 2px 0 #5EC8F2, 3px 3px 0 #5EC8F2, 4px 4px 0 #5EC8F2, 5px 5px 0 #5EC8F2, 6px 6px 0 #5EC8F2, 7px 7px 0 #5EC8F2, 8px 8px 0 #5EC8F2, 9px 9px 0 #5EC8F2, 10px 10px 0 #5EC8F2;


}
  }



  @media (min-width: 375px) {

    .img-in-chart {
        margin-top: -1px;
        width: 140px;
        height: 140px;
    }

    #canvas {
    max-width: 100%;
    width: 500px;
    height: 300px;
    background-color: #08B0ED;
    margin: 0px auto;
}

#canvas > img {
    float: right;
    /* position: relative; */
    /* text-align: right; */
    /* left: 70px; */
    width: 50%;
    /* height: 50%; */
}
#canvas > div {
    padding-right: 10px;
    padding-left: 10px;
    width: 90%;
    position: absolute;
    top: 200px;
    /* left: 5px; */
}
h2.avatar-heading {
    color: #fff;
    font-family: 'Kanit', sans-serif;
    font-size: 18px;
    font-weight: 100;
    line-height: 25px;
    text-align: left;
    /* margin-bottom: 24px; */
    text-shadow: 1px 1px 0 #0479BD, 2px 2px 0 #0479BD, 3px 3px 0 #0479BD, 4px 4px 0 #0479BD, 5px 5px 0 #0479BD, 6px 6px 0 #0479BD, 7px 7px 0 #0479BD, 8px 8px 0 #0479BD, 9px 9px 0 #0479BD, 10px 10px 0 #0479BD;
}
#heading-t{

  color: #0479BD;
font-family: 'Kanit', sans-serif;
font-size: 22px;
font-weight: 500;
line-height: 26px;
text-align: center;
margin-bottom: 24px;
text-shadow: 1px 1px 0 #5EC8F2, 2px 2px 0 #5EC8F2, 3px 3px 0 #5EC8F2, 4px 4px 0 #5EC8F2, 5px 5px 0 #5EC8F2, 6px 6px 0 #5EC8F2, 7px 7px 0 #5EC8F2, 8px 8px 0 #5EC8F2, 9px 9px 0 #5EC8F2, 10px 10px 0 #5EC8F2;


}
  }



  @media (min-width: 425px) {

    .img-in-chart {
        margin-top: -1px;
        width: 140px;
        height: 140px;
    }

    #canvas {
    max-width: 100%;
    width: 500px;
    height: 300px;
    background-color: #08B0ED;
    margin: 0px auto;
}

#canvas > img {
    float: right;
    /* position: relative; */
    /* text-align: right; */
    /* left: 70px; */
    width: 50%;
    /* height: 50%; */
}
#canvas > div {
    padding-right: 10px;
    padding-left: 10px;
    width: 90%;
    position: absolute;
    top: 200px;
    /* left: 5px; */
}
h2.avatar-heading {
    color: #fff;
    font-family: 'Kanit', sans-serif;
    font-size: 16px;
    font-weight: 100;
    line-height: 25px;
    text-align: left;
    /* margin-bottom: 24px; */
    text-shadow: 1px 1px 0 #0479BD, 2px 2px 0 #0479BD, 3px 3px 0 #0479BD, 4px 4px 0 #0479BD, 5px 5px 0 #0479BD, 6px 6px 0 #0479BD, 7px 7px 0 #0479BD, 8px 8px 0 #0479BD, 9px 9px 0 #0479BD, 10px 10px 0 #0479BD;
}
#heading-t{

  color: #0479BD;
font-family: 'Kanit', sans-serif;
font-size: 22px;
font-weight: 500;
line-height: 26px;
text-align: center;
margin-bottom: 24px;
text-shadow: 1px 1px 0 #5EC8F2, 2px 2px 0 #5EC8F2, 3px 3px 0 #5EC8F2, 4px 4px 0 #5EC8F2, 5px 5px 0 #5EC8F2, 6px 6px 0 #5EC8F2, 7px 7px 0 #5EC8F2, 8px 8px 0 #5EC8F2, 9px 9px 0 #5EC8F2, 10px 10px 0 #5EC8F2;


}
  }



  @media (min-width: 576px) {

    .img-in-chart {
        margin-top: -1px;
        width: 140px;
        height: 140px;
    }

    #canvas {
    max-width: 100%;
    width: 500px;
    height: 300px;
    background-color: #08B0ED;
    margin: 0px auto;
}

#canvas > img {
    float: right;
    /* position: relative; */
    /* text-align: right; */
    /* left: 70px; */
    width: 50%;
    /* height: 50%; */
}
#canvas > div {
    padding-right: 10px;
    padding-left: 10px;
    width: 90%;
    position: absolute;
    top: 200px;
    /* left: 5px; */
}
h2.avatar-heading {
    color: #fff;
    font-family: 'Kanit', sans-serif;
    font-size: 16px;
    font-weight: 100;
    line-height: 25px;
    text-align: left;
    /* margin-bottom: 24px; */
    text-shadow: 1px 1px 0 #0479BD, 2px 2px 0 #0479BD, 3px 3px 0 #0479BD, 4px 4px 0 #0479BD, 5px 5px 0 #0479BD, 6px 6px 0 #0479BD, 7px 7px 0 #0479BD, 8px 8px 0 #0479BD, 9px 9px 0 #0479BD, 10px 10px 0 #0479BD;
}
#heading-t{

  color: #0479BD;
font-family: 'Kanit', sans-serif;
font-size: 22px;
font-weight: 500;
line-height: 26px;
text-align: center;
margin-bottom: 24px;
text-shadow: 1px 1px 0 #5EC8F2, 2px 2px 0 #5EC8F2, 3px 3px 0 #5EC8F2, 4px 4px 0 #5EC8F2, 5px 5px 0 #5EC8F2, 6px 6px 0 #5EC8F2, 7px 7px 0 #5EC8F2, 8px 8px 0 #5EC8F2, 9px 9px 0 #5EC8F2, 10px 10px 0 #5EC8F2;


}
  }


  @media (min-width: 768px) {

    .img-in-chart {
        margin-top: -1px;
        width: 140px;
        height: 140px;
    }

    #canvas {
    max-width: 100%;
    width: 500px;
    height: 300px;
    background-color: #08B0ED;
    margin: 0px auto;
}

#canvas > img {
    float: right;
    /* position: relative; */
    /* text-align: right; */
    /* left: 70px; */
    width: 50%;
    /* height: 50%; */
}
#canvas > div {
    padding-right: 10px;
    padding-left: 10px;
    width: 90%;
    position: absolute;
    top: 200px;
    /* left: 5px; */
}
h2.avatar-heading {
    color: #fff;
    font-family: 'Kanit', sans-serif;
    font-size: 16px;
    font-weight: 100;
    line-height: 25px;
    text-align: left;
    /* margin-bottom: 24px; */
    text-shadow: 1px 1px 0 #0479BD, 2px 2px 0 #0479BD, 3px 3px 0 #0479BD, 4px 4px 0 #0479BD, 5px 5px 0 #0479BD, 6px 6px 0 #0479BD, 7px 7px 0 #0479BD, 8px 8px 0 #0479BD, 9px 9px 0 #0479BD, 10px 10px 0 #0479BD;
}
#heading-t{

  color: #0479BD;
font-family: 'Kanit', sans-serif;
font-size: 22px;
font-weight: 500;
line-height: 26px;
text-align: center;
margin-bottom: 24px;
text-shadow: 1px 1px 0 #5EC8F2, 2px 2px 0 #5EC8F2, 3px 3px 0 #5EC8F2, 4px 4px 0 #5EC8F2, 5px 5px 0 #5EC8F2, 6px 6px 0 #5EC8F2, 7px 7px 0 #5EC8F2, 8px 8px 0 #5EC8F2, 9px 9px 0 #5EC8F2, 10px 10px 0 #5EC8F2;


}
  }



  @media (min-width: 992px) {

    .img-in-chart {
        margin-top: -1px;
        width: 140px;
        height: 140px;
    }

    #canvas {
    max-width: 100%;
    width: 500px;
    height: 300px;
    background-color: #08B0ED;
    margin: 0px auto;
}

#canvas > img {
    float: right;
    /* position: relative; */
    /* text-align: right; */
    /* left: 70px; */
    width: 50%;
    /* height: 50%; */
}
#canvas > div {
    padding-right: 10px;
    padding-left: 10px;
    width: 90%;
    position: absolute;
    top: 200px;
    /* left: 5px; */
}
h2.avatar-heading {
    color: #fff;
    font-family: 'Kanit', sans-serif;
    font-size: 16px;
    font-weight: 100;
    line-height: 25px;
    text-align: left;
    /* margin-bottom: 24px; */
    text-shadow: 1px 1px 0 #0479BD, 2px 2px 0 #0479BD, 3px 3px 0 #0479BD, 4px 4px 0 #0479BD, 5px 5px 0 #0479BD, 6px 6px 0 #0479BD, 7px 7px 0 #0479BD, 8px 8px 0 #0479BD, 9px 9px 0 #0479BD, 10px 10px 0 #0479BD;
}
#heading-t{

  color: #0479BD;
font-family: 'Kanit', sans-serif;
font-size: 22px;
font-weight: 500;
line-height: 26px;
text-align: center;
margin-bottom: 24px;
text-shadow: 1px 1px 0 #5EC8F2, 2px 2px 0 #5EC8F2, 3px 3px 0 #5EC8F2, 4px 4px 0 #5EC8F2, 5px 5px 0 #5EC8F2, 6px 6px 0 #5EC8F2, 7px 7px 0 #5EC8F2, 8px 8px 0 #5EC8F2, 9px 9px 0 #5EC8F2, 10px 10px 0 #5EC8F2;


}

  }



  @media (min-width: 1200px){
    .img-in-chart {
      margin-top: -1px;
      width: 140px;
      height: 140px;
    }
    #canvas {
      max-width: 90%;
      width: 500px;
      height: 350px;
      background-color: #08B0ED;
          margin: 0px auto;

    }

    #canvas > img {
      position: relative;
      text-align: right;

      width: 250px;
      height: 250px;
    }

    #canvas > div {
      width: 480px;
          position: absolute;
          padding-right: 10px;
          padding-left: 10px;
      top: 250px;
      left: 140px;
    }

    h2.avatar-heading {
       color: #fff;
      font-family: 'Kanit', sans-serif;
      font-size: 22px;
      font-weight: 500;
      line-height: 32px;
      text-align: left;

      margin-bottom: 24px;
      text-shadow: 1px 1px 0 #0479BD, 2px 2px 0 #0479BD, 3px 3px 0 #0479BD, 4px 4px 0 #0479BD, 5px 5px 0 #0479BD, 6px 6px 0 #0479BD, 7px 7px 0 #0479BD, 8px 8px 0 #0479BD, 9px 9px 0 #0479BD, 10px 10px 0 #0479BD;
    }

    h2.section-heading {
          color: #0479BD;
      font-family: 'Kanit', sans-serif;
      font-size: 36px;
      font-weight: 500;
      line-height: 56px;
      text-align: center;
      margin-bottom: 24px;
      text-shadow: 1px 1px 0 #5EC8F2, 2px 2px 0 #5EC8F2, 3px 3px 0 #5EC8F2, 4px 4px 0 #5EC8F2, 5px 5px 0 #5EC8F2, 6px 6px 0 #5EC8F2, 7px 7px 0 #5EC8F2, 8px 8px 0 #5EC8F2, 9px 9px 0 #5EC8F2, 10px 10px 0 #5EC8F2;
    }



    #heading-t{

      color: #0479BD;
  font-family: 'Kanit', sans-serif;
  font-size: 36px;
  font-weight: 500;
  line-height: 56px;
  text-align: center;
  margin-bottom: 24px;
  text-shadow: 1px 1px 0 #5EC8F2, 2px 2px 0 #5EC8F2, 3px 3px 0 #5EC8F2, 4px 4px 0 #5EC8F2, 5px 5px 0 #5EC8F2, 6px 6px 0 #5EC8F2, 7px 7px 0 #5EC8F2, 8px 8px 0 #5EC8F2, 9px 9px 0 #5EC8F2, 10px 10px 0 #5EC8F2;
  }


  }

  .bg-dark {
    background-color: #E6F1F5 !important
  }
</style>


<section class="bg-whites hidden-sm hidden-xs" id="about" style="padding: 80px 0 8px 0;  width: 100%; z-index: 1; position: fixed;">
  <div class="container">
    <div class="row">
      <div class="col-md-4 text-center">

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
        </style>

        <div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="{{url('assets/images/avatar/'.$user->avatar)}}" alt="{{$user->name}}" class="img-circle" >
							</figure>
							<div class="profile-info" style="text-align:left">
								<span class="name" style="color: #0591c3; padding-bottom:8px;">{{$user->name}}</span><br>
								<span class="role">{{$user->sub_title}}</span>
							</div>


						</a>



					</div>
      </div>

      <style>
      .navbar-expand-lg a{
        font-size: 18px;
        color:#ACACAC;
      }
      .active {
        color:#666!important;
      }
      .active::after {
    color: #08b0ed;
    display: block;
    content: '';
    width: 60%;
    margin: 0 auto;
    border-bottom: 3px solid #08b0ed;
    padding-bottom: 5px;
}
      .navbar-expand-lg .navbar-nav {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
}
.ml-lg-1, .mx-lg-1 {
    margin-left: .25rem!important;
}

      </style>

      <div class="col-md-4" id="mainNav">
        <div class="navbar-collapse"  id="navbarResponsive">
          <ul class="navbar-expand-lg navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" style="font-size: 18px;" href="#about">ภาพรวม</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" style="font-size: 18px;" href="#portfolio">ประวัติ</a>
            </li>

            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" style="font-size: 18px;" href="#contact">กิจกรรม</a>
            </li>
          </ul>
        </div>
      </div>


      <style>
      .candidate-social {
      padding-top: 12px;
      /* padding: 0; */
      float: right;
  }
.candidate-social li {
  padding-top: 8px;
    list-style: none;
    display: inline-block;
    padding: 0 10px;
}
.candidate-social li a {
    color: #08B0ED;
    font-size: 20px;
    line-height: 20px;
}
      </style>

      <div class="col-md-4">

        <div class="row" style="padding-top: 5px;">
                                      <ul class="candidate-social">
                                          <li class="twitter" >
                                              <a href="#">
                                                  <i class="fa fa-twitter"></i>
                                              </a>
                                          </li>
                                          <li class="facebook">
                                              <a href="#">
                                                  <i class="fa fa-facebook-official"></i>
                                              </a>
                                          </li>
                                          <li class="instagram" >
                                              <a href="#">
                                                  <i class="fa fa-instagram"></i>
                                              </a>
                                          </li>

                                      </ul>
                                      <button type="button" class="btn btn-primary center" style="height: 45px;margin-left:13px;padding: 2px 28px;" data-toggle="modal" data-target="#myModal-2">
                                          <i class="fa fa-comment-o"></i> พูดคุย</button>

<style>
.modal-body .button-z {
    border-radius: 2px;
    background-color: #FFFFFF;
    box-shadow: 0 4px 0 0 #5EC8F2;
    border: 0;
    width: 100%;
    padding: 15px 0px;
    margin-bottom: 10px;
    color: #0479BD;

    font-size: 14px;
    line-height: 21px;
    text-align: center;
    text-shadow: 0 1px 2px rgba(35, 31, 32, 0.24);
}
.form-style-1 input[type=submit]:hover, .form-style-1 input[type=button]:hover {
    border-radius: 2px;
    background-color: #FFFFFF;
    box-shadow: 0 4px 0 0 #5EC8F2;
    border: 0;
    width: 100%;
    padding: 15px 0px;
    margin-bottom: 10px;
    color: #0479BD;
    font-family: Prompt;
    font-size: 14px;
    line-height: 21px;
    text-align: center;
    text-shadow: 0 1px 2px rgba(35, 31, 32, 0.24);
}
</style>

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
        <button class="button-z"><img src="{{url('assets/image/Line_icon-icons.com_66976.png')}}" style="height:20px;"> LINE to @Abhisit_DP</button>
        <button class="button-z"><i class="fa fa-envelope" style="font-size:18px"></i> abhisit.dem@gmail.com</button>
        <p class="p-pop">หรือส่งข้อความ</p>

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
            <label for="exampleInputEmail1">ข้อความ</label>
            <textarea class="form-control" rows="3"></textarea>
          </div>
        </div>

        <div class="text-center">
          <button type="button" class="btn btn-light btn-block" style="border-radius: 3px; color: #08B0ED; padding: 12px;">ส่งข้อความ</button>
        </div>
      </form>





      </div>

    </div>
  </div>
</div>



                                  </div>

                                </div>







    </div>
  </div>
</section>

<style>
blockquote.primary {
    border-color: #0088CC;
}
blockquote {
    padding: 10px 20px;
    margin: 0 0 20px;
    font-size: 17.5px;
    border-left: 3px solid #eee;
}
</style>







<section id="about" style="    padding: 200px 0 50px 0;" >

<style>
.candidate-profile {
    margin-top: 10px;
}
.candidate-profile h2 {
    color: #0479BD;
    font-size: 56px;
    font-weight: 500;
    line-height: 64px;
    text-align: center;
    font-family: 'Kanit', sans-serif;
    max-width: 249px;
    margin: auto auto 24px;
    text-shadow: 1px 1px 0 #5EC8F2, 2px 2px 0 #5EC8F2, 3px 3px 0 #5EC8F2, 4px 4px 0 #5EC8F2, 5px 5px 0 #5EC8F2, 6px 6px 0 #5EC8F2, 7px 7px 0 #5EC8F2, 8px 8px 0 #5EC8F2, 9px 9px 0 #5EC8F2, 10px 10px 0 #5EC8F2, 11px 11px 0 #5EC8F2, 12px 12px 0 #5EC8F2, 13px 13px 0 #5EC8F2, 14px 14px 0 #5EC8F2, 15px 15px 0 #5EC8F2;
}
.candidate-profile p {
    font-family: 'Kanit', sans-serif;
    color: #0479BD;
    font-size: 20px;
    line-height: 30px;
    text-align: center;
}
.candidate-profile hr {
    height: 2px;
    width: 40px;
    background-color: #08B0ED;
}
.candidate-profile p.position {
    color: #4A4A4A;
    font-family: 'Kanit', sans-serif;
    font-size: 20px;
    line-height: 30px;
    text-align: center;

    margin: auto auto 24px;
}
</style>

  <div class="candidate-details container">
      <div class="row">

          <div class="col-md-6 width50 text-center" style="padding-right: 6px; padding-left: 6px;">
            <div class="parent-chart" style="background-color: #f2f8fa; box-shadow: none">
              <div style="margin: 20px auto; width:250px; height:250px;">
                <canvas id="user-2" ></canvas>
              </div>

              <div class="overlay-chart">

                <img class="img-in-chart" src="{{url('assets/images/avatar/'.$user->avatar)}}" style="width:220px; height:220px;">

              </div>

            </div>
          </div>
          <div class="col-md-6 width50 text-center" style="padding-right: 6px; padding-left: 6px;">
              <div class="candidate-profile">
                  <h2>{{$user->name}}</h2>
                  <p>{{$user->sub_title}}</p>
                  <br>
                  <hr style="margin: 0 auto;">
                  <br>
                  <p class="position">{{$user->bio}}</p>
              </div>
          </div>
      </div>
  </div>


<style>
.candidate-profile-2 h2 {
    width: 345px;
    color: #0479BD;
    font-family: 'Kanit', sans-serif;
    font-size: 36px;
    font-weight: 500;
    line-height: 56px;
    text-align: left;
    margin-bottom: 24px;
    text-shadow: 1px 1px 0 #5EC8F2, 2px 2px 0 #5EC8F2, 3px 3px 0 #5EC8F2, 4px 4px 0 #5EC8F2, 5px 5px 0 #5EC8F2, 6px 6px 0 #5EC8F2, 7px 7px 0 #5EC8F2, 8px 8px 0 #5EC8F2, 9px 9px 0 #5EC8F2, 10px 10px 0 #5EC8F2;
}
</style>
  <div class="candidate-details container">
                                <div class="row">

                                  <div class="col-md-6">

                                  </div>
                                  <div class="col-md-6">
                                    <blockquote class="primary" style="height:64px;margin-left: -40px;">

                										</blockquote>
                                  </div>


                                    <div class="col-md-6">

                                      <div class="parent-chart" style="background-color: #f2f8fa; box-shadow: none">
                                        <div style="margin: 20px auto; width:250px; height:250px;">
                                          <canvas id="user-1" ></canvas>
                                        </div>

                                        <div class="overlay-chart">



                                          <img class="img-in-chart" src="{{url('assets/images/avatar/'.$user->avatar)}}">






                                        </div>

                                      </div>


                                    </div>
                                    <div class="col-md-6">
                                        <div class="candidate-profile-2 ">
                                          <h2>สมพงษ์อยากจะผลักดัน เรื่องเหล่านี้ (เป็นพิเศษ)</h2>
                                          <br><br>



                                          @if(isset($objs))
                                              @foreach($objs as $u)



                                              <div class="education">
                                                  <p>
                                                      <span style="background-color: {{$u->color_bg}};">{{$u->num_s}}</span>{{$u->name_cat}}</p>
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


                                            <!-- <button class="btn btn-readmore">แสดงเพิ่ม</button> -->
                                        </div>
                                    </div>
                                </div>
                            </div>




<style>
.candidate-history {
    background: #fff;
    padding: 40px 78px 30px;
    margin-top: 80px;
}
h3.candidate-title {
    color: #0479BD;
    font-family: 'Kanit', sans-serif;
    font-size: 36px;
    font-weight: 500;
    line-height: 56px;
    margin-bottom: 26px;
    text-shadow: 1px 1px 0 #5EC8F2, 2px 2px 0 #5EC8F2, 3px 3px 0 #5EC8F2, 4px 4px 0 #5EC8F2, 5px 5px 0 #5EC8F2, 6px 6px 0 #5EC8F2, 7px 7px 0 #5EC8F2, 8px 8px 0 #5EC8F2, 9px 9px 0 #5EC8F2, 10px 10px 0 #5EC8F2, 11px 11px 0 #5EC8F2, 12px 12px 0 #5EC8F2, 13px 13px 0 #5EC8F2, 14px 14px 0 #5EC8F2, 15px 15px 0 #5EC8F2;
}
.list-circle {
    padding-left: 0px;
    list-style: none;
}
.list-circle li {
    color: #4A4A4A;
    font-family: 'Kanit', sans-serif;
    font-size: 20px;
    font-weight: 300;
    line-height: 30px;
    margin-bottom: 16px;
}
.list-circle li::before {
    content: "";
    border: 3px solid #5EC8F2;
    background-color: #0479BD;
    height: 12px;
    width: 12px;
    border-radius: 50%;
    display: inline-block;
    margin-right: 10px;
}
.experience-time p {
    color: #0479BD;
    font-family: 'Kanit', sans-serif;
    font-size: 20px;
    font-weight: 300;
    line-height: 24px;
    margin-bottom: 0;
    text-shadow: 1px 1px 0 #FFFFFF, 2px 2px 0 #FFFFFF, 3px 3px 0 #FFFFFF;
}
.experience-description h4 {
    color: #0479BD;
    font-family: 'Kanit', sans-serif;
    font-size: 20px;
    font-weight: 500;
    line-height: 30px;
    margin: 0;
}
.experience-description h5 {
    color: #4A4A4A;
    font-family: 'Kanit', sans-serif;
    font-size: 20px;
    font-weight: 300;
    line-height: 30px;
    margin: 0 0 8px;
}
.experience-description h4::before {
    content: "";
    border: 3px solid #5EC8F2;
    background-color: #0479BD;
    height: 12px;
    width: 12px;
    border-radius: 50%;
    display: inline-block;
    margin-right: 10px;
}
.experience-description p {
    color: #4A4A4A;

    font-size: 14px;
    font-weight: 300;
    line-height: 21px;
}
</style>



                            <div class="candidate-history container" id="portfolio">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="candidate-about">
                                            <h3 class="candidate-title">เกี่ยวกับสมพงษ​์</h3>
                                            <ul class="list-circle">
                                                <li>ชอบฟังเพลง Rock เป็นชีวิตจิตใจ</li>
                                                <li>ไข่เจียวคืออาหารโปรด</li>
                                                <li>อภิสิทธิ์ชอบรับโทรศัพท์ด้วยตนเอง</li>
                                                <li>เป็นส.ส.ครั้งแรกตอนอายุ 27 ปี</li>
                                                <li>นิวคาสเซิ่ลคือทีมฟุตบอลทีมโปรด</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <style>
                                    .tm-body:after {
      background: #a05b5b;
      background: -moz-linear-gradient(top, rgba(80, 80, 80, 0) 0%, #505050 8%, #505050 92%, rgba(80, 80, 80, 0) 100%);
      background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #08b0ed), color-stop(100%, #5ec8f2));
      background: -webkit-linear-gradient(top, rgba(37, 75, 212, 0) 0%, #5ec8f2 8%, #5ec8f2 92%, rgba(27, 135, 212, 0) 100%);
      background: -o-linear-gradient(top, rgba(80, 80, 80, 0) 0%, #505050 8%, #505050 92%, rgba(80, 80, 80, 0) 100%);
      background: -ms-linear-gradient(top, rgba(80, 80, 80, 0) 0%, #505050 8%, #505050 92%, rgba(80, 80, 80, 0) 100%);
      background: linear, to bottom, rgba(80, 80, 80, 0) 0%, #505050 8%, #505050 92%, rgba(80, 80, 80, 0) 100%;
      content: '';
      display: block;
      height: 100%;
      left: 22px;
      margin-left: -2px;
      position: absolute;
      top: 25px;
      width: 3px;
      z-index: 1;
      filter: alpha(opacity=35);
      opacity: 0.5;
      height: 90%;
  }
                                    </style>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="candidate-experience">
                                            <h3 class="candidate-title">ประสบการณ์</h3>
                                            <div class="experience">
                                                <div class="row">
                                                    <div class="experience-time col-3 col-md-3">
                                                        <p>ปัจจุบัน</p>
                                                        <p>|</p>
                                                        <p>2540</p>
                                                    </div>
                                                    <div class="experience-description col-9 col-md-9 tm-body">
                                                        <h4>หัวหน้าพรรคประชาธิปัตย์</h4>
                                                        <h5 clss="party" style="padding-left: 27px;">พรรคประชาธิปัตย์</h5>
                                                        <p style="padding-left: 27px;">รีวิวโหงวไกด์อพาร์ตเมนท์ซีน แฟรนไชส์คอนแท็คอิ่มแปร้ สกรัมสคริปต์ สะกอมโชห่วยบัตเตอร์
                                                            อันตรกิริยาแคปปิกอัพ ปิยมิตรแคร์เช็งเม้ง คอลัมน์ แอ็กชั่นสกรัมซามูไรไอติม
                                                            โชห่วยมหาอุปราชางี้ แรลลี
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="experience">
                                                <div class="row">
                                                    <div class="experience-time col-3 col-md-3">
                                                        <p>2540</p>
                                                        <p>|</p>
                                                        <p>2535</p>
                                                    </div>
                                                    <div class="experience-description col-9 col-md-9 tm-body">
                                                        <h4>อาจารย์พิเศษ</h4>
                                                        <h5 clss="party" style="padding-left: 27px;">คณะรัฐศาสตร์ sมหาวิทยาลัยธรรมศาสตร์</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="experience">
                                                <div class="row">
                                                    <div class="experience-time col-3 col-md-3">
                                                        <p>2537</p>
                                                        <p>|</p>
                                                        <p>2534</p>
                                                    </div>
                                                    <div class="experience-description col-9 col-md-9">
                                                        <h4>ส.ส. กรุงเทพฯ เขต 1</h4>
                                                        <h5 clss="party">พรรคประชาธิปัตย์</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="candidate-history-education">
                                            <h3 class="candidate-title">การศึกษา</h3>
                                            <div class="experience">
                                                <div class="row">
                                                    <div class="experience-time col-3 col-md-3">
                                                        <p>2540</p>
                                                        <p>|</p>
                                                        <p>2534</p>
                                                    </div>
                                                    <div class="experience-description col-9 col-md-9">
                                                        <h4>ปริญญาเอกรัฐศาสตร์</h4>
                                                        <h5 clss="party">มหาวิทยาลัยสมมุติ</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="experience">
                                                <div class="row">
                                                    <div class="experience-time col-3 col-md-3">
                                                        <p>2537</p>
                                                        <p>|</p>
                                                        <p>2534</p>
                                                    </div>
                                                    <div class="experience-description col-9 col-md-9">
                                                        <h4>ปริญญาโทบริหารธุรกิจ</h4>
                                                        <h5 clss="party">สถาบันการศึกษา</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



<style>
.candidate-gallery {
    background: #fff;
    padding: 30px 78px 30px;
    border-top: 1px solid #E6F1F5;
}
.gallery-image {
    margin-bottom: 30px;
}

.btn-readmore {
    color: #9B9B9B;
    font-size: 10px;
    line-height: 15px;
    text-align: center;
    border: 1px solid #EEEEEE;
    border-radius: 16px;
    background-color: #FFFFFF;

}
.img-responsive{
  width: 100%
}
</style>




                            <div class="candidate-gallery container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <h3 class="candidate-title">รูปภาพ</h3>
                                            <div class="gallery-image">
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-4 gallery">
                                                        <img class=" img-responsive" src="{{url('assets/image/vote-avatar-13.png')}}" >

                                                    </div>
                                                    <div class="col-md-4 col-sm-4 gallery">
                                                        <img class=" img-responsive" src="{{url('assets/image/vote-avatar-13.png')}}" >

                                                    </div>
                                                    <div class="col-md-4 col-sm-4 gallery">
                                                        <img class=" img-responsive" src="{{url('assets/image/vote-avatar-13.png')}}" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 text-center">
                                            <button class="btn btn-readmore ">เเสดงเพิ่ม</button>
                                              </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

<style>
.candidate-schedule {
    padding: 70px 0;
}
.candidate-schedule .candidate-title {
    text-align: center;
}
.center {
    float: none;
    margin: 0 auto;
    display: block;
}
.candidate-schedule .schedule {
    border-radius: 2px;
    background-color: #FFFFFF;
    box-shadow: 0 2px 12px rgba(0, 0, 0, 0.06);
    padding: 16px;
    margin-bottom: 16px;
}
.schedule .schedule-date p {
    color: #0479BD;
    font-family: 'Kanit', sans-serif;
    font-size: 14px;
    font-weight: 300;
    line-height: 21px;
    margin: 0;
    text-shadow: 1px 1px 0 #FFFFFF, 2px 2px 0 #FFFFFF, 3px 3px 0 #FFFFFF;
}
.schedule .schedule-description p {
    color: #4A4A4A;
    font-family: 'Kanit', sans-serif;
    font-size: 14px;
    font-weight: 300;
    line-height: 21px;
}
.social-feed-element {
  /*  margin-left: 15px;
    margin-right: 15px;
    float: left;
    -webkit-box-flex: 0;
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 30%;
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px; */


    background-color: none;
  display: inline-grid;
  top:0;
  width: 31%;
  cursor: pointer;
  padding-right: 10px;
  padding-left: 10px;
  margin-left: 10px;
  margin-right: 10px;




}

.social-feed-element:first-child {
    margin-top: 28px;
}
</style>
                            <div class="candidate-schedule container">
                                <div class="row">
                                  <div class="col-md-12">
                                    <h3 class="candidate-title">กำหนดการ</h3>
                                    </div>
                                    <div class="col-md-6 col-sm-6 center">
                                        <div class="col-md-12">
                                            <div class="schedule">
                                                <div class="row">
                                                    <div class="col-3 col-md-3 schedule-date">
                                                        <p>12 มกราคม</p>
                                                    </div>
                                                    <div class="col-9 col-md-9 schedule-description">
                                                        <p>ร่วมเสวนา “เศรษฐกิจไทย 4.0” สถาบันบัณฑิตพัฒนบริหารศาสตร์</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="schedule">
                                                <div class="row">
                                                    <div class="col-3 col-md-3 schedule-date">
                                                        <p>12 มกราคม</p>
                                                    </div>
                                                    <div class="col-9 col-md-9 schedule-description">
                                                        <p>ร่วมเสวนา “เศรษฐกิจไทย 4.0” สถาบันบัณฑิตพัฒนบริหารศาสตร์</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="schedule">
                                                <div class="row">
                                                    <div class="col-3 col-md-3 schedule-date">
                                                        <p>12 มกราคม</p>
                                                    </div>
                                                    <div class="col-9 scol-md-9 schedule-description">
                                                        <p>ร่วมเสวนา “เศรษฐกิจไทย 4.0” สถาบันบัณฑิตพัฒนบริหารศาสตร์</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="schedule">
                                                <div class="row">
                                                    <div class="col-3 col-md-3 schedule-date">
                                                        <p>12 มกราคม</p>
                                                    </div>
                                                    <div class="col-9 scol-md-9 schedule-description">
                                                        <p>ร่วมเสวนา “เศรษฐกิจไทย 4.0” สถาบันบัณฑิตพัฒนบริหารศาสตร์</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>





                                </div>
                            </div>




                            <div class="candidate-social-feed container">
                            <div class="row">
                              <div class="col-md-12">
                                <h3 class="candidate-title text-center">Social Feed</h3>
                                </div>


                                <div class="col-md-12">
                                    <div class="row">

                                        <section class="feed" style="    padding: 2rem 0;">
                                            <div class="container" id="container">
                                                <div class="social-feed-container col-md-12" id="images">

                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>

                            </div>
                        </div>

</section>




<input type="hidden" class="input field-left" value="@littlereveurs" id="query">

@endsection





@section('scripts')
<script src="{{url('js/freelancer.min.js')}}"></script>
<script src="{{url('social-feed-gh-pages/js/jquery.min.js')}}"></script>
<script src="{{url('front/js/Chart.bundle.js?v1')}}"></script>


<script src="{{url('social-feed-gh-pages/js/codebird.js')}}"></script>
<script src="{{url('social-feed-gh-pages/js/doT.min.js')}}"></script>
<script src="{{url('social-feed-gh-pages/js/moment.min.js')}}"></script>
<script src="{{url('social-feed-gh-pages/js/jquery.socialfeed.js')}}"></script>





<script>




    $(document).ready(function() {

        var updateFeed = function() {

            var initialQuery = $('#query').val();
            initialQuery = initialQuery.replace(" ", "");
            var queryTags = initialQuery.split(",");
            $('.social-feed-container').socialfeed({
                // FACEBOOK
                facebook: {
                    accounts: queryTags,
                    limit: 10,
                    access_token: '150849908413827|a20e87978f1ac491a0c4a721c961b68c',
                },

                // Twitter
            /*    twitter: {
                    accounts: queryTags,
                    limit: 2,
                    consumer_key: 'qzRXgkI7enflNJH1lWFvujT2P',
                    consumer_secret: '8e7E7gHuTwyDHw9lGQFO73FcUwz9YozT37lEvZulMq8FXaPl8O',
                },

                instagram: {
                    accounts: queryTags,
                    limit: 2,
                    client_id: '88b4730e0e2c4b2f8a09a6184af2e218',
                    access_token: ''
                },*/

                // GENERAL SETTINGS
                length: 200,
                show_media: true,
                template : "{{url('social-feed-gh-pages/template.html')}}",
                // Moderation function - if returns false, template will have class hidden
                moderation: function(content) {
                    return (content.text) ? content.text.indexOf('porn') == -1 : true;
                },
                //update_period: 5000,
                // When all the posts are collected and displayed - this function is evoked
                callback: function() {
                    console.log('all posts are collected');
                }
            });
        };

        updateFeed();


    });
    </script>





<script type="text/javascript">

//document.getElementById("doughnutChart").style.height = '200px';


  var ctxD = document.getElementById("user-2").getContext('2d');
  var myLineChart = new Chart(ctxD, {
    type: 'doughnut',
    data: {
      labels: [
        @if(isset($objs))
            @foreach($objs as $u)
          "{{$u->name_cat}}",
          @endforeach
        @endif
              ],
      datasets: [{
        data: [
          @if(isset($objs))
              @foreach($objs as $u)
            "{{$u->sort_result}}",
            @endforeach
          @endif
                             ],
        backgroundColor: [
          @if(isset($objs))
              @foreach($objs as $u)
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








</script>


<script type="text/javascript">

//document.getElementById("doughnutChart").style.height = '200px';


  var ctxD = document.getElementById("user-1").getContext('2d');
  var myLineChart = new Chart(ctxD, {
    type: 'doughnut',
    data: {
      labels: [
        @if(isset($objs))
            @foreach($objs as $u)
          "{{$u->name_cat}}",
          @endforeach
        @endif
              ],
      datasets: [{
        data: [
          @if(isset($objs))
              @foreach($objs as $u)
            "{{$u->sort_result}}",
            @endforeach
          @endif
                             ],
        backgroundColor: [
          @if(isset($objs))
              @foreach($objs as $u)
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








</script>
@stop('scripts')
