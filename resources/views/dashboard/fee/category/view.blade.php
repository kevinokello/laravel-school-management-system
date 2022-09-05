@extends('layouts.dash')
@section('content')
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-body">
                <div class="col-xl-13 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="box-title">Student Fee Category List</h3>
                            <a href="{{ url('academic/fee/category/add') }}" style="float: right;"
                                class="btn btn-rounded btn-success mb-5"> Add Fee Category</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Academic year</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allData as $key => $fee)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td> {{ $fee->name }}</td>
                                                <td>
                                                    <a href="{{ url('academic/fee/category/edit', $fee->id) }}"
                                                        class="btn btn-info">Edit</a>
                                                    <a href="{{ url('academic/fee/category/delete', $fee->id) }}"
                                                        class="btn btn-danger" id="delete">Delete</a>
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
