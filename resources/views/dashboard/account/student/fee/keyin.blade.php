
@extends('layouts.dash')
@section('content')
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-body">
                <div class="col-xl-13 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="table-responsive">
                                                <table id="myTable" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th width="5%">SL</th>
                                                            <th>Admission number </th>
                                                            <th>Name </th>
                                                            <th>Class</th>
                                                            <th>Session</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($students as $sitem)
                                                            <tr>
                                                                <td>{{ $sitem->academic_id }}</td>
                                                                <td>{{ $sitem->admission_no }}</td>
                                                                <td>{{ $sitem->last_name }}</td>
                                                                <td>{{ $sitem->cohort_id }}</td>
                                                                <td>{{ $sitem->session_id }}</td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="btn btn-info">Quick View</a>
                                                                    <a href="{{ url('accounts/student/fee/edit/' . $sitem->id) }}"
                                                                        class="btn btn-success">Debit</a>
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
                </div>
            </div>
        </div>
    </div>
@endsection
