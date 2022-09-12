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
                                        <!-- /.box-header -->
                                        <div class="box-body">
                                            <div class="table-responsive">
                                                <table id="myTable" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th width="5%">SL</th>
                                                            <th>ID No</th>
                                                            <th>Name </th>
                                                            <th>Year</th>
                                                            <th>Class </th>
                                                            <th>Fee Type</th>
                                                            <th>Amount</th>
                                                            <th>Date</th>
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
                                                                    <a
                                                                        href="{{ url('student/edit-student-details/' . $sitem->id) }}"><i
                                                                            class="fa-solid fa-pen-to-square"></i></a>
                                                                    <a href="{{ url('student/delete-student/' . $sitem->id) }}"
                                                                        class="btn btn-danger btn-sm">Delete</a>
                                                                </td>
                                                            </tr>
                                                        @endforeach

                                                    </tbody>
                                                    <tfoot>

                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->


                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content -->

        </div>
    </div>
@endsection
