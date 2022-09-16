@extends('layouts.dash')
@section('content')
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-body">
                <div class="col-xl-13 col-lg-12">
                    <div class="text-center">
                        <button type="button" style="background-color: #0073aa;color: #fff; height:50px; width:190px; "
                            class="btn btn-outline-success block btn-lg" data-toggle="modal" data-target="#small">
                            New Cohort/class
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
                                    <h4 class="modal-title" id="myModalLabel19">Class</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form" action="{{ url('academic/classes') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="projectinput5">Academic year</label>
                                            <select required name="academic_id" class="form-control">
                                                <option value="">-- Select year --</option>
                                                @foreach ($academic as $acaitem)
                                                    <option value="{{ $acaitem->academic_year }} ">
                                                        {{ $acaitem->academic_year }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="projectinput5">Fee Amount</label>
                                            <select required name="fee_id" class="form-control">
                                                <option value="">-- Select fee --</option>
                                                @foreach ($feecategory as $feeitem)
                                                    <option value="{{ $feeitem->amount }} ">
                                                        {{ $feeitem->amount }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-body">
                                            <div class="form-group">
                                                <input type="text" id="cohort_name" class="form-control"
                                                    placeholder="Cohort Name" name="cohort_name" required>
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

                            <h4 class="card-title">Academic Classes</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Class Name</th>
                                                      <th>Fee Amt</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cohort as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->cohort_name }}</td>
                                                  <td>{{ $item->fee_id }}</td>
                                                <td>
                                                    {{-- <a
                                                        class="btn btn-info btn-sm" data-toggle="modal" data-target="#small2">Edit</a> --}}
                                                    <a href="{{ url('academic/classes/' . $item->id) }}"
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
