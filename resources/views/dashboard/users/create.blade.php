@extends('layouts.dash')
@section('content')
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row"></div>
            <div class="content-body">
                <section class="flexbox-container">
                    <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 m-0">
                            <div class="card-header no-border">
                            </div>
                            <div class="card-body collapse in">
                                <div class="card-block">
                                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                    <form class="form-horizontal form-simple" method="POST"
                                        action="{{ route('register') }}">
                                        @csrf
                                        <fieldset class="form-group position-relative has-icon-left mb-1">
                                            <div class="mt-4">
                                                <x-label for="role_id" value="{{ __('Register as:') }}" />
                                                <select name="role_id"
                                                    class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                                    <option value="student">Student</option>
                                                    <option value="teacher">Teacher</option>
                                                </select>
                                            </div>
                                        </fieldset>
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
                                            <input id="password_confirmation" type="password" name="password_confirmation"
                                                required class="form-control form-control-lg input-lg"
                                                placeholder="Enter Password" required>
                                            <div class="form-control-position">
                                                <i class="icon-key3"></i>
                                            </div>
                                        </fieldset>

                                        <button type="submit" class="btn btn-primary2 btn-lg btn-block"><i
                                                class="icon-unlock2"></i> Register</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
