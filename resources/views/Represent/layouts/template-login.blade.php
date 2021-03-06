<!doctype html>
<html class="fixed">
    <head>

        <!-- Basic -->
        <meta charset="UTF-8">
        <title>Administrators Login</title>
        <meta name="keywords" content="Teeneejj Login" />
        <meta name="description" content="Teeneejj Login">


        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />


        <link rel="icon" href="{{asset('/assets/images/ico/icon.png')}}" type="image/gif" sizes="48x48">




        <!-- Web Fonts  -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="{{asset('/assets/vendor/bootstrap/css/bootstrap.css')}}" />

        <link rel="stylesheet" href="{{asset('/assets/vendor/font-awesome/css/font-awesome.css')}}" />
        <link rel="stylesheet" href="{{asset('/assets/vendor/magnific-popup/magnific-popup.css')}}" />


        <!-- Theme CSS -->
        <link rel="stylesheet" href="{{asset('/assets/stylesheets/theme.css')}}" />
        <link rel="stylesheet" href="{{asset('/assets/style.css')}}" />

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="{{asset('/assets/stylesheets/theme-custom.css')}}">

        <!-- Head Libs -->
        <script src="{{asset('/assets/vendor/modernizr/modernizr.js')}}"></script>
        <style type="text/css">
        body{
                background: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url({{asset('./assets/image/Fonds.jpeg')}}) no-repeat center bottom;
                background-size: cover;
                color: #ffffff;
            }

        .input-group-icon .input-group-addon span.icon.icon-lg, .input-search .input-group-addon span.icon.icon-lg {
            padding: 5px 14px;
            font-size: 18px;
        }
        .body-sign {
            display: table;
            height: 100vh;
            margin: 0 auto;
            max-width: 440px;
            padding: 0 15px;
            width: 100%;
        }
        .body-sign .panel-sign .panel-body {
            background: #FFF;
            border-top: none;
            border-radius: 5px 5px 5px 5px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
            padding: 33px 33px 15px;
        }
        .center-block {
            display: block;
            margin-left: auto;
            margin-right: auto;
         }
         .body-locked {
    background: none;
    max-width: none;
    min-height: 400px;
}
.body-locked .current-user {
    margin-top: 10px;
    margin-bottom: 5px;
}
        .body-locked .current-user .user-image {
    border: none;
}
label {
    color: #999;
}
        </style>
    </head>

    <body class="loading-overlay-showing" data-loading-overlay>
        <span class="loading-overlay dark">
            <span class="loader white"></span>
        </span>

        <!-- start: page -->











@yield('admin.content')



















        <!-- end: page -->

        <!-- Vendor -->
        <script src="{{asset('/assets/vendor/jquery/jquery.js')}}"></script>
        <script src="{{asset('/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>

        <script src="{{asset('/assets/vendor/bootstrap/js/bootstrap.js')}}"></script>
        <script src="{{asset('/assets/vendor/nanoscroller/nanoscroller.js')}}"></script>
        <script src="{{asset('/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>



        <!-- Theme Base, Components and Settings -->
        <script src="{{asset('/assets/javascripts/theme.js')}}"></script>

        <!-- Theme Custom -->
        <script src="{{asset('/assets/javascripts/theme.custom.js')}}"></script>

        <!-- Theme Initialization Files -->
        <script src="{{asset('/assets/javascripts/theme.init.js')}}"></script>
        <!-- Analytics to Track Preview Website -->
        <script src="{{asset('/assets/javascripts/ui-elements/examples.loading.overlay.js')}}"></script>



    </body>
</html>
