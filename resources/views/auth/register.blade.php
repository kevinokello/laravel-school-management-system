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
        .btn-primary2 {
            border-color: #0073aa;
            background-color: #0073aa;
            color: #FFFFFF;
        }

        .btn-primary2:hover {
            background-color: #0073aa;
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
					<img src="../../app-assets/images/logo/robust-logo-dark.png" alt="branding logo">
				</div> --}}
                                <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2">
                                    <span>Create Account</span>
                                </h6>
                            </div>
                            <div class="card-body collapse in">
                                <div class="card-block">
                                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                    <form class="form-horizontal form-simple" method="POST"
                                        action="{{ route('register') }}">
                                        @csrf
                                        <x-label for="name" :value="__('Name')" />
                                        <fieldset class="form-group position-relative has-icon-left mb-1">
                                            <input id="name" type="text"
                                                class="form-control form-control-lg input-lg" name="name"
                                                :value="old('name')" required autofocus placeholder="Your Name">
                                            <div class="form-control-position">
                                                <i class="icon-head"></i>
                                            </div>
                                        </fieldset>
                                        <x-label for="email" :value="__('Email')" />
                                        <fieldset class="form-group position-relative has-icon-left mb-1">
                                            <input type="email" name="email" :value="old('email')" required
                                                class="form-control form-control-lg input-lg" id="email"
                                                placeholder="Your Email Address" required>
                                            <div class="form-control-position">
                                                <i class="icon-mail6"></i>
                                            </div>
                                        </fieldset>

                                        <x-label for="password" :value="__('Password')" />
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="password" name="password" required autocomplete="new-password"
                                                class="form-control form-control-lg input-lg" id="password"
                                                placeholder="Enter Password" required>
                                            <div class="form-control-position">
                                                <i class="icon-key3"></i>
                                            </div>
                                        </fieldset>

                                        <x-label for="password_confirmation" :value="__('Confirm Password')" />
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input id="password_confirmation" type="password"
                                                name="password_confirmation" required
                                                class="form-control form-control-lg input-lg"
                                                placeholder="Enter Password" required>
                                            <div class="form-control-position">
                                                <i class="icon-key3"></i>
                                            </div>
                                        </fieldset>
                                        {{-- <div class="mt-4">
                                            <x-label for="role_id" value="{{ __('Register as:') }}" />
                                            <select name="role_id"
                                                class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                                <option value="student">Student</option>
                                                <option value="teacher">Teacher</option>
                                            </select>
                                        </div> --}}
                                        <button type="submit" class="btn btn-primary2 btn-lg btn-block"><i
                                                class="icon-unlock2"></i> Register</button>
                                    </form>
                                </div>
                                <p class="text-xs-center">Already have an account ? <a href="{{ route('login') }}"
                                        class="card-link">Login</a></p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
