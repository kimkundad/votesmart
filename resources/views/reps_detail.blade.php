@extends('layouts.app')

@section('content')
<!-- Navigation -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<link href="{{url('social-feed-gh-pages/css/jquery.socialfeed.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{url('assets/magnific-popup/magnific-popup.css')}}">

<div id="about"></div>

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
    ul.navbar-nav.ml-auto {
    float: none;
    margin: auto;
}
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
<style>
    .btn-asa:hover {
        background:#08B0ED;
        color:#fff;
    }
.view-more .plus-sign{
  padding: 5px;
}
.actives {
  color:#666!important;
}
.actives::after {
color: #08b0ed;
display: block;
content: '';
width: 60%;
margin: 0 auto;
border-bottom: 3px solid #08b0ed;
padding-bottom: 5px;
}

.ml-lg-1, .mx-lg-1 {
margin-left: .25rem!important;
}

</style>
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
.navbar-expand-lg {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start;
}
#mainNav .navbar-nav > li.nav-item > a.nav-link.active, #mainNav .navbar-nav > li.nav-item > a.nav-link:focus.active {
    color: #495057 !important;
    background-color: transparent;
}
#mainNav .navbar-nav > li.nav-item > a.nav-link, #mainNav .navbar-nav > li.nav-item > a.nav-link:focus {
    font-size: .9rem;
    font-weight: 700;
    text-transform: uppercase;
    color: #ccc;
}
.btn-asa:hover {
    border: 1px solid #5EC8F2;
    border-radius: 24px;
    padding: 10px 30px;
    font-weight: 400;
    color: #5EC8F2;
    font-family: 'Kanit', sans-serif;
    font-size: 14px;
    line-height: 21px;
    text-align: center;
    text-shadow: 0 1px 2px 0 rgba(35,31,32,0.24);
}
</style>



<section class="bg-whites visible-sm visible-xs page-header-sub"  style="padding: 65px 0 0px 0;  width: 100%; z-index: 1; position: fixed;">
  <div class="container">
    <div class="row">
      <div class="col-md-12 " style="border-bottom: 1px solid #f3f0f0;     height: 65px;">



        <div id="userbox" class="userbox" style="left: -5px;  width: 300px;  margin: 10px 1px 10px 10px; padding-bottom:10px;">
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


          <button type="button" class="btn btn-asa center" style="height: 45px; float: right; margin-left:0px;  right: 8px; top: 8px; background-color: #fff; position: absolute;;  padding: 2px 10px;" data-toggle="modal" data-target="#myModal-2">
              <i class="fa fa-comment-o"></i> พูดคุย</button>



      </div>





      <div class="col-6 m1 menu" id="mainNav" style="background-color:rgba(255, 255, 255, 0.1); border: none;">
        <div class="navbar-collapse menu-center"  id="navbarResponsive">
          <ul class="navbar-expand-lg navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1" style="padding-left: 2px !important; padding-right: 2px !important;">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" style="font-size: 12px; width: 45px;" href="#about">ภาพรวม</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1" style="padding-left: 2px !important; padding-right: 2px !important;">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" style="font-size: 12px;" href="#portfolio">ประวัติ</a>
            </li>

            <li class="nav-item mx-0 mx-lg-1" style="padding-left: 2px !important; padding-right: 2px !important;">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" style="font-size: 12px;" href="#contact">กิจกรรม</a>
            </li>
          </ul>
        </div>


      </div>



      <div class="col-6">

        <div class="row" style="padding-top: 5px;">
                                      <ul class="candidate-social" style="padding-top: 10px; right: 0;   position: absolute;">


                                        @if($user->tw != null)
                                          <li class="twitter" style="padding-left: 0;">
                                              <a href="https://www.twitter.com/{{substr($user->tw, 1)}}" target="_blank" style="font-size: 16px; line-height: 10px;">
                                                  <i class="fa fa-twitter"></i>
                                              </a>
                                          </li>
                                        @endif

                                        @if($user->fb != null)
                                          <li class="facebook" >
                                              <a href="https://www.facebook.com/{{substr($user->fb, 1)}}" target="_blank" style="font-size: 16px; line-height: 10px;">
                                                  <i class="fa fa-facebook-official"></i>
                                              </a>
                                          </li>
                                        @endif

                                        @if($user->ig != null)
                                          <li class="instagram" >
                                              <a href="https://www.instagram.com/{{substr($user->ig, 1)}}" target="_blank" style="font-size: 16px; line-height: 10px;">
                                                  <i class="fa fa-instagram"></i>
                                              </a>
                                          </li>
                                        @endif



                                      </ul>


                                  </div>

                                </div>


    </div>
  </div>
