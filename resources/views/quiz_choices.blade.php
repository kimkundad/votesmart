@extends('layouts.app')

@section('content')




<section class="bg-whites " id="about" style="padding: 125px 0 20px 0;">
  <div class="container">
    <div class="row quiz-choices ">
      <div class="col-md-8 ">
        <h3 class="margin">เลือก 10 ประเด็นที่สำคัญ
        สำหรับประเทศไทย</h3>
        <br>
      </div>
      <div class="col-md-8 ">
        <p class="text-muted">ทุกประเด็นก็ดูจะเป็นเรื่องที่สำคัญเหมือนกัน แต่อันไหนกันล่ะที่คุณจะเลือกทำก่อน? </p>
      </div>



      <div class="col-md-4 text-center hidden-sm hidden-xs">
        <a class="btn btn-light btn-xl js-scroll-trigger" style="margin-top:-18px; background: #e5eff3; color: #0479bd;"><input type="text" id="number" value="0" style="background-color: #e5eff3;  border:  none; width: 26px; font-weight: 700; color: #0479bd; padding-left: 10px;">/10</a>
        <br>
      </div>



    </div>
  </div>
</section>

<style>
input:checked{
  transform: scale(0.9);
  box-shadow: 0 0 5px #bdbdff;
}
</style>
<section id="services" style="background: #f2f8fa; padding: 1.5rem 0;">

  <div class="container">

    <form  method="POST" id="cutproduct" action="{{url('add_vote')}}">
      {{ csrf_field() }}
      <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" class="form-control">

      <div class="masonry" style="padding-left:20px;">

        @if($objs)
           @foreach($objs as $u)
        <div class="item itemch-z size-{{$u->options}}" onclick="javascript:check('itemch-{{$u->id_q}}');">{{$u->name_quiz}}
        <input type="checkbox" class="checkbox1" name="quiz[]" id="itemch-{{$u->id_q}}" value="{{$u->id_q}}" >
        </div>
        @endforeach
     @endif

    </div>


      <button type="submit" class="btn btn-primary send_q btn-xl js-scroll-trigger" href="" style="padding: 0.7rem 2rem;font-weight: 500;"> ส่งข้อมูล</button>
      <a class="scroll-to-top visible-sm visible-xs" href="#"> <input type="text" id="number1" value="0" style="background-color: #ffffff; border:  none; width: 23px; font-weight: 700; color: #0479bd; padding-left: 10px; ">/10 </a>



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
<script src="http://tjcrowder.github.io/simple-snippets-console/snippet.js"></script>
<script>
  $('.masonry').masonry({
    itemSelector: '.item',
    columnWidth: 50
  });

  $(document).on("click", ".masonry .item", function () {
    if ($(this).hasClass("select")) {
      $(this).removeClass("select");

      var value = parseInt(document.getElementById('number').value, 10);
      value = isNaN(value) ? 0 : value;
      value--;
      document.getElementById('number').value = value;


      var value = parseInt(document.getElementById('number1').value, 10);
      value = isNaN(value) ? 0 : value;
      value--;
      document.getElementById('number1').value = value;

    } else {
      $(this).addClass("select");

      var value = parseInt(document.getElementById('number').value, 10);
      value = isNaN(value) ? 0 : value;
      value++;
      document.getElementById('number').value = value;

      var value = parseInt(document.getElementById('number1').value, 10);
      value = isNaN(value) ? 0 : value;
      value++;
      document.getElementById('number1').value = value;

    }
  });

  function check(checkboxid) {
   document.getElementById(checkboxid).checked = "checked";
   }

</script>

@stop('scripts')
