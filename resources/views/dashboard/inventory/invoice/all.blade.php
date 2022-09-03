@extends('layouts.dash')
@section('content')
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-body">
                <div class="col-xl-13 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All purchases</h4>
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
                                            <th>Sl</th>
                                            <th>Customer Name</th>
                                            <th>Invoice No </th>
                                            <th>Date </th>
                                            <th>Desctipion</th>
                                            <th>Amount</th>

                                    </thead>


                                    <tbody>

                                        @foreach ($allData as $key => $item)
                                            <tr>
                                                <td> {{ $key + 1 }} </td>
                                                <td> {{ $item['payment']['customer']['name'] }} </td>
                                                <td> #{{ $item->invoice_no }} </td>
                                                <td> {{ date('d-m-Y', strtotime($item->date)) }} </td>


                                                <td> {{ $item->description }} </td>

                                                <td> $ {{ $item['payment']['total_amount'] }} </td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div>
        </div> <!-- container-fluid -->
    </div>
@endsection
