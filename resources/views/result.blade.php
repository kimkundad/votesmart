@extends('layouts.app')

@section('content')
<!-- Navigation -->
<script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/nvd3/1.7.0/nv.d3.min.js"></script>

<script type="text/javascript">
  
  $(function(){
    nv.addGraph(theDonut(1));
  });

  function theDonut(i) {
  var donutChart = nv.models.pieChart()
    .x(function (d) {
      return d.label
    })
    .y(function (d) {
      return d.value
    })
    .showLabels(true)
    .showLegend(false)
    .labelThreshold(.05)
    .labelType("key")
    .color(["#ED2E7D", "#50E3C2", "#F8E71C", "#4A90E2", "#5EC8F2"])
    .tooltipContent(
      function (key, y, e, graph) { return 'Custom tooltip string' }
    ) // This is for when I turn on tooltips
    .tooltips(false)
    .donut(true)
    .donutRatio(0.55);

  // Insert text into the center of the donut
  function centerText(i) {
    return function () {
      var svg = d3.select("#donut-id-" + i + " svg");

      var donut = svg.selectAll("g.nv-slice").filter(
        function (d, i) {
          return i == 0;
        }
      );

      donut.append("svg:image")
        .attr('x', -125)
        .attr('y', -125)
        .attr('z-index', -99)
        .attr('width', 250)
        .attr('height', 250)
        .attr("xlink:href", "https://pbs.twimg.com/profile_images/924674977458036736/hl1N4mbT_400x400.jpg")
    }
  }

  // Put the donut pie chart together
  d3.select("#donut-id-" + i + " svg")
    .datum(seedData(i))
    .transition().duration(300)
    .call(donutChart)

    .call(centerText())
    //.call(pieSlice());

    .call(centerText(i))
  //.call(pieSlice());


  return donutChart;
}

//theOneDonut("donut-id-1");
//theOneDonut("donut-id-2");


// Seed data to populate donut pie chart
function seedData(i) {
  if (i == 1) {
    return [
      {
        "label": "",
        "value": 0
      },
      {
        "label": "",
        "value": 25
      },
      {
        "label": "",
        "value": 25
      },
      {
        "label": "",
        "value": 25
      },
      {
        "label": "",
        "value": 25
      },
      {
        "label": "",
        "value": 25
      }
    ];
  } else {
    return [
      {
        "label": "",
        "value": 0
      },
      {
        "label": "",
        "value": 30
      },
      {
        "label": "",
        "value": 20
      },
      {
        "label": "",
        "value": 15
      },
      {
        "label": "",
        "value": 35
      },
      {
        "label": "",
        "value": 25
      }
    ];
  }

}
</script>
<link rel="stylesheet" href="http://aq1.co/votesmartweb/assets/donut/css/style.css">

<script type="text/javascript">
  $(function() {
  //bg color selector
  $(".color").click(function(){
    var color = $(this).attr("data-value");
    $("#canvas").css("background-color", color);
  });
  
  //add color picker if supported
  //if (Modernizr.inputtypes.color) {
    $(".picker").css("display", 'inline-block');
    var c = document.getElementById('colorpicker');
    c.addEventListener('change', function(e) {
      //d.innerHTML = c.value;
      var color = c.value;
      $("#canvas").css("background-color", color);
    }, false);
  //}
});
function pickColor() {
  $("#colorpicker").click();
}