</section>

<section class="bg-whites hidden-sm hidden-xs page-header-sub"  style="padding: 80px 0 8px 0;  width: 100%; z-index: 1; position: fixed;">
  <div class="container">
    <div class="row">
      <div class="col-md-4 text-center">



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



      <div class="col-md-4 m1 menu" id="mainNav">
        <div class="navbar-collapse menu-center"  id="navbarResponsive">
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

      <div class="col-md-4">

        <div class="row" style="padding-top: 5px;">
                                      <ul class="candidate-social">

                                        @if($user->tw != null)
                                          <li class="twitter" >
                                              <a href="https://www.twitter.com/{{substr($user->tw, 1)}}" target="_blank">
                                                  <i class="fa fa-twitter"></i>
                                              </a>
                                          </li>
                                        @endif

                                        @if($user->fb != null)
                                          <li class="facebook">
                                              <a href="https://www.facebook.com/{{substr($user->fb, 1)}}" target="_blank">
                                                  <i class="fa fa-facebook-official"></i>
                                              </a>
                                          </li>
                                        @endif

                                        @if($user->ig != null)
                                          <li class="instagram" >
                                              <a href="https://www.instagram.com/{{substr($user->ig, 1)}}" target="_blank">
                                                  <i class="fa fa-instagram"></i>
                                              </a>
                                          </li>
                                        @endif
                                      </ul>
                                      <button type="button" class="btn btn-asa center" style="height: 45px;margin-left:13px;padding: 2px 28px;background-color: #fff;" data-toggle="modal" data-target="#myModal-2">
                                          <i class="fa fa-comment-o"></i> พูดคุย</button>

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







<section style="padding: 200px 0 50px 0; margin: 0 auto;width:95%" >

<style>
    blockquote {
        display:none;
    }
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
    /* max-width: 249px; */
    margin: auto auto 24px;
    text-shadow: 1px 1px 0 #5EC8F2, 2px 2px 0 #5EC8F2, 3px 3px 0 #5EC8F2, 4px 4px 0 #5EC8F2, 5px 5px 0 #5EC8F2, 6px 6px 0 #5EC8F2, 7px 7px 0 #5EC8F2, 8px 8px 0 #5EC8F2;
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
.set-rotate{

    top: 170px;
    position: fixed;
    background:none !important;
}
.set-rotate2{
    position: absolute;
    top: 360px;
    background:none !important;
}
.img-in-chart-in2{
  margin-top: -3px;
  width: 220px;
  height: 220px;
}
.img-in-chart-in3 {
    margin-top: -3px;
    width: 150px;
    height: 150px;
}
</style>

  <div class="candidate-details container hidden-sm hidden-xs">
      <div class="row">

        <div class="col-md-6" style="padding-left: 100px;">

          <div class="parent-chart set-rotate" id="btn_home2" style="transparent !important; box-shadow: none">
            <div style="margin: 20px auto; width:250px; height:250px;border-radius: 50%;
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.12);" >
              <canvas id="user-1" class="icon-rotate"></canvas>
            </div>

            <div class="overlay-chart">



              <img class="img-in-chart" src="{{url('assets/images/avatar/'.$user->avatar)}}" id="myavatar" style="max-width:220px; max-height:220px; width:220px; height:220px; margin-top: 0px;">






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

              </div>
          </div>
      </div>
  </div>


  <div class="candidate-details container visible-sm visible-xs" style="margin-top: -5px;">
      <div class="row">
        <div class="col-md-6 width50 text-center">
            <div class="candidate-profile">
                <h2 style="font-size: 30px; line-height: 20px;">{{$user->name}}</h2>
                <p style="font-size: 16px;    margin-bottom: 0rem;">{{$user->sub_title}}</p>
                <br>

            </div>
        </div>

        <div class="col-md-6" >

          <div class="parent-chart" style="background-color: #f2f8fa; box-shadow: none">
            <div style="margin: 0px auto; width:250px; height:250px;">
              <canvas id="user-2" ></canvas>
            </div>

            <div class="overlay-chart">



              <img class="img-in-chart-in3" src="{{url('assets/images/avatar/'.$user->avatar)}}">






            </div>

          </div>
          <p class="position text-center" style="display:none;">{{$user->bio}}</p>

        </div>
        </div>
        </div>






