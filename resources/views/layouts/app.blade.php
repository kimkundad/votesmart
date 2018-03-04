<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Creative - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url('front/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{url('front/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="{{url('front/vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{url('front/css/creative.css')}}" rel="stylesheet">
    <style>
    .navbar-light .navbar-toggler {
    color: rgb(8, 176, 237);
    border: none !important;
    }
    .navbar-light .navbar-toggler-icon {
     background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(8, 176, 237, 0.7)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
    }
    .navbar-toggler {
    padding: .25rem .0rem;
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
  font-size: 14px;
}
    </style>
  </head>

  <body id="page-top">




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

  </body>

</html>
