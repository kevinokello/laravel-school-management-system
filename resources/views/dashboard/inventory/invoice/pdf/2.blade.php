@extends('layouts.dash')
@section('content')
 <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="invoice-title">
                                        <h4 class="float-end font-size-16"><strong>Invoice No #
                                                {{ $invoice->invoice_no }}</strong></h4>
                                        <h3>
                                            <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="logo"
                                                height="24" /> Easy Shopping Mall
                                        </h3>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-6 mt-4">
                                            <address>
                                                <strong>Easy Shopping Mall:</strong><br>
                                                Purana Palton Dhaka<br>
                                                support@easylearningbd.com
                                            </address>
                                        </div>
                                        <div class="col-6 mt-4 text-end">
                                            <address>
                                                <strong>Invoice Date:</strong><br>
                                                {{ date('d-m-Y', strtotime($invoice->date)) }} <br><br>
                                            </address>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @php
                                $payment = App\Models\Payment::where('invoice_id', $invoice->id)->first();
                            @endphp

                            <div class="row">
                                <div class="col-12">
                                    <div>
                                        <div class="p-2">
                                            <h3 class="font-size-16"><strong>Customer Invoice</strong></h3>
                                        </div>
                                        <div class="">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <td><strong>Customer Name </strong></td>
                                                            <td class="text-center"><strong>Customer Mobile</strong></td>
                                                            <td class="text-center"><strong>Address</strong>
                                                            </td>
                                                            <td class="text-center"><strong>Description</strong>
                                                            </td>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                                        <tr>
                                                            <td> </td>
                                                            <td class="text-center"></td>
                                                            <td class="text-center"></td>
                                                            <td class="text-center"></td>

                                                        </tr>


                                                    </tbody>
                                                </table>
                                            </div>


                                        </div>
                                    </div>

                                </div>
                            </div> <!-- end row -->





                            <div class="row">
                                <div class="col-12">
                                    <div>
                                        <div class="p-2">

                                        </div>
                                        <div class="">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <td><strong>Sl </strong></td>
                                                            <td class="text-center"><strong>Category</strong></td>
                                                            <td class="text-center"><strong>Product Name</strong>
                                                            </td>
                                                            <td class="text-center"><strong>Current Stock</strong>
                                                            </td>
                                                            <td class="text-center"><strong>Quantity</strong>
                                                            </td>
                                                            <td class="text-center"><strong>Unit Price </strong>
                                                            </td>
                                                            <td class="text-center"><strong>Total Price</strong>
                                                            </td>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- foreach ($order->lineItems as $line) or some such thing here -->

                                                        @php
                                                            $total_sum = '0';
                                                        @endphp
                                                        @foreach ($invoice['invoice_details'] as $key => $details)
                                                            <tr>
                                                                <td class="text-center">{{ $key + 1 }}</td>
                                                                <td class="text-center">{{ $details->category_id }}</td>
                                                                <td class="text-center">{{ $details->product_id }}</td>
                                                                {{-- <td class="text-center">{{ $details['category']['name'] }}</td>
            <td class="text-center">{{ $details['product']['name'] }}</td> --}}
                                                                <td class="text-center" style="background-color: #8B008B">
                                                                    {{-- {{ $details['product']['quantity'] }} --}}

                                                                    {{ $details->product_id }}</td>
                                                                <td class="text-center">{{ $details->selling_qty }}</td>
                                                                <td class="text-center">{{ $details->unit_price }}</td>
                                                                <td class="text-center">{{ $details->selling_price }}</td>
                                                                <td class="text-center">{{ $key + 1 }}</td>


                                                            </tr>
                                                            @php
                                                                $total_sum += $details->selling_price;
                                                            @endphp
                                                        @endforeach
                                                        <tr>
                                                            <td class="thick-line"></td>
                                                            <td class="thick-line"></td>
                                                            <td class="thick-line"></td>
                                                            <td class="thick-line"></td>
                                                            <td class="thick-line"></td>
                                                            <td class="thick-line text-center">
                                                                <strong>Subtotal</strong>
                                                            </td>
                                                            <td class="thick-line text-end">${{ $total_sum }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="no-line"></td>
                                                            <td class="no-line"></td>
                                                            <td class="no-line"></td>
                                                            <td class="no-line"></td>
                                                            <td class="no-line"></td>
                                                            <td class="no-line text-center">
                                                                <strong>Discount Amount</strong>
                                                            </td>
                                                            <td class="no-line text-end">${{ $payment->discount_amount }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="no-line"></td>
                                                            <td class="no-line"></td>
                                                            <td class="no-line"></td>
                                                            <td class="no-line"></td>
                                                            <td class="no-line"></td>
                                                            <td class="no-line text-center">
                                                                <strong>Paid Amount</strong>
                                                            </td>
                                                            <td class="no-line text-end">${{ $payment->paid_amount }}</td>
                                                        </tr>

                                                        <tr>
                                                            <td class="no-line"></td>
                                                            <td class="no-line"></td>
                                                            <td class="no-line"></td>
                                                            <td class="no-line"></td>
                                                            <td class="no-line"></td>
                                                            <td class="no-line text-center">
                                                                <strong>Due Amount</strong>
                                                            </td>
                                                            <td class="no-line text-end">${{ $payment->due_amount }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="no-line"></td>
                                                            <td class="no-line"></td>
                                                            <td class="no-line"></td>
                                                            <td class="no-line"></td>
                                                            <td class="no-line"></td>
                                                            <td class="no-line text-center">
                                                                <strong>Grand Amount</strong>
                                                            </td>
                                                            <td class="no-line text-end">
                                                                <h4 class="m-0">${{ $payment->total_amount }}</h4>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="d-print-none">
                                                <div class="float-end">
                                                    <a href="javascript:window.print()"
                                                        class="btn btn-success waves-effect waves-light"><i
                                                            class="fa fa-print"></i></a>
                                                    <a href="#"
                                                        class="btn btn-primary waves-effect waves-light ms-2">Download</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div> <!-- end row -->
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
@endsection
