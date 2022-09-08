@extends('layouts.dash')
@section('content')
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="form-section"><i class="icon-head"></i> Personal Info</h4>
                                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                </div>
                                <div class="card-body collapse in">
                                    <div class="card-block">
                                        <form method="post" action="{{ url('profile/password/update') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <h5>Current Password <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="password" name="oldpassword" id="current_password"
                                                                class="form-control">
                                                            @error('oldpassword')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>New Password <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="password" name="password" id="password"
                                                                class="form-control">
                                                            @error('password')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Confirm Password <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="password" name="password_confirmation"
                                                                id="password_confirmation" class="form-control">
                                                            @error('password_confirmation')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror

                                                        </div>

                                                    </div>

                                                    <div class="text-xs-center">
                                                        <button
                                                            style="  border-color: #448aff;
            background-color: #448aff;
            color: #fff; height:50px; width:170px; "
                                                            type="submit" class="btn btn-primary">
                                                            Change password
                                                        </button>
                                                    </div>
                                        </form>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->

                </section>
            </div>
        </div>
    </div>
@endsection