<style>
.candidate-profile-2 h2 {

    color: #0479BD;
    font-family: 'Kanit', sans-serif;
    font-size: 36px;
    font-weight: 500;
    line-height: 56px;
    text-align: left;
    margin-bottom: 24px;
    text-shadow: 1px 1px 0 #5EC8F2, 2px 2px 0 #5EC8F2, 3px 3px 0 #5EC8F2, 4px 4px 0 #5EC8F2, 5px 5px 0 #5EC8F2, 6px 6px 0 #5EC8F2, 7px 7px 0 #5EC8F2, 8px 8px 0 #5EC8F2, 9px 9px 0 #5EC8F2, 10px 10px 0 #5EC8F2;
}
.read-more-state {
  display: none;
}

.read-more-target {
  opacity: 0;
  max-height: 0;
  font-size: 0;
  transition: .25s ease;
}

.read-more-state:checked ~ .read-more-wrap .read-more-target {
  opacity: 1;
  font-size: inherit;
  max-height: 999em;
}

.read-more-state ~ .read-more-trigger:before {
  content: 'แสดงเพิ่ม';
}

.read-more-state:checked ~ .read-more-trigger:before {
  content: 'แสดงลดลง';
}

.read-more-trigger {
  cursor: pointer;
  display: inline-block;
  padding: 0 .5em;
  color: #666;
  font-size: .9em;
  line-height: 2;
  border: 1px solid #ddd;
  border-radius: .25em;
}
.btn-readmore{
  padding: 7px 15px;
color: #495057;
font-size: 12px;
line-height: 15px;
text-align: center;
border: 1px solid #6c757d;
border-radius: 16px;
background-color: #FFFFFF;
}
</style>

  <div class="candidate-details container">
                                <div class="row">

                                  <br>
                                  <div class="col visible-sm visible-xs" style=" height:10px;">
                                    &nbsp
                                  </div>
                                  <div class="col visible-sm visible-xs" style="border-left:2px solid #5ec8f2;; height:45px;">
                                    <br>
                                    <br>
                                  </div>

                                  <div class="col-md-6">




                                  </div>


                                  <div class="col-md-6 hidden-sm hidden-xs">
                                    <blockquote class="primary" style="height:64px;margin-left: -40px;" style="display:none">
                                    <p class="position">{{$user->bio}}</p>
                										</blockquote>
                                  </div>


                                    <div class="col-md-6">




                                    </div>

                                    <div class="col-md-6 rep_detail2" style="">
                                      <input type="checkbox" class="read-more-state btn-readmore" id="post-1" />
                                        <div class="candidate-profile-2 read-more-wrap" style="text-align: left;">
                                        <h2 class="hidden-sm hidden-xs">{{$user->name}} อยากจะผลักดัน เรื่องเหล่านี้ (เป็นพิเศษ)</h2>
                                          <h2 class="text-center visible-sm visible-xs" style="font-size: 28px;">ประเด็นสำคัญ</h2>
                                          <br><br>



                                          @if(isset($objs))
                                              @foreach($objs as $u)



                                              <div class="education
                                               @if($u->num_s > 3)
                                                read-more-target
                                                @endif">
                                                  <p>
                                                      <span style="background-color: {{$u->color_bg}};">{{$u->num_s}}</span>{{$u->name_cat}}</p>
                                                  <ul >
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
                                        <label for="post-1" class="read-more-trigger btn-readmore btn-res" style="position: absolute; "></label>
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
    font-size: 42px;
    font-weight: 500;
    line-height: 56px;
    margin-bottom: 26px;
    text-shadow: 1px 1px 0 #5EC8F2, 2px 2px 0 #5EC8F2, 3px 3px 0 #5EC8F2, 4px 4px 0 #5EC8F2, 5px 5px 0 #5EC8F2, 6px 6px 0 #5EC8F2, 7px 7px 0 #5EC8F2, 8px 8px 0 #5EC8F2;

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

