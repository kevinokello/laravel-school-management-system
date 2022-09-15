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

                                        <form method="post" action="{{ url('resource/category/store') }}" id="myForm"
                                            class="form" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6">                                                                                                         <div class="form-group">
                                                            <label>Category</label>
                                                            <select required name="academic_id" id="year"
                                                                class="form-control">
                                                                <option value="">-- Select Category --</option>
                                                                @foreach ($category as $cateitem)
                                                                    <option value="{{ $cateitem->id }} ">
                                                                        {{ $cateitem->name }}</option>
                                                                @endforeach
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput4">Slug</label>
                                                            <input type="text" class="form-control" placeholder="Slug"
                                                                name="slug">
                                                        </div>
                                                    </div>
                                                   <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput4">Slug</label>
                                                            <input type="text" class="form-control" placeholder="Slug"
                                                                name="slug">
                                                        </div>
                                                    </div>

                                                </div>




                                            </div>

                                            <button
                                                style="  border-color: #0073aa;
            background-color: #0073aa;
            color: #fff; height:50px; width:170px; "
                                                type="submit" class="btn btn-primary">
                                                Add category
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
@endsection
