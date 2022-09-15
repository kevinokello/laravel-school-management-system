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
                                            <h3 class="box-title">Categories </h3>
                                            <a href="{{ url('resource/category/add') }}" style="float: right;"
                                                class="btn btn-rounded btn-success mb-5"> Add Category</a>
                                        </div>

                                        <!-- /.box-header -->
                                        <div class="box-body">
                                            <div class="table-responsive">
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th width="5%">SL</th>
                                                            <th>Name</th>
                                                            <th>Slug </th>
                                                            <th>Status </th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($categories as $cateitem)
                                                            <tr>
                                                                      <td>{{ $cateitem->id }}</td>
                                                                <td>{{ $cateitem->name }}</td>
                                                                <td>{{ $cateitem->slug }}</td>
                                                                <td>{{ $cateitem->status }}</td>
                                                                <td>
                                                                    <a href="{{ url('resource/category/edit/' . $cateitem->id) }}"><i
                                                                            class="fa-solid fa-pen-to-square"></i></a>
                                                                    <a href="{{ url('resource/category/delete/' . $cateitem->id) }}"
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
