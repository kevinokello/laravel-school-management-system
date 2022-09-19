@extends('layouts.dash')
@section('content')
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="content-body">
                                <section class="card">
                                    <div id="invoice-template" class="card-block">
                                        <!-- Invoice Company Details -->
                                        <div id="invoice-company-details" class="row">
                                            <div class="col-md-6 col-sm-12 text-xs-center text-md-left">
                                                <img src="../../app-assets/images/logo/robust-80x80.png" alt="company logo"
                                                    class="" />
                                                <ul class="px-0 list-unstyled">
                                                    <li class="text-bold-800">Robust Creative Studio</li>
                                                    <li>4025 Oak Avenue,</li>
                                                    <li>Melbourne,</li>
                                                    <li>Florida 32940,</li>
                                                    <li>USA</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 col-sm-12 text-xs-center text-md-right">
                                                <h2>INVOICE NUMBER</h2>
                                                <p class="pb-3">{{ $invoice->invoice_no }}</p>
                                                <ul class="px-0 list-unstyled">
                                                    <li>Balance Due</li>
                                                    <li class="lead text-bold-800">$ 12,000.00</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--/ Invoice Company Details -->

                                        <!-- Invoice Customer Details -->
                                        <div id="invoice-customer-details" class="row pt-2">
                                            <div class="col-sm-12 text-xs-center text-md-left">
                                                <p class="text-muted">Bill To</p>
                                            </div>
                                            <div class="col-md-6 col-sm-12 text-xs-center text-md-left">
                                                <ul class="px-0 list-unstyled">
                                                    <li class="text-bold-800">Mr. Bret Lezama</li>
                                                    <li>4879 Westfall Avenue,</li>
                                                    <li>Albuquerque,</li>
                                                    <li>New Mexico-87102.</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 col-sm-12 text-xs-center text-md-right">
                                                <p>
                                                    <span class="text-muted">Invoice Date :</span>
                                                    {{ date('d-m-Y', strtotime($invoice->date)) }}
                                                </p>
                                                <p><span class="text-muted">Terms :</span> Due on Receipt</p>
                                                <p><span class="text-muted">Due Date :</span> 10/05/2016</p>
                                            </div>
                                        </div>
                                        <!--/ Invoice Customer Details -->
                                        @php
                                            $payment = App\Models\Payment::where('invoice_id', $invoice->id)->first();
                                        @endphp
                                        <!-- Invoice Items Details -->
                                        <div id="invoice-items-details" class="pt-2">
                                            <div class="row">
                                                <div class="table-responsive col-sm-12">
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
                                                            <tr>
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
                                                                <td class="text-center">
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
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-7 col-sm-12 text-xs-center text-md-left">
                                                    <p class="lead">Payment Methods:</p>
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <table class="table table-borderless table-sm">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Bank name:</td>
                                                                        <td class="text-xs-right">ABC Bank, USA</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Acc name:</td>
                                                                        <td class="text-xs-right">Amanda Orton</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>IBAN:</td>
                                                                        <td class="text-xs-right">FGS165461646546AA</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>SWIFT code:</td>
                                                                        <td class="text-xs-right">BTNPP34</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-5 col-sm-12">
                                                    <p class="lead">Total due</p>
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Sub Total</td>
                                                                    <td class="text-xs-right">${{ $total_sum }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Discount Amount</td>
                                                                    <td class="text-xs-right">$
                                                                        {{ $payment->discount_amount }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Paid Amount</td>
                                                                    <td class="text-xs-right">$ {{ $payment->paid_amount }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Due Amount</td>
                                                                    <td class="pink text-xs-right">$
                                                                        {{ $payment->due_amount }}</td>
                                                                </tr>
                                                                <tr class="bg-grey bg-lighten-4">
                                                                    <td class="text-bold-800">Total Amount</td>
                                                                    <td class="blue text-bold-800 text-xs-right">
                                                                        $ {{ $payment->total_amount }}
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <!-- Invoice Footer -->
                                        <div id="invoice-footer">
                                            <div class="row">
                                                <div class="col-md-7 col-sm-12">
                                                    <h6>Terms & Condition</h6>
                                                    <p>
                                                        You know, being a test pilot isn't always the healthiest
                                                        business in the world. We predict too much for the next
                                                        year and yet far too little for the next 10.
                                                    </p>
                                                </div>
                                                <div class="col-md-5 col-sm-12 text-xs-center">
                                                    <a href="javascript:window.print()"
                                                        class="btn btn-success waves-effect waves-light"><i
                                                            class="fa fa-print"></i>Print Invoice</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/ Invoice Footer -->
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
@endsection
