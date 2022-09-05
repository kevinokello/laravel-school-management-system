@extends('layouts.dash')
@section('content')
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-body">
                <div class="col-xl-13 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="box-title">Student Fee Amount List</h3>
                            <a href="{{ url('academic/fee/amount/add') }}" style="float: right;"
                                class="btn btn-rounded btn-success mb-5"> Add Fee Amount</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th width="5%">SL</th>
                                            <th>Fee Category</th>
                                            <th width="25%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allData as $key => $amount)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                {{-- <td> {{ $amount['fee_cateogry']['name'] }}</td> --}}
                                                  <td> {{ $amount->fee_category_id }}</td>
                                                <td>
                                                    <a href="{{ url('academic/fee/amount/edit', $amount->fee_category_id) }}"
                                                        class="btn btn-info">Edit</a>
                                                    <a href="{{ url('academic/fee/amount/details', $amount->fee_category_id) }}"
                                                        class="btn btn-primary">Details</a>
                                                    <a href="{{ url('academic/fee/amount/details', $amount->id) }}"
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
