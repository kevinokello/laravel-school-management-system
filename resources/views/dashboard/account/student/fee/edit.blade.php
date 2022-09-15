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
                                    <div class="form-group">
                                        <img src="{{ asset('uploads/students/' . $student->student_photo) }}" width="50px"
                                            height="40px" alt="Img">
                                    </div>
                                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            {{-- <li><a data-action="collapse"><i class="icon-minus4"></i></a></li> --}}
                                            <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                                            <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="card-body collapse in">
                                    <div class="card-block">
                                        <form action="{{ url('accounts/student/fee/update/' . $student->id) }}"
                                            class="form" method="POST">
                                            @csrf
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1"><b>Admission Number</b></label>
                                                            <input type="text" id="projectinput1" class="form-control"
                                                                placeholder="Admission Number"
                                                                value="{{ $student->admission_no }}" name="admission_no"
                                                                readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1"><b>Fee Balance</b></label>
                                                            <input type="text" id="projectinput1" class="form-control"
                                                                placeholder="Admission Number"
                                                                value="{{ $student->fee_balance }}" name="fee_balance">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-actions">
                                                <div style="text-align: center;" class="wrapper">
                                                    <button
                                                        style="  border-color: #0073aa;
            background-color: #0073aa;
            color: #fff; height:50px; width:170px; "
                                                        type="submit" class="btn btn-primary">
                                                        Update student details
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>
@endsection
