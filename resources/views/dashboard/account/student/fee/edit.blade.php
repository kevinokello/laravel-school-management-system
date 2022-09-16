@extends('layouts.dash')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">


                                <!--  ---------------------------------- -->
                                <div class="card-body collapse in">
                                    <div class="card-block">
                                        <form method="post" action="{{ url('accounts/student/fee/update', $student->id) }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput1"><b>Admission Number</b></label>
                                                        <input type="text" id="projectinput1" class="form-control"
                                                            placeholder="Admission Number"
                                                            value="{{ $student->admission_no }}" name="admission_no"
                                                            readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput1"><b>Fee Balance</b></label>
                                                        <input type="text" id="projectinput1" class="form-control"
                                                            placeholder="Admission Number" value="{{ $student->updated_fee }}"
                                                            name="fee_id" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="example-text-input" class="form-label"><b>Keyin
                                                                Date</b></label>
                                                        <input class="form-control example-date-input" name="date"
                                                            type="date" id="date">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="example-text-input" class="form-label"
                                                            style="margin-top:43px;">
                                                        </label>
                                                        <i style="height:40px; width:170px;"
                                                            class="btn btn-success btn-rounded waves-effect waves-light fas fa-plus-circle addeventmore">
                                                            <b>Add Payment</b></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <table class="table-sm table-bordered" width="100%"
                                                style="border-color: #ddd;">
                                                <thead>
                                                    <tr>
                                                        <th>Payment Method</th>
                                                        <th></th>
                                                        <th>Amount Paid</th>
                                                        <th></th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="addRow" class="addRow">

                                                </tbody>

                                                <tbody>
                                                    <tr>
                                                        <td colspan="5"></td>
                                                        <td>
                                                            <b>Total</b><input type="text" name="paid_amount"
                                                                id="paid_amount" class="form-control paid_amount" readonly
                                                                style="background-color: #ddd;">
                                                        </td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table><br>
                                            <div class="form-actions">
                                                <div style="text-align: center;" class="wrapper">
                                                    <button
                                                        style="  border-color: #0073aa; background-color: #0073aa; color: #fff; height:50px; width:170px; "
                                                        type="submit" class="btn btn-primary">
                                                        Update student details
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div></div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>



    <script id="document-template" type="text/x-handlebars-template">
<tr class="delete_add_more_item" id="delete_add_more_item">
        <input type="hidden" name="date[]" value="@{{ date }}">
 <td>
     <select required name="description[]" id="academic" class="form-control">
                                                <option value="">-- Select payment method --</option>
                                                    <option>Bank</option>
                                                      <option>Mpesa</option>
                                            </select>
    </td>
     <td>
        <input type="hidden" min="1" class="form-control buying_qty text-right" name="buying_qty[]" value="1" >
    </td>
    <td>
        <input type="number" class="form-control unit_price text-right" name="unit_price[]" value="">
    </td>
     <td>
        <input type="hidden" class="form-control buying_price text-right" name="buying_price[]" value="0" readonly>
    </td>
     <td>
        <i class="btn btn-danger btn-sm fas fa-window-close removeeventmore"></i>
    </td>
    </tr>
</script>


    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on("click", ".addeventmore", function() {
                var date = $('#date').val();
                var category_name = $('#category_id').find('option:selected').text();
                var product_id = $('#product_id').val();
                var product_name = $('#product_id').find('option:selected').text();
                if (date == '') {
                    $.notify("Date is Required", {
                        globalPosition: 'top right',
                        className: 'error'
                    });
                    return false;
                }

                var source = $("#document-template").html();
                var tamplate = Handlebars.compile(source);
                var data = {
                    date: date
                };
                var html = tamplate(data);
                $("#addRow").append(html);
            });

            $(document).on("click", ".removeeventmore", function(event) {
                $(this).closest(".delete_add_more_item").remove();
                totalAmountPrice();
            });

            $(document).on('keyup click', '.unit_price,.buying_qty', function() {
                var unit_price = $(this).closest("tr").find("input.unit_price").val();
                var qty = $(this).closest("tr").find("input.buying_qty").val();
                var total = unit_price * qty;
                $(this).closest("tr").find("input.buying_price").val(total);
                totalAmountPrice();
            });

            // Calculate sum of amout in invoice
            function totalAmountPrice() {
                var sum = 0;
                $(".buying_price").each(function() {
                    var value = $(this).val();
                    if (!isNaN(value) && value.length != 0) {
                        sum += parseFloat(value);
                    }
                });
                $('#paid_amount').val(sum);
            }

        });
    </script>

    <script type="text/javascript">
        $(function() {
            $(document).on('change', '#supplier_id', function() {
                var supplier_id = $(this).val();
                $.ajax({
                    url: "{{ url('get-category') }}",
                    type: "GET",
                    data: {
                        supplier_id: supplier_id
                    },
                    success: function(data) {
                        var html = '<option value="">Select Category</option>';
                        $.each(data, function(key, v) {
                            html += '<option value=" ' + v.category_id + ' "> ' + v
                                .category.name + '</option>';
                        });
                        $('#category_id').html(html);
                    }
                })
            });
        });
    </script>


    <script type="text/javascript">
        $(function() {
            $(document).on('change', '#category_id', function() {
                var category_id = $(this).val();
                $.ajax({
                    url: "{{ url('get-product') }}",
                    type: "GET",
                    data: {
                        category_id: category_id
                    },
                    success: function(data) {
                        var html = '<option value="">Select Category</option>';
                        $.each(data, function(key, v) {
                            html += '<option value=" ' + v.id + ' "> ' + v.name +
                                '</option>';
                        });
                        $('#product_id').html(html);
                    }
                })
            });
        });
    </script>
@endsection
