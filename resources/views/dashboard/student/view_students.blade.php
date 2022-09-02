@extends('layouts.dash')
@section('content')
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-body">
                <div class="col-xl-13 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Students list</h4>
                            <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li>
                                        <a data-action="reload"><i class="icon-reload"></i></a>
                                    </li>
                                    <li>
                                        <a data-action="expand"><i class="icon-expand2"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Academic Id</th>
                                            <th>Class</th>
                                            <th>Session</th>
                                            <th>Admission Number</th>
                                            <th>Phone</th>
                                            <th>Email Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($students as $sitem)
                                            <tr>
                                                <td>{{ $sitem->id }}</td>
                                                <td>{{ $sitem->academic_id }}</td>
                                                <td>{{ $sitem->cohort_id }}</td>
                                                <td>{{ $sitem->session_id }}</td>
                                                <td>{{ $sitem->admission_no }}</td>
                                                <td>{{ $sitem->mobile }}</td>
                                                <td>{{ $sitem->email }}</td>
                                                <td>
                                                    <a href="{{ url('student/edit-student-details/' . $sitem->id) }}"><i
                                                            class="fa-solid fa-pen-to-square"></i></a>
                                                    <a href="{{ url('student/delete-student/' . $sitem->id) }}"
                                                        class="btn btn-danger btn-sm">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
