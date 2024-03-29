@extends('layouts.dash')
@section('content')
    <style>
        .btn-primary2 {
            border-color: #054473;
            background-color: #054473;
            color: #FFFFFF;
        }

        .btn-primary2:hover {
            background-color: #054473;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-body">
                <section class="flexbox-container">
                    <div class="col-md-8  col-xs-10 offset-xs-1 box-shadow-2 p-2">
                        <div class="card border-grey border-lighten-3 m-0">
                            <div class="card-body collapse in">
                                <div class="card-block">
                                    <form class="form-horizontal form-simple" method="POST"
                                        action="{{ url('users/store') }}">
                                        @csrf
                                        <div class="mt-4">
                                            <x-label for="school_id" value="{{ __('Select school:') }}" />
                                            <select id="school_id" name="school_id"
                                                class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm js-example-basic-single">
                                                @foreach ($schools as $item)
                                                    <option value="{{ $item->id }} ">
                                                        {{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <fieldset class="form-group position-relative has-icon-left mb-1">
                                            <div class="mt-4">
                                                <x-label for="role_id" value="{{ __('Select Role:') }}" />
                                                <select name="role_id"
                                                    class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                                    {{-- <option value="student">Student</option>
                                                    <option value="teacher">Teacher</option> --}}
                                                    <option value="admin">Admin</option>
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
                                                class="icon-user"></i> Create User</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
@endsection
