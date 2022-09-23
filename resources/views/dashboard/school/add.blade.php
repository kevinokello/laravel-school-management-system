@extends('layouts.dash')
@section('content')
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-body">
                <section id="basic-form-layouts">

                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form-center">Register New School</h4>
                                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body collapse in">
                                    <div class="card-block">
                                        <form class="form" action="{{ url('school/store') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6 offset-md-3">
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label for="eventInput1">School Name</label>
                                                            <input type="text" id="eventInput1" class="form-control"
                                                                placeholder="name" name="name">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="eventInput2">Location</label>
                                                            <input type="text" id="eventInput2" class="form-control"
                                                                placeholder="Location" name="location">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="eventInput4">Email</label>
                                                            <input type="email" id="eventInput4" class="form-control"
                                                                placeholder="Email" name="email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="eventInput5">Contact Number</label>
                                                            <input type="tel" id="eventInput5" class="form-control"
                                                                name="contact" placeholder="contact">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="projectinput4">Status</label>
                                                                <input type="checkbox" class="form-control" name="status">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-actions center">

                                                <button
                                                    style="  border-color: #054473;
            background-color: #054473;
            color: #fff; height:50px; width:170px; "
                                                    type="submit" class="btn btn-primary">
                                                    Register School
                                                </button>

                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
