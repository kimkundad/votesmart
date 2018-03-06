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