<div id="portfolio"></div>


<div class="candidate-history container visible-sm visible-xs" style="padding: 40px 15px 30px;">
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <div class="candidate-about">
                <h3 class="candidate-title" style="text-align: center; font-size: 22px;">เกี่ยวกับ {{$user->name}}</h3>
                <ul class="list-circle">
                  @if(isset($abouts))
                      @foreach($abouts as $u)
                    <li style="font-size: 16px;">{{$u->about}}</li>
                    @endforeach
                @endif
                </ul>
            </div>
        </div>
        <style>

        </style>
        <div class="col-md-6 col-sm-6">
            <div class="candidate-experience">
                <h3 class="candidate-title" id="{{$b=0}}" style="text-align: center; font-size: 22px;">ประสบการณ์</h3>


                @if(isset($exper))
                    @foreach($exper as $u)

                <div class="experience" >
                    <div class="row">
                        <div class="experience-time col-3 col-md-3" style="font-size: 16px;">
                            <p style="font-size: 14px;">{{$u->end_year}}</p>
                            <p>|</p>
                            <p style="font-size: 14px;">{{$u->start_year}}</p>
                        </div>
                        <div class="experience-description col-9 col-md-9
                        @if($b == 0)
                        tm-body
                        @endif

                        ">
                            <h4 style="font-size: 14px;">{{$u->head}}</h4>
                            <h5 clss="party" style="padding-left: 27px;font-size: 14px;">{{$u->sub_head}}</h5>
                            <p id="{{$b++}}" style="padding-left: 27px;">{{$u->detail}}
                            </p>
                        </div>
                    </div>
                </div>

                @endforeach
            @endif


            </div>
            <div class="candidate-history-education">
                <h3 class="candidate-title" id="{{$a=0}}" style="text-align: center; font-size: 22px;">การศึกษา</h3>

                @if(isset($education))
                    @foreach($education as $u)
                <div class="experience">
                    <div class="row">
                        <div class="experience-time col-3 col-md-3">
                            <p style="font-size: 14px;">{{$u->end_year}}</p>
                            <p>|</p>
                            <p style="font-size: 14px;">{{$u->start_year}}</p>
                        </div>
                        <div class="experience-description col-9 col-md-9 @if($a == 0)
                        tm-body
                        @endif">
                            <h4 style="font-size: 14px;">{{$u->head}}</h4>
                            <h5 clss="party" id="{{$a++}}" style="padding-left: 27px; font-size: 14px;">{{$u->detail}}</h5>
                        </div>
                    </div>
                </div>
                <br>
                @endforeach
            @endif


            </div>
        </div>
    </div>
