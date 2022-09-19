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
    <!-- Scripts -->
</head>
   <body>
    <div class="wm-main-wrapper">
        @include('front.inc.header')
        @yield('content')
        @include('front.inc.footer')
           <div class="modal fade" id="ModalLogin" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="wm-modallogin-form wm-login-popup">
              <span class="wm-color">Login to Your Account</span>
              <form>
                <ul>
                  <li>
                    <input
                      type="text"
                      value="Your Username"
                      onblur="if(this.value == '') { this.value ='Your Username'; }"
                      onfocus="if(this.value =='Your Username') { this.value = ''; }"
                    />
                  </li>
                  <li>
                    <input
                      type="password"
                      value="password"
                      onblur="if(this.value == '') { this.value ='password'; }"
                      onfocus="if(this.value =='password') { this.value = ''; }"
                    />
                  </li>
                  <li>
                    <a href="#" class="wm-forgot-btn">Forgot Password?</a>
                  </li>
                  <li><input type="submit" value="Sign In" /></li>
                </ul>
              </form>
              <span class="wm-color">or try our socials</span>
              <ul class="wm-login-social-media">
                <li>
                  <a href="#"><i class="wmicon-social5"></i> Facebook</a>
                </li>
                <li class="wm-twitter-color">
                  <a href="#"><i class="wmicon-social4"></i> twitter</a>
                </li>
                <li class="wm-googleplus-color">
                  <a href="#"
                    ><i class="fa fa-google-plus-square"></i> Google+</a
                  >
                </li>
              </ul>
              <p>Not a member yet? <a href="#">Sign-up Now!</a></p>
            </div>
            <div class="wm-modallogin-form wm-register-popup">
              <span class="wm-color">create Your Account today</span>
              <form>
                <ul>
                  <li>
                    <input
                      type="text"
                      value="Your Username"
                      onblur="if(this.value == '') { this.value ='Your Username'; }"
                      onfocus="if(this.value =='Your Username') { this.value = ''; }"
                    />
                  </li>
                  <li>
                    <input
                      type="text"
                      value="Your E-mail"
                      onblur="if(this.value == '') { this.value ='Your E-mail'; }"
                      onfocus="if(this.value =='Your E-mail') { this.value = ''; }"
                    />
                  </li>
                  <li>
                    <input
                      type="password"
                      value="password"
                      onblur="if(this.value == '') { this.value ='password'; }"
                      onfocus="if(this.value =='password') { this.value = ''; }"
                    />
                  </li>
                  <li>
                    <input
                      type="text"
                      value="Confirm Password"
                      onblur="if(this.value == '') { this.value ='Confirm Password'; }"
                      onfocus="if(this.value =='Confirm Password') { this.value = ''; }"
                    />
                  </li>
                  <li><input type="submit" value="Create Account" /></li>
                </ul>
              </form>
              <span class="wm-color">or signup with your socials:</span>
              <ul class="wm-login-social-media">
                <li>
                  <a href="#"><i class="wmicon-social5"></i> Facebook</a>
                </li>
                <li class="wm-twitter-color">
                  <a href="#"><i class="wmicon-social4"></i> twitter</a>
                </li>
                <li class="wm-googleplus-color">
                  <a href="#"
                    ><i class="fa fa-google-plus-square"></i> Google+</a
                  >
                </li>
              </ul>
              <p>Already a member? <a href="#">Sign-in Here!</a></p>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    <!-- ModalLogin Box -->

    <!-- ModalSearch Box -->
    <div class="modal fade" id="ModalSearch" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="wm-modallogin-form">
              <span class="wm-color">Search Your KeyWord</span>
              <form>
                <ul>
                  <li>
                    <input
                      type="text"
                      value="Keywords..."
                      onblur="if(this.value == '') { this.value ='Keywords...'; }"
                      onfocus="if(this.value =='Keywords...') { this.value = ''; }"
                    />
                  </li>
                  <li><input type="submit" value="Search" /></li>
                </ul>
              </form>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
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
