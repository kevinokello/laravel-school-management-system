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
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form">Edit Fee Category Name </h4>
                                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                </div>
                                <div class="card-body collapse in">
                                    <div class="card-block">

                                        <form method="post"
                                            action="{{ url('academic/fee/category/update', $editData->id) }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="text" name="name" class="form-control"
                                                                value="{{ $editData->name }}">
                                                            @error('name')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="text-xs-center">
                                                        <input
                                                            style="  border-color: rgb(87, 102, 77);
            background-color: rgb(87, 102, 77);
            color: #fff; height:40px; width:130px;"
                                                            type="submit" class="btn btn-rounded btn-info" value="Update">
                                                    </div>
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
@endsection
