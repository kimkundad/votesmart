@extends('layouts.app')

@section('content')

<style>
.masonry .item:hover,.masonry .item.select {
  -ms-transform: scale(1.1, 1.1);
    -webkit-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
}

.the-container {
  padding:0px !important;
}
.set-ma {
  padding:0px;
}

.the-container2 {
  padding: 0px 25px;
}
.page-header-sub {
  box-shadow: 0px 2px 10px #ccc;
}
.sub-title {
  padding: 0px;
  min-height: 45px;
}

</style>



  <section class="bg-whites page-header-sub quiz_choices " id="about" style=" z-index: 1000; ">


  <div class="container-fluid the-container2">
    <div class="row quiz-choices ">



      <div class="col-md-8 visible-sm visible-xs sub-title">
        <h3 class="margin">เลือก 10 ประเด็นที่สำคัญ
        สำหรับประเทศไทย</h3>
        <br>
      </div>
      <div class="col-md-8 visible-sm visible-xs">
        <p class="text-muted" style="font-size: 13px;">ทุกประเด็นก็ดูจะเป็นเรื่องที่สำคัญเหมือนกัน แต่อันไหนกันล่ะที่คุณจะเลือกทำก่อน? </p>
      </div>



      <div class="col-md-9 hidden-sm hidden-xs">
        <h3 class="margin" style="font-size:28px;">เลือก 10 ประเด็นที่สำคัญ
        สำหรับประเทศไทย</h3>
        <br>
      </div>
      <div class="col-md-9 hidden-sm hidden-xs">
        <h4 style="color: #087bbe;">ทุกประเด็นก็ดูจะเป็นเรื่องที่สำคัญเหมือนกัน แต่อันไหนกันล่ะที่คุณจะเลือกทำก่อน? </h4>
      </div>



      <style>
      .zoom-btn-large {
            margin-top: -15px;
        position: absolute;
    padding: 10px;
    width: 130px;
    height: 130px;
          line-height: 60px;
          box-shadow: 0px 2px 10px #ccc;
          background: #fff;
              color: #08B0ED;
              border-radius: 50%;
                  display: inline-block;
      }
      .number-set{
        top: 60px;
        left: 40px;
        position: absolute;
        /* margin-top: -20px; */
        background-color: #fff;
        border: none;
        width: 35px;
        font-weight: 700;
        color: #0479bd;
        padding-left: 10px;
        height: 18px;
      }

      .chart {
          padding-top: 15px;
          display: inline-block;
          position: absolute;
          width: 120px;
          height: 120px;
          left: 5px;
          top:5px;
          text-align: center;
      }
      .chart canvas {
          position: absolute;
          top: 0;
          left: 0;
      }
      .percent {
        display: inline-block;
    z-index: 2;
    font-size: 48px;
    height: 48px;
    padding: 0px;
    margin-top: -5px;
    width: 46px;
    text-align: center;
      }
      .percent:after {

          margin-left: 0.1em;
          font-size: .8em;
      }
      .angular {
          margin-top: 100px;
      }
      .angular .chart {
          margin-top: 0;
      }


      </style>



      <div class="col-md-3 text-center hidden-sm hidden-xs">


        <a class="submit-to-add zoom-btn-large js-scroll-trigger" href="#" onclick="myFunction1()" style="margin-top:-28px; color: #fff; line-height: 30px; background: #08b0ed;">
          <span style="font-size: 22px;">
            <i class="fa fa-arrow-right" style="margin-top:20px;"></i><br>
            ดูผลลัพธ์
        </span></a>




        <div class="check-to-add zoom-btn-large">
        <div class=" chart" data-percent="0" id="easy-pie-chart">
          <strong style="font-size:16px;">ต้องเลือกอีก</strong>

            <input type="text" id="number" value="10" class="number-set percent" >
        </div>
      </div>


         </div>

      </div>



    </div>
  </div>
</section>

