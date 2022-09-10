@extends('layouts.dash')
@section('content')
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-body">
                <div class="col-xl-13 col-lg-12">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">Products</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>name</th>
                                            <th>Supplier id</th>
                                            <th>Unit id</th>
                                            <th>Category id</th>
                                            <th>Quantity</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($stock as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->supplier_id }}</td>
                                                <td>{{ $item->unit_id }}</td>
                                                <td>{{ $item->category_id }}</td>
                                                <td>{{ $item->quantity }}</td>
                                                <td>
                                                    {{-- <a href="{{ url('inventory/stock/edit/' . $item->id) }}"
                                                        class="btn btn-info btn-sm" data-toggle="modal" data-target="#small2">Edit</a> --}}
                                                    <a href="{{ url('inventory/stock/delete/' . $item->id) }}"
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
