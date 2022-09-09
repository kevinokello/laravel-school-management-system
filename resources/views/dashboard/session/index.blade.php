@extends('layouts.dash')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
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
                                            <label for="projectinput5">Academic year</label>
                                            <select required name="academic_id" id="academic" class="form-control">
                                                <option value="">-- Select year --</option>
                                                @foreach ($academic as $academicitem)
                                                    <option value="{{ $academicitem->id }} ">
                                                        {{ $academicitem->academic_year }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="projectinput5">Class Name</label>
                                            <select required name="cohort_id" id="cohort" class="form-control">
                                                <option value="">-- Select Class --</option>

                                            </select>
                                        </div>

                                        <div class="form-body">
                                            <div class="form-group">
                                                <label for="projectinput5">Session Name</label>
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
                                            {{-- <th>Class Id</th> --}}
                                            <th>Session Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($session as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                {{-- <td>{{ $item->cohort->id }}</td> --}}
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
    <script type="text/javascript">
        $(document).ready(function() {
            $('#academic').on('change', function() {
                var academicId = this.value;
                $('#cohort').html('');
                $.ajax({
                    url: '{{ route('getCohorts') }}?academic_id=' + academicId,
                    type: 'get',
                    success: function(res) {
                        $('#cohort').html('<option value="">Select class</option>');
                        $.each(res, function(key, value) {
                            $('#cohort').append('<option value="' + value
                                .id + '">' + value.cohort_name + '</option>');
                        });
                    }
                });
            });
        });
    </script>
@endsection
