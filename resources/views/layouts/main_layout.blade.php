<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
    <title>Ekton Project Analytics</title>
    <!-- Stylesheets -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="{{ asset('assets/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Teko:wght@300;400;570;600;700&display=swap') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/linoor-icons-2.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/hover.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/jarallax.css') }}">
    <link href="{{ asset('assets/css/custom-animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- rtl css -->
    <link href="{{ asset('assets/css/rtl.css') }}" rel="stylesheet">
    <!-- Responsive File -->
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

    <!-- Color css -->
    <link rel="stylesheet" id="jssDefault" href="{{ asset('assets/css/colors/color-default.css') }}">

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" id="fav-shortcut" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" id="fav-icon" type="image/x-icon">

    <!-- Responsive Settings -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>

    @yield('content')

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/TweenMax.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/js/mixitup.js') }}"></script>
    <script src="{{ asset('assets/js/appear.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/jQuery.style.switcher.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/../ajax/libs/js-cookie/2.1.2/js.cookie.min.js') }}">
    </script>
    <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom-script.js') }}"></script>

    <script src="{{ asset('assets/js/lang.js') }}"></script>
    <script src="{{ asset('assets/../translate_a/element.js?cb=googleTranslateElementInit') }}"></script>
    <script src="{{ asset('assets/js/color-switcher.js') }}"></script>
</body>

</html>
