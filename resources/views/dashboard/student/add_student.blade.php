@extends('layouts.dash')
@section('content')
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

                                        <form class="form">
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="icon-head"></i> Personal info</h4>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput5">Academic year</label>
                                                            <select id="projectinput5" name="interested"
                                                                class="form-control">
                                                                <option value="none" selected="" disabled="">
                                                                Select Academic year</option>
                                                                <option value="design">2022</option>
                                                                <option value="development">2021</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput5">Class/Course</label>
                                                            <select id="projectinput5" name="interested"
                                                                class="form-control">
                                                                <option value="none" selected="" disabled="">
                                                                   Select Class/Course</option>
                                                                <option value="design">class 1</option>
                                                                <option value="development">class2</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput6">Section</label>
                                                            <select id="projectinput6" name="budget" class="form-control">
                                                                <option value="0" selected="" disabled="">Select Section
                                                                </option>
                                                                <option value="less than 5000$">1</option>
                                                                <option value="5000$ - 10000$">2</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1">First Name</label>
                                                            <input type="text" id="projectinput1" class="form-control"
                                                                placeholder="First Name" name="fname">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1">Middle Name</label>
                                                            <input type="text" id="projectinput1" class="form-control"
                                                                placeholder="MIddle Name" name="fname">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput2">Last Name</label>
                                                            <input type="text" id="projectinput2" class="form-control"
                                                                placeholder="Last Name" name="lname">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput5">Religion</label>
                                                            <select id="projectinput5" name="interested"
                                                                class="form-control">
                                                                <option value="none" selected="" disabled="">
                                                                    Select religion</option>
                                                                <option value="design">Christian</option>
                                                                <option value="development">Muslim</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput5">Gender</label>
                                                            <select id="projectinput5" name="interested"
                                                                class="form-control">
                                                                <option value="none" selected="" disabled="">
                                                                    Select gender</option>
                                                                <option value="design">Male</option>
                                                                <option value="development">FEmale</option>

                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1">Residential Details/location</label>
                                                            <input type="text" id="projectinput1" class="form-control"
                                                                placeholder="First Name" name="fname">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1">Email Address</label>
                                                            <input type="text" id="projectinput1" class="form-control"
                                                                placeholder="First Name" name="fname">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="timesheetinput3">Date of birth</label>
                                                            <div class="position-relative has-icon-left">
                                                                <input type="date" id="timesheetinput3"
                                                                    class="form-control" name="date">
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
                                                                placeholder="Last Name" name="lname">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="timesheetinput3">Admission Date</label>
                                                            <div class="position-relative has-icon-left">
                                                                <input type="date" id="timesheetinput3"
                                                                    class="form-control" name="date">
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
                                                                <input type="file" id="file">
                                                                <span class="file-custom"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1">Admission Number</label>
                                                            <input type="text" id="projectinput1" class="form-control"
                                                                placeholder="First Name" name="fname">
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4 class="form-section"><i class="icon-head"></i> Parents & guardian
                                                    info
                                                </h4>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1">1.Name</label>
                                                            <input type="text" id="projectinput1" class="form-control"
                                                                placeholder="First Name" name="fname">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1">Occupation</label>
                                                            <input type="text" id="projectinput1" class="form-control"
                                                                placeholder="First Name" name="fname">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput2">Phone Number</label>
                                                            <input type="text" id="projectinput2" class="form-control"
                                                                placeholder="Last Name" name="lname">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1">2.Name</label>
                                                            <input type="text" id="projectinput1" class="form-control"
                                                                placeholder="First Name" name="fname">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1">Occupation</label>
                                                            <input type="text" id="projectinput1" class="form-control"
                                                                placeholder="First Name" name="fname">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput2">Phone Number</label>
                                                            <input type="text" id="projectinput2" class="form-control"
                                                                placeholder="Last Name" name="lname">
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4 class="form-section"><i class="icon-clipboard4"></i> Requirements and
                                                    documentation
                                                </h4>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Select File</label>
                                                            <label id="projectinput7" class="file center-block">
                                                                <input type="file" id="file">
                                                                <span class="file-custom"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Select File</label>
                                                            <label id="projectinput7" class="file center-block">
                                                                <input type="file" id="file">
                                                                <span class="file-custom"></span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Select File</label>
                                                            <label id="projectinput7" class="file center-block">
                                                                <input type="file" id="file">
                                                                <span class="file-custom"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput8">Previous School info</label>
                                                            <textarea id="projectinput8" rows="5" class="form-control" name="comment" placeholder="About Project"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput8">additional
                                                                information</label>
                                                            <textarea id="projectinput8" rows="5" class="form-control" name="comment" placeholder="About Project"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput8">Medical Condition</label>
                                                            <textarea id="projectinput8" rows="5" class="form-control" name="comment" placeholder="About Project"></textarea>
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
@endsection
