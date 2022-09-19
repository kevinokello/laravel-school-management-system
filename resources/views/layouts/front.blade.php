<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="{{ url('front/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ url('front/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ url('front/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ url('front/css/slick-slider.css') }}" rel="stylesheet">
    <link href="{{ url('front/css/prettyphoto.css') }}" rel="stylesheet">
    <link href="{{ url('front/build/mediaelementplayer.css') }}" rel="stylesheet">
    <link href="{{ url('front/style.css') }}" rel="stylesheet">
    <link href="{{ url('front/css/color.css') }}" rel="stylesheet">
    <link href="{{ url('front/css/color-two.css') }}" rel="stylesheet">
    <link href="{{ url('front/css/color-three.css') }}" rel="stylesheet">
    <link href="{{ url('front/css/color-four.css') }}" rel="stylesheet">
    <link href="{{ url('front/css/responsive.css') }}" rel="stylesheet">
    <style>

    </style>
    <!-- Scripts -->
</head>

<body>
    <div class="wm-main-wrapper">
        @include('front.inc.header')
        @yield('content')
        @include('front.inc.footer')
    </div>
    </div>
    <script type="text/javascript" src="{{ url('front/script/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ url('front/script/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ url('front/script/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('front/script/jquery.prettyphoto.js') }}"></script>
    <script type="text/javascript" src="{{ url('front/script/jquery.countdown.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('front/script/fitvideo.js') }}"></script>
    <script type="text/javascript" src="{{ url('front/script/skills.js') }}"></script>
    <script type="text/javascript" src="{{ url('front/script/slick.slider.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('front/script/waypoints-min.js') }}"></script>
    <script type="text/javascript" src="{{ url('front/build/mediaelement-and-player.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('front/script/isotope.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('front/script/jquery.nicescroll.min.js') }}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript" src="{{ url('front/script/functions.js') }}"></script>
</body>

</html>