</script>
<style type="text/css">
  @import url("http://aq1.co/votesmartweb/assets/css/style.css");
  @import url('//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css');

  .share-result .btn:hover {
    color:#fff !important;
    background-color: #08B0ED !important;
  }

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

  #canvas > img {
    position: relative;
    text-align: right;
    left: 70px;
    width: 360px;
    height: 360px;

  }

  #canvas > div {
        position: relative;
    top: -60px;
    left: 40px;
  }

  h2.avatar-heading {
     color: #fff;
    font-family: 'Kanit', sans-serif;
    font-size: 36px;
    font-weight: 500;
    line-height: 56px;
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

</style>
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
          <a class="nav-link js-scroll-trigger hidden-sm hidden-xs" href="#about">เลือกอะไรได้?</a>

          <div class="service-box mt-nav mx-auto text-center visible-sm visible-xs">
             <h5 class="mb-3">เลือกอะไรได้?</h5>
              <p class="text-muted mb-0">ถ้าต้องเป็นนายกรัฐมนตรี คุณจะเลือกอะไร? อะไรที่เราควรให้ความสำคัญ?</p>
            </div>


        </li>
        <li class="nav-item">

          <a class="nav-link js-scroll-trigger hidden-sm hidden-xs" href="#about">เลือกใครดี?</a>

          <div class="service-box mt-nav mx-auto text-center visible-sm visible-xs">
             <h5 class="mb-3">เลือกใครดี?</h5>
              <p class="text-muted mb-0">รู้จักผู้แทนของคุณมากขึ้น และบอกพวกเค้าว่าอะไรที่สำคุณ?</p>
            </div>
        </li>
        <li class="nav-item">
          <div class="service-box mt-nav mx-auto text-center visible-sm visible-xs">

              <p class="text-muted mb-0">ด้วยการเปลี่ยนแปลงเกิดขึ้นไม่ได้<br> ด้วยคนๆเดียว</p>
              <br>
              <a class="btn btn-light js-scroll-trigger" href="#services" style="color: #08B0ED; border: 1px solid #08B0ED; font-size: 15px;"><i class="fa fa-hand-paper-o"></i> อาสาช่วยงาน</a>
            </div>
        </li>

      </ul>
    </div>
  </div>
</nav>

<section class="bg-primary" id="about" style="display: none">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <h2 class="section-heading text-white">We've got what you need!</h2>
        <hr class="light my-4">
        <p class="text-faded mb-4">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p>
        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#services">Get Started!</a>
      </div>
    </div>
  </div>
</section>

<section id="services">
  <div class="candidate-details container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="candidate-charts-profile">
                                            <div id="donut-id-1">
                                               <svg></svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="candidate-profile-2">
                                            <h2><span class="the-name">สมพงษ์</span>อยากจะผลักดัน เรื่องเหล่านี้ (เป็นพิเศษ)</h2>
                                            <div class="education">
                                                <p>
                                                    <span>1</span>การศึกษา</p>
                                                <ul>
                                                    <li>พัฒนาห้องสมุด</li>
                                                    <li>พัฒนาครู</li>
                                                    <li>ปฏิรูปหลักสูตร</li>
                                                    <li>เรียนฟรี</li>
                                                    <li>เพิ่มทุนการศึกษา</li>
                                                    <li>โรงเรียนในพื้นที่ห่างไกล</li>
                                                    <li>พัฒนาห้องสมุด</li>
                                                </ul>
                                            </div>
                                            <div class="economy">
                                                <p>
                                                    <span>2</span>เศรษฐกิจ
                                                </p>
                                                <ul>
                                                    <li>สนับสนุน SME</li>
                                                    <li>กองทุนสตาร์ทอัพ</li>
                                                    <li>กองทุนหมู่บ้าน</li>
                                                    <li>ส่งเสริมการส่งออก</li>
                                                    <li>เศรษฐกิจสร้างสรรค์</li>
                                                </ul>
                                            </div>
                                            <div class="public-health">
                                                <p>
                                                    <span>3</span>สาธารณสุข
                                                </p>
                                                <ul>
                                                    <li>พัฒนาครู</li>
                                                    <li>พัฒนาห้องสมุด</li>
                                                    <li>เพิ่มทุนการศึกษา</li>
                                                    <li>เรียนฟรี</li>
                                                </ul>
                                            </div>
                                            <!-- <button class="btn btn-readmore">แสดงเพิ่ม</button> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
  <div class="container show-vision">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h3 class="">วิสัยทัศน์ดีแบบนี้ เราเลยสร้างโปสเตอร์หาเสียงให้คุณแล้วล่ะ</h3>
        <a class="btn btn-light btn-xl js-scroll-trigger" href="#result"><i class="fa fa-angle-double-down"></i>ดูโปสเตอร์หาเสียงของคุณ</a>
      </div>
    </div>
  </div>
</section>

<style type="text/css">
  #canvas {
    max-width: 100%;
    max-width: 500px;
    max-height: 500px;
    background-color: #08B0ED;
        margin: 0px auto;
        display: none;

  }
  .bg-dark {
    background-color: #E6F1F5 !important
  }
</style>

<section id="result" class="bg-dark">
  <div class="container share-vision text-center">
    <h2 class="mb-4 section-heading">แชร์วิสัยทัศน์ของคุณให้เพื่อนรู้</h2>
     <h3 class="show-vision">หรือจะเซฟไว้ใช้ ลงเลือกตั้งในอนาคตก็ได้นะ</h3>

     <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <div id="bg-selector"> 
          <div class="color white" data-value="#fff"></div>
          <div class="color gray" data-value="#eaeaea"></div>
          <div class="color black" data-value="#000"></div>
          <div class="color blue" data-value="#00529c"></div>
            <div class="color picker" onclick="pickColor();"><img src='data:image/svg+xml;utf8,<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" preserveAspectRatio="xMinYMin"><path fill="#444444" d="M30.828 1.172c-1.562-1.562-4.095-1.562-5.657 0l-5.379 5.379-3.793-3.793-4.243 4.243 3.326 3.326-14.754 14.754c-0.252 0.252-0.358 0.592-0.322 0.921h-0.008v5c0 0.552 0.448 1 1 1h5c0 0 0.083 0 0.125 0 0.288 0 0.576-0.11 0.795-0.329l14.754-14.754 3.326 3.326 4.243-4.243-3.793-3.793 5.379-5.379c1.562-1.562 1.562-4.095 0-5.657zM5.409 30h-3.409v-3.409l14.674-14.674 3.409 3.409-14.674 14.674z"></path></svg>' /></div>
        </div>
        <input id="colorpicker" type="color" />

        <div id="canvas">
          <img src="https://pbs.twimg.com/profile_images/924674977458036736/hl1N4mbT_400x400.jpg" class="img-responsive" />
          <div>
             <h2 class="avatar-heading text-left">ระบบการศึกษาแข็งแกร่ง<br/> 
        เศรษฐกิจเพื่องฟู</br>
         สารธารณสุขดีเยี่ยม</h2>
          </div>
        </div>

      </div>
     </div>

        
  </div>
  <div class="container share-result  text-center" style="margin-top: 60px;">
         <a class="btn btn-xl btn-primary mr-4" href="#"><i class="fa fa-download"></i>เซฟรูปนี้</a> 
         <a class="btn btn-xl btn-primary" href="#"><i class="fa fa-facebook-f"></i> แชร์บน facebook</a>
       </div>
</section>

<section id="contact">
  <div class="container candidate-link">
    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <h2 class="section-heading">แม้วันนี้คุณอาจยังไม่ได้เป็นนายกฯ<br/>
แต่เรื่องสำคัญที่คุณเลือก</br>
จะต้องบอกใคร เพื่อให้เกิดขึ้นจริง?</h2>
        <a class="btn btn-light btn-xl js-scroll-trigger" href="#result">จะเลือกใครดี <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
      </div>
    </div>
  </div>
</section>
@endsection
