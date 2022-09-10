@extends('layouts.dash')
@section('content')
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-body">
                <div class="col-xl-13 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                          <h4 class="card-title">Suppliers</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>supplier name</th>
                                            <th>mobile</th>
                                            <th>email</th>
                                            <th>address</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($suppliers as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->mobile_no }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->address }}</td>
                                                <td>{{ $item->status == '1' ? 'Hidden' : 'Active' }}</td>
                                                <td>
                                                          <a href="{{ url('inventory/supplier/edit/' . $item->id) }}"><i
                                                            class="fa-solid fa-pen-to-square"></i></a>
                                                    <a href="{{ url('inventory/supplier/delete/' . $item->id) }}"
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
