@extends('layouts.dash')
@section('content')
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-body">
                <div class="col-xl-13 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All users</h4>
                            <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li>
                                        <a data-action="reload"><i class="icon-reload"></i></a>
                                    </li>
                                    <li>
                                        <a data-action="expand"><i class="icon-expand2"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                    </thead>


                                    <tbody>

                                        @foreach ($users as $item)
                                            <tr>
                                                <td> {{ $item->id }} </td>
                                                <td> {{ $item->name }} </td>
                                                <td> {{ $item->email }} </td>
                                                <td>
                                                    @if ($item->status == '0')
                                                        <span class="btn btn-warning">Inactive</span>
                                                    @elseif($item->status == '1')
                                                        <span class="btn btn-success">Active</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ url('users/edit/' . $item->id) }}"><i
                                                            class="fa-solid fa-pen-to-square"></i></a>
                                                    <a href="{{ url('users/delete', $item->id) }}" class="btn btn-danger sm"
                                                        title="Delete Data" id="delete"> <i class="fas fa-trash-alt"></i>
                                                    </a>
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
