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
                                    <h4 class="card-title" id="basic-layout-form">Edit student{{ $student->id }}</h4>
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
                                        <form action="{{ url('student/update-student-details/' . $student->id) }}"
                                            class="form" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="icon-head"></i>
                                                    Personal info</h4>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Academic year</label>
                                                            <select required name="academic_id" class="form-control">
                                                                <option value="">-- Select Academic year --</option>
                                                                @foreach ($academic as $acaitem)
                                                                    <option value="{{ $acaitem->id }}"
                                                                        {{ $student->academic_id == $acaitem->id ? 'selected' : '' }}>
                                                                        {{ $acaitem->academic_year }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput5">Cohort</label>
                                                            <select required name="cohort_id" class="form-control">
                                                                <option value="">-- Select Class --</option>
                                                                @foreach ($cohort as $cohortitem)
                                                                    <option value="{{ $cohortitem->id }}"
                                                                        {{ $student->cohort_id == $cohortitem->id ? 'selected' : '' }}>
                                                                        {{ $acaitem->cohort_name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput6">Session</label>
                                                            <select required name="session_id" class="form-control">
                                                                <option value="">-- Select Session--</option>
                                                                @foreach ($session as $sessionitem)
                                                                    <option value="{{ $sessionitem->id }}"
                                                                        {{ $student->session_id == $sessionitem->id ? 'selected' : '' }}>
                                                                        {{ $acaitem->session_name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1">First Name</label>
                                                            <input type="text" id="projectinput1"
                                                                value="{{ $student->first_name }}" class="form-control"
                                                                placeholder="First Name" name="first_name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1">Middle Name</label>
                                                            <input type="text" id="projectinput1" class="form-control"
                                                                placeholder="MIddle Name"
                                                                value="{{ $student->middle_name }}" name="middle_name">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput2">Last Name</label>
                                                            <input type="text" id="projectinput2" class="form-control"
                                                                placeholder="Last Name" value="{{ $student->last_name }}"
                                                                name="last_name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Religion</label>

                                                            <select id="religion_id" name="religion_id"
                                                                class="form-control">
                                                                <option value="none" disabled="">
                                                                    Select religion</option>
                                                                <option
                                                                    value="{{ $student->religion_id ? 'selected' : '' }}">
                                                                    {{ $student->religion_id }}</option>
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
                                                                <option value="none" disabled="">
                                                                    Select gender</option>
                                                                <option
                                                                    value="{{ $student->gender_id ? 'selected' : '' }}">
                                                                    {{ $student->gender_id }}</option>
                                                                <option value="male">Male</option>
                                                                <option value="female">FEmale</option>

                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1">Residential Details/location</label>
                                                            <input type="text" id="projectinput1"
                                                                value="{{ $student->location_id }}" class="form-control"
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
                                                                placeholder="Email" value="{{ $student->email }}"
                                                                name="email">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="timesheetinput3">Date of birth</label>
                                                            <div class="position-relative has-icon-left">
                                                                <input type="date" id="timesheetinput3"
                                                                    class="form-control"
                                                                    value="{{ $student->date_of_birth }}"
                                                                    name="date_of_birth">
                                                                <div class="form-control-position">
                                                                    <i class="icon-calendar5"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput2">Phone Number</label>
                                                            <input type="text" id="projectinput2" class="form-control"
                                                                placeholder="Phone" value="{{ $student->mobile }}"
                                                                name="mobile">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="timesheetinput3">Admission Date</label>
                                                            <div class="position-relative has-icon-left">
                                                                <input type="date" id="timesheetinput3"
                                                                    class="form-control"
                                                                    value="{{ $student->admission_date }}"
                                                                    name="admission_date">
                                                                <div class="form-control-position">
                                                                    <i class="icon-calendar5"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Passport photo</label>
                                                            <img src="{{ asset('uploads/students/' . $student->student_photo) }}"
                                                                width="50px" height="40px" alt="Img">
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
                                                                placeholder="Admission Number"
                                                                value="{{ $student->admission_no }}" name="admission_no"
                                                                readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- <h4 class="form-section"><i class="icon-head"></i> Parents & guardian
                                                    info
                                                </h4>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1">1.Name</label>
                                                            <input type="text" id="projectinput1" class="form-control"
                                                                placeholder="Name" name="parent_info1">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1">Relationship</label>
                                                            <input type="text" id="projectinput1" class="form-control"
                                                                placeholder="Occupation" name="parent_info1">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput2">Phone Number</label>
                                                            <input type="text" id="projectinput2" class="form-control"
                                                                placeholder="Phone Number" name="parent_info1">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1">2.Name</label>
                                                            <input type="text" id="projectinput1" class="form-control"
                                                                placeholder="Name" name="parent_info2">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1">Relationship</label>
                                                            <input type="text" id="projectinput1" class="form-control"
                                                                placeholder="Occupation" name="parent_info2">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput2">Phone Number</label>
                                                            <input type="text" id="projectinput2" class="form-control"
                                                                placeholder="Phone" name="parent_info2">
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4 class="form-section"><i class="icon-clipboard4"></i> Requirements and
                                                    documentation
                                                </h4> --}}

                                                {{-- <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Document1</label>
                                                            <label id="projectinput7" class="file center-block">
                                                                <input name="document_file_1" type="file" id="file">
                                                                <span class="file-custom"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Document2</label>
                                                            <label id="projectinput7" class="file center-block">
                                                                <input name="document_file_2" type="file" id="file">
                                                                <span class="file-custom"></span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Document3</label>
                                                            <label id="projectinput7" class="file center-block">
                                                                <input name="document_file_3" type="file" id="file">
                                                                <span class="file-custom"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput8">Previous School info</label>
                                                            <textarea id="projectinput8" rows="5" class="form-control" name="previous_school_details"
                                                                placeholder="School info">{{ $student->previous_school_details }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput8">additional
                                                                information</label>
                                                            <textarea id="projectinput8" rows="5" class="form-control" name="aditional_notes"
                                                                placeholder="Additional info">{{ $student->aditional_notes }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput8">Medical Condition</label>
                                                            <textarea id="projectinput8" rows="5" class="form-control" name="medical_condition"
                                                                placeholder="Medical condition">{{ $student->medical_condition }}</textarea>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div style="text-align: center;" class="wrapper">
                                                    <button
                                                        style="  border-color: #448aff;
            background-color: #448aff;
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
