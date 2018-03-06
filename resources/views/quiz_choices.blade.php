@extends('layouts.app')

@section('content')




<section class="bg-whites " id="about" style="padding: 65px 0 8px 0;">
  <div class="container">
    <div class="row quiz-choices ">
      <div class="col-md-12 ">
        <h3 class="margin">เลือก 10 ประเด็นที่สำคัญ
        สำหรับประเทศไทย</h3>
        <br>
      </div>
      <div class="col-md-8 ">
        <p class="text-muted">ทุกประเด็นก็ดูจะเป็นเรื่องที่สำคัญเหมือนกัน แต่อันไหนกันล่ะที่คุณจะเลือกทำก่อน? </p>
      </div>
      <div class="col-md-4 text-center hidden-sm hidden-xs">
        @if (Auth::guest())
        <p>(1/10)</p>
        @else
        <!--<a href="{{('/')}}" style="color: #f05f40; font-weight: 700; font-size: 12px;">
        <img src="//{{Auth::user()->avatar}}" alt="{{Auth::user()->name}}" style="height:32px; vertical-align: middle; margin-right:7px;" class="img-circle">
        {{ Auth::user()->name }} (1/10)
      </a> -->
        @endif

        <br>
      </div>
    </div>
  </div>
</section>


<section id="services" style="background: #f2f8fa; padding: 1.5rem 0;">

  <div class="container">

    <div class="quiz-section container-fluid col-md-12" style="background:#F2F8FA; padding: 30px 0;">

      <div class="masonry">
        <div class="item size-1">ปราปปรามคอร์รัปชั่น</div>
        <div class="item size-3">ปฏิรูปรถเมล์</div>
        <div class="item size-4">ปรัปปรุงถนนหนทาง</div>
        <div class="item size-1">โครงการรักษาฟรี</div>
        <div class="item size-2">พัฒนาวิชาชีพครู</div>
        <div class="item size-4">พัฒนาโรงเรียน</div>
        <div class="item size-3">ส่งเสริมอุตสาหกรรมบันเทิง</div>
        <div class="item size-3">พัฒนากองทัพ</div>
        <div class="item size-2">ลดค่าครองชีพ</div>
        <div class="item size-1">ปราปปรามยาเสพติด</div>
        <div class="item size-4">สร้างรถไฟฟ้าความเร็วสูง</div>
        <div class="item size-2">เสริมอาวุธกองทัพ</div>
        <div class="item size-3">พัฒนากองทัพ</div>
        <div class="item size-2">ลดค่าครองชีพ</div>
        <div class="item size-1">ปราปปรามยาเสพติด</div>
        <div class="item size-4">สร้างรถไฟฟ้าความเร็วสูง</div>
        <div class="item size-2">เสริมอาวุธกองทัพ</div>

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

@section('scripts')
<script src='https://cdnjs.cloudflare.com/ajax/libs/vis/4.16.1/vis.min.js'></script>
<script src="{{url('js/jquery.masonry.min.js')}}"></script>
<script>
  $('.masonry').masonry({
    itemSelector: '.item',
    columnWidth: 100
  });

  $(document).on("click", ".masonry .item", function () {
    if ($(this).hasClass("select")) {
      $(this).removeClass("select");
    } else {
      $(this).addClass("select");
    }
  });
</script>

@stop('scripts')
