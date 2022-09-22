@extends('layouts.dash')
@section('content')
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body collapse in">
                                    <div class="card-block">
                                        <form method="post" action="{{ url('inventory/supplier/update/' .$supplier->id) }}" id="myForm"
                                            class="form">
                                            @csrf
                                            <div class="form-body">

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">Supplier Name</label>
                                                            <input type="text" id="projectinput1" class="form-control"
                                                                placeholder="Name/Company" name="name"
                                                                value="{{ $supplier->name }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput2">Supplier Mobile</label>
                                                            <input type="text" id="projectinput2" class="form-control"
                                                                placeholder="Phone Number" name="mobile_no"
                                                                value="{{ $supplier->mobile_no }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput4">Supplier Email</label>
                                                            <input type="email" id="projectinput4" class="form-control"
                                                                placeholder="Email Address" name="email"
                                                                value="{{ $supplier->email }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput5">Stock Category</label>
                                                            <select required name="unit_id" class="form-control">
                                                                <option value="">-- Select category --</option>
                                                                @foreach ($stockcategory as $cateitem)
                                                                    <option value="{{ $cateitem->id }}"
                                                                        {{ $supplier->unit_id == $cateitem->id ? 'selected' : '' }}>
                                                                        {{ $cateitem->name }}</option>
                                                                @endforeach
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>




                                            </div>

                                            <button
                                                style="  border-color: #222845;
            background-color: #222845;
            color: #fff; height:50px; width:170px; "
                                                type="submit" class="btn btn-primary">
                                                Edit supplier
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </section>
                <!-- // Basic form layout section end -->
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
