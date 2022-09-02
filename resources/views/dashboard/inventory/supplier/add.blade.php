@extends('layouts.dash')
@section('content')
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-body">
                <div class="col-xl-13 col-lg-12">
                    <form method="post" action="{{ url('inventory/stock/store') }}" id="myForm" class="form">
                        @csrf
                        <div class="form-body">
                            <div class="form-group">
                                <label for="companyName">Product Name</label>
                                <input type="text" id="companyName" class="form-control" placeholder="Product Name"
                                    name="company">
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Supplier Name
                                        </label>
                                        <div class="form-group col-sm-10">
                                            <input name="name" class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Supplier Mobile
                                        </label>
                                        <div class="form-group col-sm-10">
                                            <input name="mobile_no" class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Supplier Address
                                        </label>
                                        <div class="form-group col-sm-10">
                                            <input name="address" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Supplier Email
                                            </label>
                                            <div class="form-group col-sm-10">
                                                <input name="email" class="form-control" type="email">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div style="text-align: center;" class="wrapper">
                                    <button
                                        style="  border-color: #448aff;
            background-color: #448aff;
            color: #fff; height:50px; width:170px; "
                                        type="submit" class="btn btn-primary">
                                        Add stock
                                    </button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#myForm').validate({
                rules: {
                    name: {
                        required: true,
                    },
                    supplier_id: {
                        required: true,
                    },
                    unit_id: {
                        required: true,
                    },
                    category_id: {
                        required: true,
                    },
                },
                messages: {
                    name: {
                        required: 'Please Enter Your Product Name',
                    },
                    supplier_id: {
                        required: 'Please Select One Supplier',
                    },
                    unit_id: {
                        required: 'Please Select One Unit',
                    },
                    category_id: {
                        required: 'Please Select One Category',
                    },
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
            });
        });
    </script>
@endsection
