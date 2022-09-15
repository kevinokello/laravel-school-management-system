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

                                        <form method="POST" action="{{ url('resource/category/edit/' . $category->id) }}" id="myForm"
                                            class="form" enctype="multipart/form-data">
                                            @csrf
                                                  @method('PUT')
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> Name</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Category Name" name="name"
                                                                value="{{ $category->name }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput4">Slug</label>
                                                            <input type="text" class="form-control" placeholder="Slug"
                                                                name="slug" value="{{ $category->slug }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput4">Image</label>
                                                            <img src="{{ asset('uploads/categories/' . $category->image) }}"
                                                                width="50px" height="40px" alt="Img">
                                                            <input type="file" class="form-control" name="image">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button
                                                style="  border-color: #0073aa;
            background-color: #0073aa;
            color: #fff; height:50px; width:170px; "
                                                type="submit" class="btn btn-primary">
                                                Update Category
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
