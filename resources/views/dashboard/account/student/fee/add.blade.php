@extends('layouts.dash')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-body">
                <div class="col-xl-13 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-body collapse in">
                                <div class="card-block">
                                    <form action="{{ url('accounts/student/fee/store') }}" class="form" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>Select Year <span class="text-danger"> </span></h5>
                                                    <div class="controls">
                                                        <select name="academic_id" id="academic" required=""
                                                            class="form-control">
                                                            <option value="" selected="" disabled="">Select Year
                                                            </option>
                                                            @foreach ($years as $year)
                                                                <option value="{{ $year->id }}">
                                                                    {{ $year->academic_year }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                            </div> <!-- End Col md 3 -->
                                            <div class="col-md-3">

                                                <div class="form-group">
                                                    <h5>Select Class <span class="text-danger"> </span></h5>
                                                    <div class="controls">
                                                        <select name="cohort_id" id="cohort" required=""
                                                            class="form-control">
                                                            <option value="" selected="" disabled="">Select
                                                                Class
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> <!-- End Col md 3 -->

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h5>Fee Type <span class="text-danger"> </span></h5>
                                                    <div class="controls">
                                                        <select name="fee_category_id" id="fee_category_id" required=""
                                                            class="form-control">
                                                            <option value="" selected="" disabled="">Select Fee
                                                                Category
                                                            </option>
                                                            @foreach ($fee_categories as $fee)
                                                                <option value="{{ $fee->id }}">{{ $fee->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> <!-- End Col md 3 -->


                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h5>Due Date <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="date" name="date" id="date"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                            </div> <!-- End Col md 3 -->
                                            <div class="col-md-3">

                                                <div class="form-group">
                                                    <h5> Amount <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="amount" id="amount"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                            </div> <!-- End Col md 3 -->
                                            <div class="col-md-3">
                                                <button type="submit"
                                                    style="background-color: #054473;color: #fff; height:50px; width:190px; "
                                                    class="btn btn-outline-success block btn-lg" type="submit">
                                                    Add
                                                </button>
                                            </div> <!-- End Col md 3 -->
                                        </div><!--  end row -->
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                    </section>
                    <!-- /.content -->

                </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $('#academic').on('change', function() {
                        var academicId = this.value;
                        $('#cohort').html('');
                        $.ajax({
                            url: '{{ url('get-cohort') }}?academic_id=' + academicId,
                            type: 'get',
                            success: function(res) {
                                $('#cohort').html(
                                    '<option value="">-- Select cohort --</option>');
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
