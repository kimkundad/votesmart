<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Creative - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url('front/vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{url('front/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="{{url('front/vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{url('front/css/creative.css')}}" rel="stylesheet">
    <style>
    body,
    html {
      font-size: 0.8rem;
    }
    .navbar-light .navbar-toggler {
    color: rgb(8, 176, 237);
    border: none !important;
    }
    .navbar-light .navbar-toggler-icon {
     background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(8, 176, 237, 0.7)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
    }
    .navbar-toggler {
    padding: .25rem .5rem;
    }
    .btn-varunteer{
      color: #08B0ED;
      font-weight: 600;
    }
    .visible-sm, .visible-xs {
        display: none!important;
    }
    @media (max-width: 767px)
    {
      .visible-xs {
          display: block!important;
      }
      .hidden-xs {
          display: none!important;
      }
    }
    .navbar-brand {
    display: inline-block;
    padding-top: .3125rem;
    padding-bottom: .3125rem;
    margin-right: 0rem;
    font-size: 1.12rem;
    line-height: inherit;
    white-space: nowrap;
}
    .mb-3{
      color: #08B0ED;
    }
    .mt-nav{
      border-top: 1px solid #ddd;

      padding: 25px 12px
    }
    .mt-nav p{
    font-size: 15px;
    }
    .modal-backdrop{
      display: none;
    }
    .close {
    font-size: 0.9rem;
    }
    .modal-content {
    color:#fff;
    background-color: #5ec8f2;

}
.close {
    text-shadow: none;
    opacity: 1;
}
hr {

    border-color: #f8f9fa;
}
.p-pop{
  font-size: 13px;
}

label{
  float: left;
    font-size: 14px;
    margin-bottom: .3rem;
}
.form-group {
    margin-bottom: 0.6rem;
}
.form-control {
    display: block;
    width: 100%;
    padding: 0.375rem 0.75rem;
    font-size: 0.8rem;
    line-height: 1.5;
    color: #fff;
    background-color: #5ec8f2;
    background-clip: padding-box;
    border: 1px solid #fff;
    border-radius: 0.25rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
input[type="checkbox"], input[type="radio"]{
	position: absolute;
	right: 9000px;
}

/*Check box*/
input[type="checkbox"] + .label-text:before{
	content: "\f096";
	font-family: "FontAwesome";
	speak: none;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: none;
	line-height: 2;
	-webkit-font-smoothing:antialiased;
	width: 2em;
	display: inline-block;
	margin-right: 5px;
}

input[type="checkbox"]:checked + .label-text:before{
	content: "\f14a";
	color: #2980b9;
	animation: effect 250ms ease-in;
}

input[type="checkbox"]:disabled + .label-text{
	color: #aaa;
}

input[type="checkbox"]:disabled + .label-text:before{
	content: "\f0c8";
	color: #ccc;
}

/*Radio box*/


input[type="radio"] + .label-text:before{
  font-size: 18px;
	content: "\f10c";
	font-family: "FontAwesome";
	speak: none;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: none;
	line-height: 1;
	-webkit-font-smoothing:antialiased;
	width: 1em;
	display: inline-block;
	margin-right: 5px;
}

input[type="radio"]:checked + .label-text:before{
  font-size: 17px;
	content: "\f192";
	color: #ffffff;
	animation: effect 250ms ease-in;
}

input[type="radio"]:disabled + .label-text{
	color: #ffffff;
}

input[type="radio"]:disabled + .label-text:before{
	content: "\f111";
	color: #ffffff;
}

/*Radio Toggle*/

.toggle input[type="radio"] + .label-text:before{
	content: "\f204";
	font-family: "FontAwesome";
	speak: none;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: none;
	line-height: 2;
	-webkit-font-smoothing:antialiased;
	width: 2em;
	display: inline-block;
	margin-right: 10px;
}

.toggle input[type="radio"]:checked + .label-text:before{
  font-size: 18px;
    content: "\f192";
    color: #ffffff;
	animation: effect 250ms ease-in;
}

.toggle input[type="radio"]:disabled + .label-text{
	color: #aaa;
}

.toggle input[type="radio"]:disabled + .label-text:before{
	content: "\f204";
	color: #ffffff;
}


@keyframes effect{
	0%{transform: scale(0);}
	25%{transform: scale(1.3);}
	75%{transform: scale(1.4);}
	100%{transform: scale(1);}
}
.bg-whites {
    background-color:rgba(255, 255, 255, 0.9);
}
.quiz-title{
    color: #0479BD;
    font-family: Kanit;
    font-size: 20px;
    font-weight: 700;
    line-height: 35px;
    margin: 0;
    padding: 0px 15px;
    text-shadow: 1px 1px 0 #5EC8F2, 2px 2px 0 #5EC8F2, 3px 3px 0 #5EC8F2, 4px 4px 0 #5EC8F2, 5px 5px 0 #5EC8F2, 6px 6px 0 #5EC8F2, 7px 7px 0 #5EC8F2, 8px 8px 0 #5EC8F2, 9px 9px 0 #5EC8F2, 10px 10px 0 #5EC8F2, 11px 11px 0 #5EC8F2, 12px 12px 0 #5EC8F2, 13px 13px 0 #5EC8F2, 14px 14px 0 #5EC8F2, 15px 15px 0 #5EC8F2;
}
.overlay-chart {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}
.parent-chart {
    border-radius: 2px;
    background-color: #FFFFFF;
    box-shadow: 0 2px 12px rgba(0, 0, 0, 0.06);
    padding: 10px;
    margin-bottom: 10px;
    position: relative;
    margin: auto auto 30px;
}
.img-in-chart {
  border: none;
  border-radius: 100%;
  margin-top: -32px;
}
.img-in-chart-in {
    border-radius: 100%;
    margin-top: -3px;
    width: 83px;
    height: 83px;
}
@media (min-width: 280px) {
  .img-in-chart {
    margin-top: -16px;
    width: 60px;
    height: 60px;
  }
  .masonry .item {
      font-size: 14px;
  }

}

@media (min-width: 320px) {
  .img-in-chart {
    margin-top: -18px;
    width: 80px;
    height: 80px;
  }
  .masonry .item {
      font-size: 14px;
  }

}


@media (min-width: 375px) {
  .img-in-chart {
    width: 30px;
    height: 30px;
  }
  .masonry .item {
      font-size: 14px;
  }
}

@media (min-width: 425px) {
  .img-in-chart {
    width: 82px;
    height: 82px;
  }
  .masonry .item {
      font-size: 14px;
  }
}

@media (min-width: 576px) {
  .img-in-chart {
    width: 116px;
    height: 116px;
  }
  .masonry .item {
      font-size: 14px;
  }
}

@media (min-width: 768px) {
  .img-in-chart {
    width: 75px;
    height: 75px;
  }
  .masonry .item {
      font-size: 14px;
  }
}

@media (min-width: 992px) {
  .img-in-chart {
    width: 54px;
    height: 55px;
  }

}

@media (min-width: 1200px) {
  .img-in-chart {
    width: 65px;
    height: 65px;
  }



}
.modal-content1 {
    color: #999;
    background-color: #fff;
}
.view-more{
  float: right;
}

.view-more .plus-sign {
    display: inline-block;
    width: 25px;
    height: 25px;
    margin: 0 auto;
    padding: 5px;
    border: 1px solid #666;
    font-size: 12px;
    font-weight: 100;
    line-height: 15px;
    text-align: center;
    border-bottom-left-radius: 50%;
    border-top-left-radius: 50%;
    border-bottom-right-radius: 50%;
    border-top-right-radius: 50%;
}
.education p {
    color: #4A4A4A;
    font-family: 'Kanit', sans-serif;
    font-size: 14px;
    line-height: 21px;
}
.education ul {
padding-left: 0;
}
.candidate-profile-2 ul li {
font-family: "Kanit";
font-size: 13px;
padding: 5px 10px;
}
.education ul li {
display: inline-block;
list-style: none;
background: #5EC8F2;
border-radius: 16px;
padding: 6px;
color: #fff;
margin: 0 5px 10px 0px;
}
.education p span {
    border-radius: 100%;
    background-color: #5EC8F2;
    font-family: 'Kanit', sans-serif;
    color: #FFFFFF;
    font-size: 10px;
    font-weight: 500;
    line-height: 15px;
    padding: 2px 8px;
    margin-right: 5px;
}
.economy p {
    color: #4A4A4A;
    font-family: 'Kanit', sans-serif;
    font-size: 14px;
    line-height: 21px;
}
.economy p span {
    border-radius: 100%;
    background-color: #ED2E7D;
    font-family: 'Kanit', sans-serif;
    color: #FFFFFF;
    font-size: 10px;
    font-weight: 500;
    line-height: 15px;
    padding: 2px 8px;
    margin-right: 5px;
}
.economy ul {
    padding-left: 0;
}
.candidate-profile-2 ul li {
    font-family: "Kanit";
    font-size: 13px;
    padding: 5px 10px;
}
.economy ul li {
    display: inline-block;
    list-style: none;
    background: #ED2E7D;
    border-radius: 16px;
    padding: 6px;
    color: #fff;
    margin: 0 5px 10px 0px;
}
.public-health p {
    color: #4A4A4A;
    font-family: 'Kanit', sans-serif;
    font-size: 14px;
    line-height: 21px;
}
.public-health p span {
    border-radius: 100%;
    background-color: #F5E41B;
    font-family: 'Kanit', sans-serif;
    color: #FFFFFF;
    font-size: 10px;
    font-weight: 500;
    line-height: 15px;
    padding: 2px 8px;
    margin-right: 5px;
}
.public-health ul {
    padding-left: 0;
}
.candidate-profile-2 ul li {
    font-family: "Kanit";
    font-size: 13px;
    padding: 5px 10px;
}
.public-health ul li {
    display: inline-block;
    list-style: none;
    background: #F5E41B;
    border-radius: 16px;
    padding: 6px;
    color: #fff;
    margin: 0 5px 10px 0px;
}

.quiz-choices h3 {

    /* width: 371px; */
    color: #0479bd;
    font-family: Kanit;
    font-size: 20px;
    font-weight: 700;
    line-height: 35px;
    text-shadow: 1px 1px 0 #5EC8F2, 2px 2px 0 #5EC8F2, 3px 3px 0 #5EC8F2, 4px 4px 0 #5EC8F2, 5px 5px 0 #5EC8F2, 6px 6px 0 #5EC8F2, 7px 7px 0 #5EC8F2, 8px 8px 0 #5EC8F2, 9px 9px 0 #5EC8F2, 10px 10px 0 #5EC8F2, 11px 11px 0 #5EC8F2, 12px 12px 0 #5EC8F2, 13px 13px 0 #5EC8F2, 14px 14px 0 #5EC8F2, 15px 15px 0 #5EC8F2;
}
.quiz-choices p {
    /* max-width: 345px; */


    font-size: 11px;
    /* line-height: 30px; */
}


@media (max-width: 280px) {
  .quiz-choices h3 {
    text-align: center;
  }
  .quiz-choices p {
    text-align: center;
  }
  .masonry .item{
    font-size: 11px;
  }

}

@media (max-width: 320px) {
  .quiz-choices h3 {
    text-align: center;
  }
  .quiz-choices p {
    text-align: center;
  }
  .masonry .item{
    font-size: 11px;
  }

}

@media (max-width: 375px) {
  .quiz-choices h3 {
    text-align: center;
  }
  .quiz-choices p {
    text-align: center;
  }
  .masonry .item{
    font-size: 11px;
  }

}

@media (max-width: 425px) {
  .quiz-choices h3 {
    text-align: center;
  }
  .quiz-choices p {
    text-align: center;
  }
  .masonry .item{
    font-size: 11px;
  }

}
.quiz-choices .col-md-4 p {
    text-align: right;
    color: #0479BD;
    font-family: Prompt;
    font-size: 14px;
    font-weight: 700;
}

.masonry{
  margin-top: 20px;
}

.masonry .item {

  width: 100%;
    height: auto;
      padding-bottom: 50%;
      -moz-border-radius: 50%;
      -webkit-border-radius: 50%;
      border-radius: 50%;
      background: #fff;
       color: #08B0ED;

    box-shadow: 0px 2px 10px #ccc;



    font-family: 'Kanit', sans-serif;






    margin-top:-0.5em;
    text-align:center;

}

.masonry .item.select::after {


    content: "";
    display: block;

    width: 100%;
    height: auto;

    color: #fff;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}
.masonry .item.select {
    border-radius: 50%;
    background: #5EC8F2;
    color: #fff;
    position: relative;
    box-shadow: 0px 10px 10px #ccc;
    text-shadow: 4px 4px #0479BD;
    font-weight: 700;
}
.masonry .item div {
    float:left;
    width:100%;
    padding-top:50%;
    line-height:1em;
    margin-top:-0.5em;
    text-align:center;

}
.item.size-1 {

}
a{
  text-decoration: none;
}
a:hover{
  text-decoration: none;
}
    </style>

  </head>

  <body id="page-top">

    @include('layouts.header')


    @yield('content')



    <!-- Bootstrap core JavaScript -->
    <script src="{{url('front/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('front/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{url('front/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{url('front/vendor/scrollreveal/scrollreveal.min.js')}}"></script>
    <script src="{{url('front/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>


    <!-- Custom scripts for this template -->
    <script src="{{url('front/js/creative.min.js')}}"></script>

    @yield('scripts')

  </body>

</html>