<style>
input:checked{
  transform: scale(0.9);
  box-shadow: 0 0 5px #bdbdff;
}
.delz-3, .delz-7, .delz-11, .delz-15, .delz-19, .delz-23, .delz-27, .delz-31, .delz-35, .delz-39, .delz-43{
  margin-left: 35px !important;
}
.bubble-container {
  margin-top:230px;
}
@media (max-width: 480px) {
  .bubble-container {
  margin-top:120px;
}
.text-muted {
  display:none;
}
}
</style>
<section id="services" class="" style="background: #f2f8fa; padding: 3rem 0;">

  <div class="container-fluid">

    <form  method="POST" id="cutproduct" action="{{url('add_vote')}}">
      {{ csrf_field() }}
      <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" class="form-control">

      <div class="masonry hidden-sm hidden-xs" style="padding-left:20px;">

        @if($objs)
           @foreach($objs as $u)
        <div class="item itemch-z size-{{$u->options}}" onclick="javascript:check('itemch-{{$u->id_q}}');" style="margin: 15px; cursor: pointer; padding: 5px;">{{$u->name_quiz}}
        <input type="checkbox" class="checkbox1" name="quiz[]" id="itemch-{{$u->id_q}}" value="{{$u->id_q}}" >
        </div>
        @endforeach
     @endif

    </div>



    <div class="masonry2 visible-sm visible-xs set-ma" style="">

      @if($objs)
         @foreach($objs as $u)
      <div class="item itemch-z delz-{{$s}} size-{{$u->options}}" onclick="javascript:check('itemch-{{$u->id_q}}');" style="margin: 3px;cursor: pointer; padding: 5px;">{{$u->name_quiz}}
      <input type="checkbox" class="checkbox1" name="quiz[]" id="itemch-{{$u->id_q}}" value="{{$u->id_q}}" >
    </div id="{{$s++}}">
      @endforeach
   @endif

  </div>


      <button type="submit" class="send_q btn btn-primary btn-xl js-scroll-trigger visible-sm visible-xs" href="" style="padding: 0.7rem 2rem;font-weight: 500;"> ส่งข้อมูล</button>
      <a class="scroll-to-top visible-sm visible-xs" href="#">ต้องเลือกอีก <input type="text" id="number1" value="10" style="background-color: #ffffff; border:  none; width: 23px; font-weight: 700; color: #0479bd; padding-left: 10px; "> </a>



</form>




<div class="panel-content-set" style="width:100% !important; top: 0;  position: fixed;     margin-right: -15px; margin-left: -15px; z-index: 1001;">
<div class=" content_leena panel-content" >
  <div class="swiper-container">
  <div class="swiper-wrapper">

  <div id="content-home1" style="display:block" class="content-home swiper-slide">
    <div class="container-fluid the-container" style="padding-top: 70px;">
      <div class="mask-content">
        <!-- First Container -->
        <div class="welcome-section text-center">
          <div id="front-page" class="front-content">
            <div class="panel-text-asking">
              <h3 class="margin">เลือก 10 ประเด็นสำคัญ</h3>
              <br>
              <div class="text-asking">
                <p style="font-size:18px;">ทุกประเด็นก็ดูจะสำคัญเหมือนกันหมด<br>
                แต่เรื่องไหนกันหล่ะ ที่คุณเลือกทำก่อน?<br>
                ถ้าคุณเลือกได้แค่ 10 เรื่องเท่านั้น</p>
              </div>
            </div>

          </div>
          <div class="welcome-footer">


            <a class="hometo1 btn btn-primary btn-xl js-scroll-trigger"
            style="padding: 0.9rem 4rem;font-weight: 500; color:#fff; font-size:16px;">
             เริ่มเลือก</a>
          </div>
          <div class="padding-bottom-footer"></div>
        </div>
      </div>
    </div>
  </div>






  </div>


  </div>
</div>
</div>


  </div>
</section>

<section class="p-0" id="portfolio">
  <div class="container-fluid p-0">
    <div class="row no-gutters popup-gallery">


    </div>
  </div>
</section>









@endsection

