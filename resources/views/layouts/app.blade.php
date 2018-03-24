<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Votesmart - โหวตได้โหวตดี</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url('front/vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{url('front/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="{{url('front/vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{url('front/css/creative.css')}}" rel="stylesheet">
    <link href="{{url('front/css/css/style.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <style>

.quiz-title {
font-size:24px;
}

.education ul li {
font-size:14px !important;
}

.user-name p {
font-size:18px !important;
}

    body,
    html {
      font-size: 0.8rem;
      font-family: 'Kanit', sans-serif;
    }
    #mainNav .navbar-brand ,h1,h2,h3,h4,h5,h6{
      font-family: "Kanit" !important;
      font-weight: 400;
    }
    .nav-link {
      font-family: "Kanit";
      font-weight: 400;
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


  .panel-content{
    position: absolute;
    top: 0;
    width: 100%;
    height: 100vh;
  }
  .content-home {
      widows: 100%;
      height: 100%;
      display: none;
  }
  .content-home {
      widows: 100%;
      height: 100%;
      display: none;
  }
  .real-content {
      position: absolute;
      top: 0;
      width: 100%;
      /* height: 100vh; */
      height: 100%;
      max-width: 1140px;
  }
  .mask-content {
    padding-top: 100px;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(255, 255, 255, 0.95);
  }
  .welcome-section {
      height: 100%;
  }
  #front-page {
      height: calc(70% - 60px);
      display: flex;
      width: 100%;
      justify-content: center;
      align-items: center;
      font-family: 'Kanit';
      line-height: 30px;
      font-size: 20px;
  }
  #front-page h3 {
      color: #0479BD;
      font-family: 'Kanit', sans-serif;
      font-size: 32px;
      font-weight: 500;
      line-height: 80px;
      text-align: center;
      text-shadow: 1px 1px 0 #5EC8F2, 2px 2px 0 #5EC8F2, 3px 3px 0 #5EC8F2, 4px 4px 0 #5EC8F2, 5px 5px 0 #5EC8F2, 6px 6px 0 #5EC8F2, 7px 7px 0 #5EC8F2, 8px 8px 0 #5EC8F2, 9px 9px 0 #5EC8F2, 10px 10px 0 #5EC8F2, 11px 11px 0 #5EC8F2, 12px 12px 0 #5EC8F2, 13px 13px 0 #5EC8F2, 14px 14px 0 #5EC8F2, 15px 15px 0 #5EC8F2;
      margin: 0;
  }
  .front-content .panel-fa.panel-fa-right {
      right: 15px;
          top: 50%;
  }
  .front-content .panel-fa {
      position: absolute;
  }
  .btn-click {
      user-select: none;
      cursor: pointer;
  }
  .welcome-footer {
      padding-top: 50px;
      height: 58px;
  }
  .padding-bottom-footer {
      height: 10%;
  }
  .front-content .panel-fa.panel-fa-left {
      left: 15px;
          top: 50%;
  }
  .text-asking{
    font-size: 14px;
    font-weight: 700;
    color:#666;
  }

  .hometo1{
    color: #08c1f4;
    font-size: 16px;
  }
  .fa-angle-left{
    color: #08c1f4;
    font-size: 45px;
  }
  .fa-angle-right{
    color: #08c1f4;
    font-size: 45px;
  }
  .hometo2{
    color: #08c1f4;
    font-size: 16px;
  }

}

