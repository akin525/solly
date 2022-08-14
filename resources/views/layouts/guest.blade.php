<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content=" We offer instant recharge of Airtime, Databundle, CableTV (DStv, GOtv & Startimes), Electricity Bill Payment and more">

        <title>Sollyinstantawoof|</title>
        <link rel="shortcut icon" href="https://sollyinstantawoof.com.ng/images/fd.jpg" />
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="icon" type="image/png" sizes="16x16" href="https://sollyinstantawoof.com.ng/images/fd.jpg">
        <!-- Custom CSS -->
        <link rel="shortcut icon" href="{{asset('"assets/images/favicon.ico')}}">

        <!-- Layout config Js -->
        <script src="{{asset('assets/js/layout.js')}}"></script>
        <!-- Bootstrap Css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- custom Css-->
        <link href="{{asset('assets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />

    </head>
    <body>
    <style>
        .preloader
        {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: #fff;
            z-index: 9999;
            text-align: center;
        }
        .preloader-icon
        {
            position: relative;
            top: 45%;
            width: 100px;
            border-radius: 50%;
            animation: shake 1.5s infinite;
        }
        @keyframes shake
        {
            0% { transform: translate(1px, -1px) rotate(0deg);}
            10% { transform: translate(1px, -3px) rotate(-1deg);}
            20% { transform: translate(1px, -5px) rotate(-3deg);}
            30% { transform: translate(1px, -7px) rotate(0deg);}
            40% { transform: translate(1px, -9px) rotate(1deg);}
            50% { transform: translate(1px, -11px) rotate(3deg);}
            60% { transform: translate(1px, -9px) rotate(0deg);}
            70% { transform: translate(1px, -7px) rotate(-1deg);}
            80% { transform: translate(1px, -5px) rotate(-3deg);}
            90% { transform: translate(1px, -3px) rotate(0deg);}
            100% { transform: translate(1px, -1px) rotate(-1deg);}
        }
    </style>
    <div class="preloader"> <img class="preloader-icon" src="{{asset('gp.gif')}}" alt="My Site Preloader"> </div>

    @include('sweetalert::alert')
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

<script>

</script>
    <!-- JAVASCRIPT -->
    <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{asset('assets/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
    <script src="{{asset('assets/js/plugins.js')}}"></script>

    <!-- validation init -->
    <script src="{{asset('assets/js/pages/form-validation.init.js')}}"></script>
    <!-- password create init -->
    <script src="{{asset('assets/js/pages/passowrd-create.init.js')}}"></script>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>




    <style>
        .float{
            position:fixed;
            width:60px;
            height:60px;
            bottom:40px;
            right:40px;
            background-color:#25d366;
            color:#FFF;
            border-radius:50px;
            text-align:center;
            font-size:30px;
            box-shadow: 2px 2px 3px #999;
            z-index:100;
        }

        .my-float{
            margin-top:16px;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="http:wa.me/2348080301180/?text=Goodday, My Username is....." class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
    <script>
        window.onload = function(){ document.querySelector(".preloader").style.display = "none"; }
    </script>
    </body>
</html>
