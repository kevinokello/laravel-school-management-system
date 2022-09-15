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
                                <h3 class="box-title">Sub Categories </h3>
                                <a href="{{ url('resource/sub-category/add') }}" style="float: right;"
                                    class="btn btn-rounded btn-success mb-5"> Add Sub Category</a>
                            </div>

                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
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
