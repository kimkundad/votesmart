@extends('admin.layouts.template')





@section('admin.content')

<style>
.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, 0.125);
    border-radius: 0.25rem;
}
.card-body {
    background: #fdfdfd;
    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
    border-radius: 5px;
}
.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem;
}
</style>




        <section role="main" class="content-body">

          <header class="page-header">
            <h2>{{$datahead}}</h2>

            <div class="right-wrapper pull-right">
              <ol class="breadcrumbs">
                <li>
                  <a href="{{url('admin/dashboard')}}">
                    <i class="fa fa-home"></i>
                  </a>
                </li>

                <li><span>{{$datahead}}</span></li>
              </ol>

              <a class="sidebar-right-toggle" data-open="sidebar-right" ><i class="fa fa-chevron-left"></i></a>
            </div>
          </header>


          <!-- start: page -->



          <div class="row">





<div class="col-md-3">

  <section class="card">
    <div class="card-body">
      <div class="thumb-info ">

        @if($user->provider == 'email')
                        <img class="img-responsive" src="{{url('assets/images/avatar/'.$user->avatar)}}">
                        @else
                        <img class="img-responsive" src="//{{$user->avatar}}">
                        @endif


      </div>



      <hr class="dotted short">

      <h5 class="mb-2 mt-3">Result</h5>
      <p class="text-2">

        @if($result)
           @foreach($result as $u)




           #{{$u->options->result_name}}<br>



           @endforeach
        @endif
         </p>




      <hr class="dotted short">

      <div class="social-icons-list">
        <a rel="tooltip" data-placement="bottom" target="_blank" href="" data-original-title="Facebook">
          <i class="fa fa-facebook"></i><span>Facebook</span></a>

      </div>

    </div>
  </section>


</div>










<div class="col-md-6">

  <section class="card">
    <div class="card-body">

<h4 class="mb-3 pt-4">เรื่องราวที่ได้เลือก</h4>

      <div class="timeline timeline-simple mt-3 mb-3">
      												<div class="tm-body">

      													<ol class="tm-items">

                                  @if($objs)
                                     @foreach($objs as $u)
      														<li>
      															<div class="tm-box">
      																<h5><b>{{$u->name_cat}}</b></h5>
      																<p>
                                        @if(isset($u->options))
                                            @foreach($u->options as $u)
                                        <button type="button" style="border-radius: 30px; margin-top:5px;" class="mb-1 mt-1 mr-1 btn btn-sm btn-primary">
                                          #{{$u->name_quiz}}
                                        </button>

                                        @endforeach
                                      @endif


      																</p>
      															</div>
      														</li>

                                  @endforeach
                               @endif

      													</ol>
      												</div>
      											</div>




    </div>
  </section>


</div>

















          						</div>




</section>
@stop



@section('scripts')


@stop('scripts')