</div>



                            <div class="candidate-history container hidden-sm hidden-xs" >
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="candidate-about">
                                            <h3 class="candidate-title">เกี่ยวกับ {{$user->name}}</h3>
                                            <ul class="list-circle">
                                              @if(isset($abouts))
                                                  @foreach($abouts as $u)
                                                <li>{{$u->about}}</li>
                                                @endforeach
                                            @endif
                                            </ul>
                                        </div>
                                    </div>
                                    <style>

                                    </style>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="candidate-experience">
                                            <h3 class="candidate-title" id="{{$j=0}}">ประสบการณ์</h3>


                                            @if(isset($exper))
                                                @foreach($exper as $u)

                                            <div class="experience" >
                                                <div class="row">
                                                    <div class="experience-time col-3 col-md-3">
                                                        <p>{{$u->end_year}}</p>
                                                        <p>|</p>
                                                        <p>{{$u->start_year}}</p>
                                                    </div>
                                                    <div class="experience-description col-9 col-md-9 @if($j == 0)
                                                    tm-body
                                                    @endif">
                                                        <h4>{{$u->head}}</h4>
                                                        <h5 clss="party" style="padding-left: 27px;">{{$u->sub_head}}</h5>
                                                        <p id="{{$j++}}" style="padding-left: 27px;">{{$u->detail}}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            @endforeach
                                        @endif


                                        </div>
                                        <div class="candidate-history-education">
                                            <h3 class="candidate-title" id="{{$k=0}}">การศึกษา</h3>

                                            @if(isset($education))
                                                @foreach($education as $u)
                                            <div class="experience">
                                                <div class="row">
                                                    <div class="experience-time col-3 col-md-3">
                                                        <p>{{$u->end_year}}</p>
                                                        <p>|</p>
                                                        <p>{{$u->start_year}}</p>
                                                    </div>
                                                    <div class="experience-description col-9 col-md-9 @if($k == 0)
                                                    tm-body
                                                    @endif">
                                                        <h4 >{{$u->head}}</h4>
                                                        <h5 clss="party" id="{{$k++}}" style="padding-left: 27px;">{{$u->detail}}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            @endforeach
                                        @endif


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
.img_container img {
    -webkit-transform: scale(1.2);
    transform: scale(1.2);
    -webkit-transition: all .5s ease;
    transition: all .5s ease;
    -webkit-backface-visibility: hidden;
}
</style>




                            <div class="candidate-gallery container visible-sm visible-xs" style="padding: 30px 15px 30px;">
                                <div class="row">
                                    <div class="col-md-12">
                                      <h3 class="candidate-title" style="text-align: center; font-size: 22px;     margin-bottom: 0px;">รูปภาพ</h3>
                                        <div class="row">

                                            <div class="gallery-image" style="margin-bottom: 10px;">
                                                <div class="row magnific-gallery" id="load-data" style="padding: 15px;">







                                                  @if(isset($galleries))



                                                  @foreach($galleries as $u)



                                                  <div class="col-6 gallery" data-ids="{{ $u->id }}" style="    padding-right: 5px; padding-left: 5px;">
                                                    <div class="img_container" style="max-height: 225px; overflow: hidden; position: relative; margin-bottom:10px;">
                                                      <a class="example-image-link" href="{{url('assets/images/all_image/'.$u->image)}}">
                                                      <img class=" img-responsive" src="{{url('assets/images/all_image/'.$u->image)}}" >
                                                    </a>
                                                    </div>
                                                  </div>




                                                  @endforeach









                                                  @endif



                                                </div>
                                            </div>
                                            <div class="col-md-12 text-center" id="remove-row">
                                            <button class="btn btn-readmore " id="btn-more" data-id="{{ $u->id }}" data-user_id="{{ $user->id }}">เเสดงเพิ่ม</button>
                                          </div>
                                        </div>

                                    </div>
                                </div>
                            </div>




                            <div class="candidate-gallery container hidden-sm hidden-xs">
                                <div class="row">
                                    <div class="col-md-12">
                                      <div class="text-center">
                                        <h3 class="candidate-title">รูปภาพ</h3>
                                      </div>
                                        <div class="row">


                                            <div class="gallery-image">
                                                <div class="row magnific-gallery" id="load-data">







                                                  @if(isset($galleries))



                                                  @foreach($galleries as $u)



                                                  <div class="col-md-4 col-sm-4 gallery" data-ids="{{ $u->id }}">
                                                    <div class="img_container" style="max-height: 225px; height: 225px; min-height: 225px; overflow: hidden; position: relative; margin-bottom:10px;">
                                                      <a class="example-image-link" href="{{url('assets/images/all_image/'.$u->image)}}">
                                                      <img class=" img-responsive" src="{{url('assets/images/all_image/'.$u->image)}}" >
                                                    </a>
                                                    </div>
                                                  </div>




                                                  @endforeach









                                                  @endif



                                                </div>
                                            </div>
                                            <div class="col-md-12 text-center" id="remove-row">
                                            <button class="btn btn-readmore " id="btn-more" data-id="{{ $u->id }}" data-user_id="{{ $user->id }}">เเสดงเพิ่ม</button>
                                          </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

