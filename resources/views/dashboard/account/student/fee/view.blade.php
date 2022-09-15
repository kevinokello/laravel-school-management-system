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
                            <div class="box-header with-border">
                                <h3 class="box-title">Student Fee List </h3>
                                <a href="{{ url('accounts/student/fee/add') }}" style="float: right;"
                                    class="btn btn-rounded btn-success mb-5"> Add / Edit Student Fee</a>

                            </div>

                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th width="5%">SL</th>
                                                <th>Academic Id</th>
                                                <th>Cohort </th>
                                                <th>Amount</th>
                                                <th>Date</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($allData as $key => $value)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td> {{ $value->academic_id }}</td>
            <td> {{ $value->cohort_id }}</td>
                                                    <td> {{ $value->amount }}</td>
                                                    <td> {{ date('M Y', strtotime($value->date)) }}</td>

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
                        </div></div></div></div>
            <!-- /.content -->

        </div>
    </div>
@endsection
