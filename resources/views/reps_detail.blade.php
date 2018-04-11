@extends('layouts.app')

@section('content')
<!-- Navigation -->
<script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/nvd3/1.7.0/nv.d3.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">



<script type="text/javascript">
  $(function() {
  //bg color selector
  $(".color").click(function(){
    var color = $(this).attr("data-value");
    $("#canvas").css("background-color", color);
    $("#canvas2").css("background-color", color);
  });

  //add color picker if supported
  //if (Modernizr.inputtypes.color) {
    $(".picker").css("display", 'inline-block');
    var c = document.getElementById('colorpicker');
    c.addEventListener('change', function(e) {
      //d.innerHTML = c.value;
      var color = c.value;
      $("#canvas").css("background-color", color);
      $("#canvas2").css("background-color", color);
    }, false);
  //}
});
function pickColor() {
  $("#colorpicker").click();
}




</script>





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


<section class="bg-whites " id="about" style="padding: 90px 0 8px 0;">
  <div class="container">
    <div class="row">
      <div class="col-md-3 text-center">
        <a class="quiz-title" style="color:#0479bd;">จะเลือกอะไรได้?</a>
        <br><br>
      </div>

      <div class="col-md-6 text-center hidden-sm hidden-xs">
        <p class="text-muted" style="font-size:14px;">มาดูกันว่าแต่ละคนได้เลือกเรื่องอะไร ถ้าต้องมาบริหารประเทศ <br>หรือเลือกเข้าร่วมด้วย Facebook เพื่อบอกว่าคุณจะเลือกอะไร? </p>
      </div>

      <div class="col-md-6 text-center visible-sm visible-xs">
        <p class="text-muted" style="font-size:11px;">มาดูกันว่าแต่ละคนได้เลือกเรื่องอะไร ถ้าต้องมาบริหารประเทศ <br>หรือเลือกเข้าร่วมด้วย Facebook เพื่อบอกว่าคุณจะเลือกอะไร? </p>
      </div>


      <div class="col-md-3 text-center">


        @if (Auth::guest())
        <a class="btn btn-primary btn-xl js-scroll-trigger" href="{{url('/redirect')}}" style="padding: 0.9rem 2rem;font-weight: 500;"><i class="fa fa-facebook-official"></i> เลือกเรื่องสำคัญของคุณ</a>
        @else
        <a class="btn btn-primary btn-xl js-scroll-trigger" href="{{url('/quiz_choices')}}" style="padding: 0.9rem 2rem;font-weight: 500;"><i class="fa fa-facebook-official"></i> เลือกเรื่องสำคัญของคุณ</a>
        @endif

        <br>
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
    border-left: 5px solid #eee;
}
</style>

<section id="services" style="padding: 80px 0 50px 0;">
  <div class="candidate-details container">
                                <div class="row">

                                  <div class="col-md-6">
                                    
                                  </div>
                                  <div class="col-md-6">
                                    <blockquote class="primary" style="height:64px;">

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

</section>






@endsection





@section('scripts')


<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
<script src="{{url('front/js/Chart.bundle.js?v1')}}"></script>







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