<style>
.candidate-schedule {
    padding: 40px 0;
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

<?php
function DateThai($strDate)
{
$strYear = date("Y",strtotime($strDate))+543;
$strMonth= date("n",strtotime($strDate));
$strDay= date("j",strtotime($strDate));
$strHour= date("H",strtotime($strDate));
$strMinute= date("i",strtotime($strDate));
$strSeconds= date("s",strtotime($strDate));
$strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
$strMonthThai=$strMonthCut[$strMonth];
return "$strDay $strMonthThai";
}
 ?>
                            <div class="candidate-schedule container" id="contact">
                                <div class="row">
                                  <div class="col-md-12">
                                    <h3 class="candidate-title hidden-sm hidden-xs" >กำหนดการ</h3>
                                    <h3 class="candidate-title visible-sm visible-xs" style="font-size: 22px; margin-bottom: 10px;">กำหนดการ</h3>
                                    </div>
                                    <div class="col-md-6 col-sm-6 center">
                                        <div class="col-md-12">

                                          @if(isset($timelines))
                                              @foreach($timelines as $u)


                                              <div class="schedule">
                                                  <div class="row">
                                                      <div class="col-3 col-md-3 schedule-date">
                                                          <p><?php echo DateThai($u->day_start); ?></p>
                                                      </div>
                                                      <div class="col-9 col-md-9 schedule-description">
                                                          <p>{{$u->detail}}</p>
                                                      </div>
                                                  </div>
                                              </div>


                                          @endforeach
                                      @endif






                                        </div>
                                    </div>





                                </div>
                            </div>

<style>
@media (min-width: 280px) {
  .social-feed-element, .social-feed-element  {
      overflow: initial;
      zoom: 1;
      width: 100%
  }
}
@media (min-width: 320px) {
  .social-feed-element, .social-feed-element  {
      overflow: initial;
      zoom: 1;
      width: 100%
  }
}
@media (min-width: 350px) {
  .social-feed-element, .social-feed-element  {
      overflow: initial;
      zoom: 1;
      width: 100%
  }
}
@media (min-width: 360px) {
  .social-feed-element, .social-feed-element  {
      overflow: initial;
      zoom: 1;
      width: 100%
  }
}
@media (min-width: 375px) {
  .social-feed-element, .social-feed-element  {
      overflow: initial;
      zoom: 1;
      width: 100%
  }
}
@media (min-width: 425px) {
  .social-feed-element, .social-feed-element  {
      overflow: initial;
      zoom: 1;
      width: 100%
  }
}
@media (min-width: 576px) {
  .social-feed-element, .social-feed-element  {
      overflow: initial;
      zoom: 1;
      width: 100%
  }
}
@media (min-width: 768px) {
  .social-feed-element, .social-feed-element  {
      overflow: initial;
      zoom: 1;
      width: 100%
  }
}
@media (min-width: 992px) {
  .social-feed-element, .social-feed-element  {
      overflow: initial;
      zoom: 1;
      width: 50%
  }
  .media-body{
    width: 100%;
  }
}
@media (min-width: 1200px) {
  .social-feed-element, .social-feed-element  {
      overflow: initial;
      zoom: 1;
      width: 31%
  }
  .media-body{
    width: 79%;
  }
}
</style>


                            <div class="candidate-social-feed container">
                            <div class="row">
                              <div class="col-md-12">
                                <h3 class="candidate-title text-center hidden-sm hidden-xs" style="margin-bottom: 30px;">Social Feed</h3>
                                <h3 class="candidate-title text-center visible-sm visible-xs" style="font-size: 22px; margin-bottom:20px;    margin-top: -19px;">Social Feed</h3>
                                </div>


                                <div class="col-md-12">
                                    <div class="row">



                                        <section class="feed " style="    padding: 0rem 0;">

                                          <style>

                                          .social-feed-element .media-body div {
                                            margin-top: 40px;
                                            width: 100%;
                                              color: #666;
                                              line-height: 20px;
                                          }

                                          </style>
                                            <div class="container" id="container" >

                                              <div class="social-feed-container col-md-12" id="images" style="width: 100%; padding-right: 1px; padding-left: 1px;">

                                            </div>


                                        </section>

                                    </div>
                                </div>

                            </div>
                        </div>

</section>






@endsection





@section('scripts')


<script src="{{url('social-feed-gh-pages/js/jquery.min.js')}}"></script>
<script src="{{url('front/js/Chart.bundlev2.js?v1')}}"></script>

<script src="{{url('social-feed-gh-pages/js/codebird.js')}}"></script>
<script src="{{url('social-feed-gh-pages/js/doT.min.js')}}"></script>
<script src="{{url('social-feed-gh-pages/js/moment.min.js')}}"></script>
<script src="{{url('social-feed-gh-pages/js/jquery.socialfeed.js')}}"></script>
<!--<script src="{{url('js/instafeed.min.js')}}"></script> -->

<!-- <script src="//unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script> -->

<!--
<script type="text/javascript">


var feed = new Instafeed({
		get: 'user',
		userId: 2024437698,
    limit: 2,
    clientId: '2ddfdc0d93fc41f29a7a7c9fda0bf926',
		accessToken: '2024437698.1677ed0.76679983b46549af8b1ce7f9645108c0',
		target: 'instagram',
		resolution: 'low_resolution',
		after: function() {
			var el = document.getElementById('instagram');
			if (el.classList)
				el.classList.add('show');
			else
				el.className += ' ' + 'show';
        console.log(el.className);
		}
});

feed.run();

</script>

-->

<style>
.juicer-feed h1.referral{
  display: none !important;
}
.social-feed-container {
    column-gap: 0 !important;
    column-count: 1;
    -webkit-column-count: 1;
    -moz-column-count: 1;
}
</style>

<script>
    $(document).ready(function() {
            var updateFeed = function() {
            var initialQuery = '{{$user->ig}}, {{$user->tw}}';
            console.log(initialQuery)
            initialQuery = initialQuery.replace(" ", "");
            var queryTags = initialQuery.split(",");
            $('.social-feed-container').socialfeed({

                // Twitter
             twitter: {
                    accounts: queryTags,
                    limit: 3,
                    consumer_key: 'E4KItZqMqlgycbZL4WGCme3Ih',
                    consumer_secret: '1UT8lDUyOpWtgGcfkmcxfs7L7RIr6PFHIpZhZRGWI6tpVm00IX',
                },
                instagram: {
                   accounts: queryTags,
                   limit: 3,
                   user_id: '{{$user->ig_id}}',
                   access_token: '2024437698.1677ed0.76679983b46549af8b1ce7f9645108c0'
               },
                // GENERAL SETTINGS
                //        return "https://access.line.me/oauth2/v2.1/authorize?response_type" . "&client_id=" . getenv('LINE_CHANNEL_ID') . "&redirect_uri=" . $encodedCallbackUrl . "&state=" . $state . "&scope=Email%20profile";
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

<script>






$(document).ready(function(){


   $(document).on('click','#btn-more',function(){
       var id = $(this).data('id');
       var user_id = $(this).data('user_id');
       $("#btn-more").html("Loading....");
       $.ajax({
           url : '{{ url("demos/loaddata") }}',
           method : "POST",
           data : {id:id, user_id:user_id, _token:"{{csrf_token()}}"},
           dataType : "text",
           success : function (data)
           {
              if(data != '')
              {
                  $('#remove-row').remove();
                  $('#load-data').append(data);
              }
              else
              {
                  $('#btn-more').html("No Data");
              }
           }
       });
   });
});
</script>











<script type="text/javascript">

$('html, body').animate({ scrollTop: 0 }, 'fast');


//document.getElementById("doughnutChart").style.height = '200px';

var iconRotate = $('.icon-rotate');
var havatar = 220;
var height_win = 3395;
if (iconRotate.length != 0) {
	$(window).scroll(function () {
		var scroll = $(window).scrollTop(),
		maxScroll = height_win-$(window).height();
		iconRotate.css({transform: 'rotate(-' + (360 * scroll/maxScroll) + 'deg)'});
    var set = 0.7;
    var set_num = (360 * scroll/maxScroll);


        console.log(set_num);

    if(set_num > 51){
    //  alert('555555'); myavatar

      $('#btn_home2').removeClass('set-rotate');
      $('#btn_home2').addClass('set-rotate2');

    }else{

      logoSize = function () {
    // Get the real width of the logo image
    var theLogo = $("#myavatar");
    var newImage = new Image();
    newImage.src = theLogo.attr("src");
    var imgWidth = newImage.width;

    // distance over which zoom effect takes place
    var maxScrollDistance = 100;

    // set to window height if larger
    maxScrollDistance = Math.min(maxScrollDistance, $(window).height());

    // width at maximum zoom out (i.e. when window has scrolled maxScrollDistance)
    var widthAtMax = 220;

    // calculate diff and how many pixels to zoom per pixel scrolled
    var widthDiff = imgWidth + widthAtMax;
    var pixelsPerScroll =(widthDiff / maxScrollDistance);

    $(window).scroll(function () {
        // the currently scrolled-to position - max-out at maxScrollDistance
        var scrollTopPos = Math.min($(document).scrollTop(), maxScrollDistance);

        // how many pixels to adjust by
        var scrollChangePx =  Math.floor(scrollTopPos + pixelsPerScroll);

        // calculate the new width
        var zoomedWidth = imgWidth - scrollChangePx;

        // set the width
        $('.img-in-chart').css('width', zoomedWidth);
        $('.img-in-chart').css('height', zoomedWidth);


        if(zoomedWidth == 247){
          $('.img-in-chart').css('top', 85);
        }else if(zoomedWidth >= 240 && zoomedWidth < 250){
          $('.img-in-chart').css('top', 85);
        }else if(zoomedWidth > 220 && zoomedWidth < 239){
          $('.img-in-chart').css('top', 88);
        }else if(zoomedWidth > 200 && zoomedWidth < 219){
          $('.img-in-chart').css('top', 88);
        }else if(zoomedWidth > 195 && zoomedWidth < 200){
          $('.img-in-chart').css('top', 95);
        }else if(zoomedWidth > 177 && zoomedWidth < 195){
          $('.img-in-chart').css('top', 105);
        }else if(zoomedWidth > 149 && zoomedWidth < 164){
          $('.img-in-chart').css('top', 120);
        }else if(zoomedWidth > 129 && zoomedWidth < 149){
          $('.img-in-chart').css('top', 120);
        }else if(zoomedWidth == 127){
          $('.img-in-chart').css('top', 131);
        }else if(zoomedWidth == 123){
          $('.img-in-chart').css('top', 133);
        }else if(zoomedWidth == 118){
          $('.img-in-chart').css('top', 136);
        }else if(zoomedWidth == 117){
          $('.img-in-chart').css('top', 136);
        }else{

        }


    });
}



logoSize();

      $('#btn_home2').removeClass('set-rotate2');
      $('#btn_home2').addClass('set-rotate');
    }


	});
}



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


<script>

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function(){
    $('#contact-to-reps').submit(function (e) {
        e.preventDefault(); //**** to prevent normal form submission and page reload {{$user->name}}

        $.ajax({
            type : 'POST',
            url : '{{url('contact_to_reps')}}',
            data : {
                id_reps: {{$user->id}},
                name: $("input#namereps").val(),
                surname: $("input#surnamereps").val(),
                email: $("input#emailreps").val(),
                detail: $("textarea#detailreps").val(),
            },
            success: function(result){
                console.log(result);
                if(result.status == 1000){
                  $('#headreps1').text('ส่งข้อความสำเร็จ! ขอบคุณที่ร่วมกิจกรรมของเรา');
                  $('#headreps2').hide();
                  $('#textreps2').hide();
                  $('#btn-line').hide();
                  $('#btn-mail').hide();
                }else{
                  $('#headreps2').text('เกิดข้อผิดพลาด กรุณาใส่ข้อมูลให้ครบ');
                }

            },
            error: function (xhr, ajaxOptions, thrownError) {
                //alert(xhr.status);
                //alert(thrownError);
            }
        });
    });
});

</script>




<script src="{{url('assets/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script>
$(document).ready(function() {
  $('.magnific-gallery').each(function() {
$(this).magnificPopup({
    delegate: 'a',
    type: 'image',
    gallery:{enabled:true}
});
});
});
</script>
@stop('scripts')
