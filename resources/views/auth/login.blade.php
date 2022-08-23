<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" type="text/css" href="{{ url('dash/app-assets/css/bootstrap.css') }}">
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="{{ url('dash/app-assets/fonts/icomoon.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ url('dash/app-assets/fonts/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('dash/app-assets/vendors/css/extensions/pace.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('dash/app-assets/vendors/css/ui/prism.min.css') }}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('dash/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('dash/app-assets/css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('dash/app-assets/css/colors.css') }}">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ url('dash/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ url('dash/app-assets/css/core/menu/menu-types/vertical-overlay-menu.css') }}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('dash/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('dash/app-assets/css/pages/login-register.css') }}">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .btn-primary {
            border-color: #448aff;
            background-color: #448aff;
            color: #FFFFFF;
        }
              .btn-primary:hover {
  background-color: #448aff;
}
    </style>
</head>

<body>
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row"></div>
            <div class="content-body">
                <section class="flexbox-container">
                    <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 m-0">
                            <div class="card-header no-border">
                                {{-- <div class="card-title text-xs-center">
                                    <div class="p-1">
                                        <img src="{{ asset('dash/app-assets/images/logo/robust-logo-dark.png') }}"
                                            alt="branding logo" />
                                    </div>
                                </div> --}}
                                <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2">
                                    <span>Login to sms</span>
                                </h6>
                            </div>
                            <div class="card-body collapse in">
                                <div class="card-block">
                                    <x-auth-session-status class="mb-4" :status="session('status')" />
                                    <!-- Validation Errors -->
                                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                    <form class="form-horizontal form-simple" method="POST"
                                        action="{{ route('login') }}">
                                        @csrf
                                        <label for="email" :value="__('Email')">Email</label>
                                        <fieldset class="form-group position-relative has-icon-left mb-1">

                                            <input type="text" class="form-control form-control-lg input-lg"
                                                id="email" placeholder="User Name/Email Address" type="email"
                                                name="email" :value="old('email')" required autofocus>
                                            <div class="form-control-position">
                                                <i class="icon-head"></i>
                                            </div>
                                        </fieldset>
                                        <label for="password" :value="__('Password')">Password</label>
                                        <fieldset class="form-group position-relative has-icon-left">

                                            <input type="password" class="form-control form-control-lg input-lg"
                                                id="password" placeholder="Enter Password" type="password"
                                                name="password" required autocomplete="current-password">
                                            <div class="form-control-position">
                                                <i class="icon-key3"></i>
                                            </div>
                                        </fieldset>
                                        <button type="submit" class="btn btn-primary btn-lg btn-block"><i
                                                class="icon-unlock2"></i> Login</button>
                                    </form>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="">
                                    <p class="float-sm-left text-xs-center m-0">
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}"
                                                class="card-link">{{ __('Forgot your password?') }}</a>
                                        @endif
                                    </p>
                                    <p class="float-sm-right text-xs-center m-0">
                                        New to sms?
                                        <a href="{{ route('register') }}" class="card-link">Sign Up</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