@section('scripts')
<script src='https://cdnjs.cloudflare.com/ajax/libs/vis/4.16.1/vis.min.js'></script>
<script src="{{url('js/jquery.masonry.min.js')}}"></script>
<script src="http://tjcrowder.github.io/simple-snippets-console/snippet.js"></script>

<script>
function myFunction1() {
    document.getElementById("cutproduct").submit();
}


$('.quiz_choices').hide();


$(".hometo1").click(function(){
    $(".content_leena").slideUp();
    $('.quiz_choices').show();

    var d = document.getElementById("services");
d.className += "bubble-container";
});
</script>

<script>

/**!
 * easyPieChart
 * Lightweight plugin to render simple, animated and retina optimized pie charts
 *
 * @license Dual licensed under the MIT (http://www.opensource.org/licenses/mit-license.php) and GPL (http://www.opensource.org/licenses/gpl-license.php) licenses.
 * @author Robert Fleischmann <rendro87@gmail.com> (http://robert-fleischmann.de)
 * @version 2.1.1
 **/

(function(root, factory) {
    if(typeof exports === 'object') {
        module.exports = factory(require('jquery'));
    }
    else if(typeof define === 'function' && define.amd) {
        define('EasyPieChart', ['jquery'], factory);
    }
    else {
        factory(root.jQuery);
    }
}(this, function($) {
/**
 * Renderer to render the chart on a canvas object
 * @param {DOMElement} el      DOM element to host the canvas (root of the plugin)
 * @param {object}     options options object of the plugin
 */
var CanvasRenderer = function(el, options) {
	var cachedBackground;
	var canvas = document.createElement('canvas');

	if (typeof(G_vmlCanvasManager) !== 'undefined') {
		G_vmlCanvasManager.initElement(canvas);
	}

	var ctx = canvas.getContext('2d');

	canvas.width = canvas.height = options.size;

	el.appendChild(canvas);

	// canvas on retina devices
	var scaleBy = 1;
	if (window.devicePixelRatio > 1) {
		scaleBy = window.devicePixelRatio;
		canvas.style.width = canvas.style.height = [options.size, 'px'].join('');
		canvas.width = canvas.height = options.size * scaleBy;
		ctx.scale(scaleBy, scaleBy);
	}

	// move 0,0 coordinates to the center
	ctx.translate(options.size / 2, options.size / 2);

	// rotate canvas -90deg
	ctx.rotate((-1 / 2 + options.rotate / 180) * Math.PI);

	var radius = (options.size - options.lineWidth) / 2;
	if (options.scaleColor && options.scaleLength) {
		radius -= options.scaleLength + 2; // 2 is the distance between scale and bar
	}

	// IE polyfill for Date
	Date.now = Date.now || function() {
		return +(new Date());
	};

	/**
	 * Draw a circle around the center of the canvas
	 * @param  {strong} color     Valid CSS color string
	 * @param  {number} lineWidth Width of the line in px
	 * @param  {number} percent   Percentage to draw (float between 0 and 1)
	 */
	var drawCircle = function(color, lineWidth, percent) {
		percent = Math.min(Math.max(0, percent || 1), 1);

		ctx.beginPath();
		ctx.arc(0, 0, radius, 0, Math.PI * 2 * percent, false);

		ctx.strokeStyle = color;
		ctx.lineWidth = lineWidth;

		ctx.stroke();
	};

	/**
	 * Draw the scale of the chart
	 */
	var drawScale = function() {
		var offset;
		var length;
		var i = 24;

		ctx.lineWidth = 1
		ctx.fillStyle = options.scaleColor;

		ctx.save();
		for (var i = 24; i > 0; --i) {
			if (i%6 === 0) {
				length = options.scaleLength;
				offset = 0;
			} else {
				length = options.scaleLength * .6;
				offset = options.scaleLength - length;
			}
			ctx.fillRect(-options.size/2 + offset, 0, length, 1);
			ctx.rotate(Math.PI / 12);
		}
		ctx.restore();
	};

	/**
	 * Request animation frame wrapper with polyfill
	 * @return {function} Request animation frame method or timeout fallback
	 */
	var reqAnimationFrame = (function() {
		return  window.requestAnimationFrame ||
				window.webkitRequestAnimationFrame ||
				window.mozRequestAnimationFrame ||
				function(callback) {
					window.setTimeout(callback, 1000 / 60);
				};
	}());

	/**
	 * Draw the background of the plugin including the scale and the track
	 */
	var drawBackground = function() {
		options.scaleColor && drawScale();
		options.trackColor && drawCircle(options.trackColor, options.lineWidth);
	};

	/**
	 * Clear the complete canvas
	 */
	this.clear = function() {
		ctx.clearRect(options.size / -2, options.size / -2, options.size, options.size);
	};

	/**
	 * Draw the complete chart
	 * @param  {number} percent Percent shown by the chart between 0 and 100
	 */
	this.draw = function(percent) {
		// do we need to render a background
		if (!!options.scaleColor || !!options.trackColor) {
			// getImageData and putImageData are supported
			if (ctx.getImageData && ctx.putImageData) {
				if (!cachedBackground) {
					drawBackground();
					cachedBackground = ctx.getImageData(0, 0, options.size * scaleBy, options.size * scaleBy);
				} else {
					ctx.putImageData(cachedBackground, 0, 0);
				}
			} else {
				this.clear();
				drawBackground();
			}
		} else {
			this.clear();
		}

		ctx.lineCap = options.lineCap;

		// if barcolor is a function execute it and pass the percent as a value
		var color;
		if (typeof(options.barColor) === 'function') {
			color = options.barColor(percent);
		} else {
			color = options.barColor;
		}

		// draw bar
		if (percent > 0) {
			drawCircle(color, options.lineWidth, percent / 100);
		}
	}.bind(this);

	/**
	 * Animate from some percent to some other percentage
	 * @param  {number} from Starting percentage
	 * @param  {number} to   Final percentage
	 */
	this.animate = function(from, to) {
		var startTime = Date.now();
		options.onStart(from, to);
		var animation = function() {
			var process = Math.min(Date.now() - startTime, options.animate);
			var currentValue = options.easing(this, process, from, to - from, options.animate);
			this.draw(currentValue);
			options.onStep(from, to, currentValue);
			if (process >= options.animate) {
				options.onStop(from, to);
			} else {
				reqAnimationFrame(animation);
			}
		}.bind(this);

		reqAnimationFrame(animation);
	}.bind(this);
};

var EasyPieChart = function(el, opts) {
	var defaultOptions = {
		barColor: '#ef1e25',
		trackColor: '#f9f9f9',
		scaleColor: '#dfe0e0',
		scaleLength: 3,
		lineCap: 'round',
		lineWidth: 1,
		size: 110,
		rotate: 0,
		animate: 500,
		easing: function (x, t, b, c, d) { // more can be found here: http://gsgd.co.uk/sandbox/jquery/easing/
			t = t / (d/2);
			if (t < 1) {
				return c / 2 * t * t + b;
			}
			return -c/2 * ((--t)*(t-2) - 1) + b;
		},
		onStart: function(from, to) {
			return;
		},
		onStep: function(from, to, currentValue) {
			return;
		},
		onStop: function(from, to) {
			return;
		}
	};

	// detect present renderer
	if (typeof(CanvasRenderer) !== 'undefined') {
		defaultOptions.renderer = CanvasRenderer;
	} else if (typeof(SVGRenderer) !== 'undefined') {
		defaultOptions.renderer = SVGRenderer;
	} else {
		throw new Error('Please load either the SVG- or the CanvasRenderer');
	}

	var options = {};
	var currentValue = 0;

	/**
	 * Initialize the plugin by creating the options object and initialize rendering
	 */
	var init = function() {
		this.el = el;
		this.options = options;

		// merge user options into default options
		for (var i in defaultOptions) {
			if (defaultOptions.hasOwnProperty(i)) {
				options[i] = opts && typeof(opts[i]) !== 'undefined' ? opts[i] : defaultOptions[i];
				if (typeof(options[i]) === 'function') {
					options[i] = options[i].bind(this);
				}
			}
		}

		// check for jQuery easing
		if (typeof(options.easing) === 'string' && typeof(jQuery) !== 'undefined' && jQuery.isFunction(jQuery.easing[options.easing])) {
			options.easing = jQuery.easing[options.easing];
		} else {
			options.easing = defaultOptions.easing;
		}

		// create renderer
		this.renderer = new options.renderer(el, options);

		// initial draw
		this.renderer.draw(currentValue);

		// initial update
		if (el.dataset && el.dataset.percent) {

			this.update(parseFloat(el.dataset.percent));
		} else if (el.getAttribute && el.getAttribute('data-percent')) {
			this.update(parseFloat(el.getAttribute('data-percent')));
		}


	}.bind(this);

	/**
	 * Update the value of the chart
	 * @param  {number} newValue Number between 0 and 100
	 * @return {object}          Instance of the plugin for method chaining
	 */
	this.update = function(newValue) {
		newValue = parseFloat(newValue);
		if (options.animate) {
			this.renderer.animate(currentValue, newValue);
		} else {
			this.renderer.draw(newValue);
		}
		currentValue = newValue;
		return this;
	}.bind(this);

	init();
};

$.fn.easyPieChart = function(options) {
	return this.each(function() {
		if (!$.data(this, 'easyPieChart')) {
			$.data(this, 'easyPieChart', new EasyPieChart(this, options));
		}
	});
};

}));

