@extends('layouts.dash')
@section('content')
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-body">
                <div class="col-xl-13 col-lg-12">
                    <div class="text-center">
                        <button type="button" style="background-color: #054473;color: #fff; height:50px; width:190px; "
                            class="btn btn-outline-success block btn-lg" data-toggle="modal" data-target="#small">
                            New stock categorry
                        </button>
                    </div>
                    <br>
                    <!-- Modal -->
                    <div class="modal fade text-xs-left" id="small" tabindex="-1" role="dialog"
                        aria-labelledby="myModalLabel19" aria-hidden="true">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel19">Stock category</h4>
                                </div>
                                <div class="modal-body">

                                    <form class="form" action="{{ url('academic/academic-years') }}" method="POST">
                                        @csrf
                                        <div class="form-body">
                                            <div class="form-group">
                                                <input type="text" id="academic_year" class="form-control"
                                                    placeholder="Academic year" name="academic_year" required>
                                            </div>
                                        </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn grey btn-outline-secondary"
                                        data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">
                                        Add</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">Academic years</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Academic year</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($academic as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->academic_year }}</td>
                                                <td>{{ $item->status == '1' ? 'Hidden' : 'Active' }}</td>
                                                <td>
                                                    {{-- <a
                                                        class="btn btn-info btn-sm" data-toggle="modal" data-target="#small2">Edit</a> --}}
                                                    <a href="{{ url('academic/academic-years/' . $item->id) }}"
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