@media (min-width: 320px) {
  .img-in-chart {
    margin-top: -30px;
    width: 80px;
    height: 80px;
  }
  .masonry .item {
      font-size: 14px;
  }




  .panel-content{
    position: absolute;
    top: 0;
    width: 100%;
    height: 100vh;
  }
  .content-home {
      widows: 100%;
      height: 100%;
      display: none;
  }
  .content-home {
      widows: 100%;
      height: 100%;
      display: none;
  }
  .real-content {
      position: absolute;
      top: 0;
      width: 100%;
      /* height: 100vh; */
      height: 100%;
      max-width: 1140px;
  }
  .mask-content {
    padding-top: 100px;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(255, 255, 255, 0.7);
  }
  .welcome-section {
      height: 100%;
  }
  #front-page {
      height: calc(70% - 60px);
      display: flex;
      width: 100%;
      justify-content: center;
      align-items: center;
      font-family: 'Kanit';
      line-height: 30px;
      font-size: 20px;
  }
  #front-page h3 {
      color: #0479BD;
      font-family: 'Kanit', sans-serif;
      font-size: 32px;
      font-weight: 500;
      line-height: 80px;
      text-align: center;
      text-shadow: 1px 1px 0 #5EC8F2, 2px 2px 0 #5EC8F2, 3px 3px 0 #5EC8F2, 4px 4px 0 #5EC8F2, 5px 5px 0 #5EC8F2, 6px 6px 0 #5EC8F2, 7px 7px 0 #5EC8F2, 8px 8px 0 #5EC8F2, 9px 9px 0 #5EC8F2, 10px 10px 0 #5EC8F2, 11px 11px 0 #5EC8F2, 12px 12px 0 #5EC8F2, 13px 13px 0 #5EC8F2, 14px 14px 0 #5EC8F2, 15px 15px 0 #5EC8F2;
      margin: 0;
  }
  .front-content .panel-fa.panel-fa-right {
      right: 15px;
          top: 50%;
  }
  .front-content .panel-fa {
      position: absolute;
  }
  .btn-click {
      user-select: none;
      cursor: pointer;
  }
  .welcome-footer {
      padding-top: 50px;
      height: 58px;
  }
  .padding-bottom-footer {
      height: 10%;
  }
  .front-content .panel-fa.panel-fa-left {
      left: 15px;
          top: 50%;
  }
  .text-asking{
    font-size: 14px;
    font-weight: 700;
    color:#666;
  }
  .hometo1{
    color: #08c1f4;
    font-size: 16px;
  }
  .hometo2{
    color: #08c1f4;
    font-size: 16px;
  }
  .fa-angle-left{
    color: #08c1f4;
    font-size: 45px;
  }
  .fa-angle-right{
    color: #08c1f4;
    font-size: 45px;
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
    width: 84px;
    height: 85px;
  }

}

