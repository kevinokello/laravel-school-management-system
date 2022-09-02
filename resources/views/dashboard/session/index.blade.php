@extends('layouts.dash')
@section('content')
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-body">
                <div class="col-xl-13 col-lg-12">
                    <div class="text-center">
                        <button type="button" style="background-color: #448aff;color: #fff; height:50px; width:220px; "
                            class="btn btn-outline-success block btn-lg" data-toggle="modal" data-target="#small">
                            New Academic session
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
                                    <h4 class="modal-title" id="myModalLabel19">Academic session</h4>
                                </div>
                                <div class="modal-body">

                                    <form class="form" action="{{ url('academic/sessions') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="projectinput5">Cohort</label>
                                            <select required name="cohort_id" class="form-control">
                                                <option value="">-- Select Class --</option>
                                                @foreach ($cohort as $cohortitem)
                                                    <option value="{{ $cohortitem->id }} ">
                                                        {{ $cohortitem->cohort_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-body">
                                            <div class="form-group">
                                                <input type="text" id="session_name" class="form-control"
                                                    placeholder="Session Name" name="session_name" required>
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

                            <h4 class="card-title">Academic sessions</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                                      <th>Class Id</th>
                                            <th>Session Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($session as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                    <td>{{ $item->cohort->id }}</td>
                                                <td>{{ $item->session_name }}</td>
                                                <td>
                                                    {{-- <a
                                                        class="btn btn-info btn-sm" data-toggle="modal" data-target="#small2">Edit</a> --}}
                                                    <a href="{{ url('academic/sessions/' . $item->id) }}"
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
