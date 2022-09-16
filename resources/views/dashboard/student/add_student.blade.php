@extends('layouts.dash')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-xs-12 mb-1">
                    {{-- <h2 class="content-header-title">Add student</h2> --}}
                </div>
                <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
                    <div class="breadcrumb-wrapper col-xs-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Admit student</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form">Admit student</h4>

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
                                        <form action="{{ url('student/add-student') }}" class="form" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="icon-head"></i> Personal info</h4>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Academic year</label>
                                                            <select required name="academic_id" id="year"
                                                                class="form-control">
                                                                <option value="">-- Select Academic year --</option>
                                                                @foreach ($academic as $acaitem)
                                                                    <option value="{{ $acaitem->id }} ">
                                                                        {{ $acaitem->academic_year }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput5">Cohort</label>
                                                            <select required name="cohort_id" id="cohort"
                                                                class="form-control">
                                                                <option value="">-- Select Class --</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput6">Session</label>
                                                            <select required name="session_id" id="session"
                                                                class="form-control">
                                                                <option disabled="" selected="">--Select Session--
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1">First Name</label>
                                                            <input type="text" id="projectinput1" class="form-control"
                                                                placeholder="First Name" name="first_name">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1">Middle Name</label>
                                                            <input type="text" id="projectinput1" class="form-control"
                                                                placeholder="MIddle Name" name="middle_name">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput2">Last Name</label>
                                                            <input type="text" id="projectinput2" class="form-control"
                                                                placeholder="Last Name" name="last_name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Religion</label>
                                                            <select id="religion_id" name="religion_id"
                                                                class="form-control">
                                                                <option value="none" selected="" disabled="">
                                                                    Select religion</option>
                                                                <option value="christian">Christian</option>
                                                                <option value="muslim">Muslim</option>
                                                                <option value="hindu">Hindu</option>
                                                                <option value="other">Other</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="gender">Gender</label>
                                                            <select id="gender_id" name="gender_id" class="form-control">
                                                                <option value="none" selected="" disabled="">
                                                                    Select gender</option>
                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>

                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1">Residential Details/location</label>
                                                            <input type="text" id="projectinput1" class="form-control"
                                                                placeholder="Residential Details/location"
                                                                name="location_id">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1">Email Address</label>
                                                            <input type="text" id="projectinput1" class="form-control"
                                                                placeholder="Email" name="email">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="timesheetinput3">Date of birth</label>
                                                            <div class="position-relative has-icon-left">
                                                                <input type="date" id="timesheetinput3"
                                                                    class="form-control" name="date_of_birth">
                                                                <div class="form-control-position">
                                                                    <i class="icon-calendar5"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput2">Guardian Phone Number</label>
                                                            <input type="text" id="projectinput2" class="form-control"
                                                                placeholder="Phone" name="mobile">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="timesheetinput3">Admission Date</label>
                                                            <div class="position-relative has-icon-left">
                                                                <input type="date" id="timesheetinput3"
                                                                    class="form-control" name="admission_date">
                                                                <div class="form-control-position">
                                                                    <i class="icon-calendar5"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Passport photo</label>
                                                            <label id="projectinput7" class="file center-block">
                                                                <input type="file" name="student_photo"
                                                                    id="file">
                                                                <span class="file-custom"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1">Admission Number</label>
                                                            <input type="text" id="projectinput1" class="form-control"
                                                                placeholder="Admission Number" name="admission_no">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput8">Previous School info</label>
                                                            <textarea id="projectinput8" rows="5" class="form-control" name="previous_school_details"
                                                                placeholder="School info"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput8">additional
                                                                information</label>
                                                            <textarea id="projectinput8" rows="5" class="form-control" name="aditional_notes"
                                                                placeholder="Additional info"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput8">Medical Condition</label>
                                                            <textarea id="projectinput8" rows="5" class="form-control" name="medical_condition"
                                                                placeholder="Medical condition"></textarea>
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
                                                        Add student
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
    <script type="text/javascript">
        $(document).ready(function() {
            $('#year').on('change', function() {
                var yearId = this.value;
                $('#cohort').html('');
                $.ajax({
                    url: '{{ route('getCohorts') }}?academic_id=' + yearId,
                    type: 'get',
                    success: function(res) {
                        $('#cohort').html('<option value="">Select class</option>');
                        $.each(res, function(key, value) {
                            $('#cohort').append('<option value="' + value
                                .id + '">' + value.cohort_name + '</option>');
                        });
                        $('#session').html('<option value="">Select session</option>');
                    }
                });
            });
            $('#cohort').on('change', function() {
                var cohortId = this.value;
                $('#session').html('');
                $.ajax({
                    url: '{{ route('getSessions') }}?cohort_id=' + cohortId,
                    type: 'get',
                    success: function(res) {
                        $('#session').html('<option value="">Select session</option>');
                        $.each(res, function(key, value) {
                            $('#session').append('<option value="' + value
                                .id + '">' + value.session_name + '</option>');
                        });
                    }
                });
            });
        });
    </script>
@endsection
