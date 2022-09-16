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
                                            <!-- Modal -->
                                            <div class="modal fade text-xs-left" id="small" tabindex="-1"
                                                role="dialog" aria-labelledby="myModalLabel19" aria-hidden="true">
                                                <div class="modal-dialog modal-sm" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                            <h4 class="modal-title" id="myModalLabel19"><b>Fee Balance</b></h4>
                                                        </div>
                                                        <div class="modal-body">

                                                            <form class="form" action="{{ url('academic/classes') }}"
                                                                method="POST">
                                                                @csrf

                                                                <div class="form-body">
                                                                    <div class="form-group">
                                                                        <input type="text" id="cohort_name"
                                                                            class="form-control"
                                                                            name="cohort_name" readonly>
                                                                    </div>
                                                                </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn grey btn-outline-secondary"
                                                                data-dismiss="modal">Close</button>

                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
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
                                                                    <a class="btn btn-info" data-toggle="modal" data-target="#small">Quick View</a>
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
