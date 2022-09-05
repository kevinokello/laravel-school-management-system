@extends('layouts.dash')
@section('content')
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-body">
                <div class="col-xl-13 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                        <div class="card-body">
                                            <a href="{{ url('inventory/invoice/add') }}"
                                                class="btn btn-dark btn-rounded waves-effect waves-light"
                                                style="float:right;"><i class="fas fa-plus-circle"> Add Inovice </i></a>
                                            <br> <br>

                                            <h4 class="card-title">Inovice All Data </h4>


                                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Sl</th>
                                                        <th>C Name</th>
                                                        <th>Inv No </th>
                                                        {{-- <th>Date </th> --}}
                                                        <th>Desctipion</th>
                                                        <th>Amount</th>
                                                        <th>Status</th>
                                                        <th>Action</th>

                                                </thead>


                                                <tbody>

                                                    @foreach ($allData as $key => $item)
                                                        <tr>
                                                            <td> {{ $key + 1 }} </td>
                                                            {{-- <td> {{ $item['payment']['customer']['name'] }} </td> --}}
                                                              <td> #{{ $item->customer_name }} </td>
                                                            <td> #{{ $item->invoice_no }} </td>
                                                            {{-- <td> {{ date('d-m-Y', strtotime($item->date)) }} </td> --}}


                                                            <td> {{ $item->description }} </td>

                                                            <td> $ {{ $item['payment']['total_amount'] }} </td>

                                                            <td>
                                                                @if ($item->status == '0')
                                                                    <span class="btn btn-warning">Pending</span>
                                                                @elseif($item->status == '1')
                                                                    <span class="btn btn-success">Approved</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @if ($item->status == '0')
                                                                    <a href="{{ url('inventory/invoice/approve', $item->id) }}"
                                                                        class="btn btn-dark sm" title="Approved Data"> <i
                                                                            class="fas fa-check-circle"></i> </a>
                                                                    <a href="{{ url('inventory/invoice/delete', $item->id) }}"
                                                                        class="btn btn-danger sm" title="Delete Data"
                                                                        id="delete"> <i class="fas fa-trash-alt"></i>
                                                                    </a>
                                                                @endif
                                                            </td>

                                                        </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div> <!-- container-fluid -->
    </div>
@endsection