var chartSize = '120';

$('#easy-pie-chart').easyPieChart({
    animate: 500,
    scaleColor: false,
    lineWidth: 6,
    lineCap: 'square',
    size: chartSize,
    trackColor: '#e5e5e5',
    barColor: '#3da0ea'
});
$('#easy-pie-chart').css({
   width : 120 + 'px',
   height : 120 + 'px'
});
$('#easy-pie-chart .percent').css({
  "line-height": chartSize + 'px'
})

  $('.masonry').masonry({
    itemSelector: '.item',
    columnWidth: 40
  });
  $('.masonry2').masonry({
    itemSelector: '.item',
    columnWidth: 25
  });
  var myValue = 0;


  if(myValue < 100){
    $('.check-to-add').show();
    $('.submit-to-add').hide();
    $('.send_q').hide();
  }

  $(document).on("click", ".masonry .item", function () {
    if ($(this).hasClass("select")) {
      $(this).removeClass("select");

      var value = parseInt(document.getElementById('number').value, 0);
      value = isNaN(value) ? 10 : value;
      value++;

      document.getElementById('number').value = value;

      var value = parseInt(document.getElementById('number1').value, 0);
      value = isNaN(value) ? 10 : value;
      value++;
      document.getElementById('number1').value = value;

      $('#easy-pie-chart').data('easyPieChart').update(
        Math.round(myValue-=10)
        );





        console.log(myValue);

        if(myValue < 100){
          $('.check-to-add').show();
          $('.submit-to-add').hide();
          $('.send_q').hide();

        }



    } else {










      if(myValue < 100 ){

        var value = parseInt(document.getElementById('number').value, 0);
        value = isNaN(value) ? 10 : value;
        value--;
        document.getElementById('number').value = value;

        var value = parseInt(document.getElementById('number1').value, 0);
        value = isNaN(value) ? 10 : value;
        value--;
        document.getElementById('number1').value = value;


        $(this).addClass("select");
        $('#easy-pie-chart').data('easyPieChart').update(
          Math.round(myValue+=10)

          );
        }



          console.log(value);



          if(myValue >= 100 ){



            $('.check-to-add').hide();
            $('.submit-to-add').show();
            $('.send_q').show();

            myValue = 100;
          }else{
            $(this).addClass("select");


          }








    }


  });

  function check(checkboxid) {
   document.getElementById(checkboxid).checked = "checked";
   }

</script>

@stop('scripts')