@media (min-width: 1200px) {
  .img-in-chart {
    width: 95px;
    height: 95px;
  }




  .panel-content{
    position: absolute;
    top: 0;
    width: 100%;
    height: 100vh;
  }
  .content-home {
      widows: 100%;
      height: 100%;
      display: none;
  }
  .content-home {
      widows: 100%;
      height: 100%;
      display: none;
  }
  .real-content {
      position: absolute;
      top: 0;
      width: 100%;
      /* height: 100vh; */
      height: 100%;
      max-width: 1140px;
  }
  .mask-content {
    padding-top: 100px;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(255, 255, 255, 0.7);
  }
  .welcome-section {
      height: 100%;
  }
  #front-page {
      height: calc(70% - 60px);
      display: flex;
      width: 100%;
      justify-content: center;
      align-items: center;
      font-family: 'Kanit';
      line-height: 30px;
      font-size: 20px;
  }
  #front-page h3 {
      color: #0479BD;
      font-family: 'Kanit', sans-serif;
      font-size: 56px;
      font-weight: 500;
      line-height: 80px;
      text-align: center;
      text-shadow: 1px 1px 0 #5EC8F2, 2px 2px 0 #5EC8F2, 3px 3px 0 #5EC8F2, 4px 4px 0 #5EC8F2, 5px 5px 0 #5EC8F2, 6px 6px 0 #5EC8F2, 7px 7px 0 #5EC8F2, 8px 8px 0 #5EC8F2, 9px 9px 0 #5EC8F2, 10px 10px 0 #5EC8F2, 11px 11px 0 #5EC8F2, 12px 12px 0 #5EC8F2, 13px 13px 0 #5EC8F2, 14px 14px 0 #5EC8F2, 15px 15px 0 #5EC8F2;
      margin: 0;
  }
  .front-content .panel-fa.panel-fa-right {
      right: 15px;
          top: 50%;
  }
  .front-content .panel-fa {
      position: absolute;
  }
  .btn-click {
      user-select: none;
      cursor: pointer;
  }
  .welcome-footer {
      padding-top: 50px;
      height: 58px;
  }
  .padding-bottom-footer {
      height: 10%;
  }
  .front-content .panel-fa.panel-fa-left {
      left: 15px;
          top: 50%;
  }
  .text-asking{
    color:#666;
  }
  .hometo1{
    color: #08c1f4;
    font-size: 20px;
  }
  .hometo2{
    color: #08c1f4;
    font-size: 20px;
  }

  .fa-angle-left{
    color: #08c1f4;
    font-size: 65px;
  }
  .fa-angle-right{
    color: #08c1f4;
    font-size: 65px;
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




a{
  text-decoration: none;
}
a:hover{
  text-decoration: none;
}
.scroll-to-top {
    border: 1px solid #08B0ED;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    /* transition: all 0.3s; */
    background: #ffffff;
    border-radius: 15px 15px 15px 15px;
    bottom: 10px;
    /* color: #FFF; */
    display: block;
    height: 9px;
    padding: 10px 10px 25px 0px;
    position: fixed;
    right: 10px;
    text-align: center;
    text-decoration: none;
    min-width: 39px;
    z-index: 1040;
}
.send_q {
    position: fixed;
    /* float: left; */
    bottom: 12px;
    color: #FFF;
    display: block;
    height: 36px;
    right: 66px;
}
.scroll-to-top.visible {
    opacity: 0.75;
}
.masonry .item {
  border-radius: 50%;
  background: #fff;
  margin-bottom: 10px;
  text-align: center;
  display: flex;
  justify-content: center;
  align-items: center;
  box-shadow: 0px 2px 10px #ccc;
  color: #08B0ED;
   font-size: 20px;
   line-height: 20px;
  font-family: 'Kanit', sans-serif;
}

.masonry .item.select {
  border-radius: 50%;
  background: #5EC8F2;
  color: #fff;
  position: relative;
  box-shadow: 0px 10px 10px #ccc;

  font-weight: 700;
}

.masonry .item.select::after {
  content: "";
  background-image: url('./true.png');
  position: absolute;
  top: 20px;
  left: 50%;
  margin-left: -11px;
  width: 24px;
  height: 24px;
}

.item.size-1 {
  width: 90px;
  height: 90px;
  font-size: 11px
}

.item.size-2 {
  width: 110px;
  height: 110px;
  font-size: 12px
}

.item.size-3 {
  width: 130px;
  height: 130px;
  font-size: 13px
}

.item.size-4 {
  width: 180px;
  height: 180px;
  font-size: 14px
}

.item.size-5 {
  width: 210px;
  height: 210px;
  font-size: 15px
}
.btn-asa{

    border: 1px solid #08B0ED;
    border-radius: 24px;
    padding: 12px 34px;
    font-weight: 400;
    color: #08B0ED;
    font-family: 'Kanit', sans-serif;
    font-size: 14px;
    line-height: 21px;
    text-align: center;
    text-shadow: 0 1px 2px 0 rgba(35,31,32,0.24);
}
.navbar{
  padding: 0rem 1rem;
}

.a-head {
  color: #08b0ed !important

}

  .a-head::after {
    color: #08b0ed;
 display: block;
   content: '';
  width: 50%;
  margin: 0 auto;
  border-bottom: 3px solid #08b0ed;
padding-bottom: 5px;
}


    </style>

  </head>

  <body id="page-top" style="background: #f2f8fa;">


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


    <script type="text/javascript">

      function DropDown(el) {
        this.dd = el;
        this.placeholder = this.dd.children('span');
        this.opts = this.dd.find('ul.dropdown > li');
        this.val = '';
        this.index = -1;
        this.initEvents();
      }
      DropDown.prototype = {
        initEvents : function() {
          var obj = this;

          obj.dd.on('click', function(event){
            $(this).toggleClass('active');
            console.log(obj);

            return false;
          });


        },

      }

      $(function() {

        var dd = new DropDown( $('#dd') );

        $(document).click(function() {
          // all dropdowns
          $('.wrapper-dropdown-3').removeClass('active');
        });

      });




    $('.info').click(function(){
        window.location = $('#SHOW_HELP').attr('href');
    });
    $('.info2').click(function(){
      window.location = $('#SHOW_HELP2').attr('href');
    });
    $('.info-3').click(function(){
      window.location = $('#SHOW_HELP-3').attr('href');
      console.log(obj);
    });





    </script>

    @yield('scripts')

  </body>

</html>
