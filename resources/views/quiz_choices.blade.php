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

    <form  method="POST" action="{{url('quiz_choices')}}">
      {{ csrf_field() }}


      <div class="masonry">

        @if($objs)
           @foreach($objs as $u)
        <div class="item size-{{$u->options}}">{{$u->name_quiz}}</div>
        @endforeach
     @endif

    </div>


      <button type="submit" class="btn btn-primary send_q btn-xl js-scroll-trigger" href="" style="padding: 0.7rem 2rem;font-weight: 500;"> ส่งข้อมูล</button>
      <a class="scroll-to-top visible-sm visible-xs" href="#"> 1/10 </a>



</form>


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
