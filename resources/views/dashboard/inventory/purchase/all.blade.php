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
                                            <th>Purhase No</th>
                                            <th>Date </th>
                                            <th>Supplier</th>
                                            <th>Category</th>
                                            {{-- <th>Qty</th>
                                            <th>Unit price</th>
                                            <th>Buying price</th> --}}
                                            <th>Product Name</th>
                                            <th>Status</th>
                                            <th>Action</th>

                                    </thead>


                                    <tbody>

                                        @foreach ($allData as $key => $item)
                                            <tr>
                                                <td> {{ $key + 1 }} </td>
                                                <td> {{ $item->purchase_no }} </td>
                                                <td> {{ date('d-m-Y', strtotime($item->date)) }} </td>
                                                <td> {{ $item->supplier_id }} </td>
                                                <td> {{ $item->category_id }} </td>
                                                {{-- <td> {{ $item['supplier']['name'] }} </td>
                 <td> {{ $item['category']['name'] }} </td> --}}
                                                {{-- <td> {{ $item->buying_qty }} </td>
                                                <td> {{ $item->unit_price }} </td>
                                                <td> {{ $item->buying_price }} </td> --}}
                                                {{-- <td> {{ $item['product']['name'] }} </td> --}}
                                                <td> {{ $item->product_id }} </td>

                                                <td>
                                                    @if ($item->status == '0')
                                                        <span class="btn btn-warning">Pending</span>
                                                    @elseif($item->status == '1')
                                                        <span class="btn btn-success">Approved</span>
                                                    @endif
                                                </td>

                                                <td>
                                                    @if ($item->status == '0')
                                                        <a href="{{ url('inventory/purchase/delete', $item->id) }}"
                                                            class="btn btn-danger sm" title="Delete Data" id="delete"> <i
                                                                class="fas fa-trash-alt"></i> </a>
                                                    @endif
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
