
@extends('Represent.layouts.template')
@section('Represent.content')






				<section role="main" class="content-body">

					<header class="page-header">
						<h2>{{$header}}</h2>

						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="{{url('representatives/dashboard')}}">
										<i class="fa fa-home"></i>
									</a>
								</li>

								<li><span>{{$header}}</span></li>
							</ol>

							<a class="sidebar-right-toggle" data-open="sidebar-right" ><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>


					<!-- start: page -->



<div class="row">
							<div class="row">
							<div class="col-xs-12">



							</div>
						</div>
				</div>
</section>
@stop


@section('scripts')

<script>


</script>

@stop('scripts')
