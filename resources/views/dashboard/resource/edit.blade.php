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
                                        <form method="post" action="{{ url('resource/update/' . $resource->id) }}"
                                            id="myForm" class="form" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput5">Category</label>
                                                            <select required name="category_id" class="form-control"
                                                                id="category">
                                                                <option value="">-- Select category --</option>
                                                                @foreach ($category as $item)
                                                                    <option value="{{ $item->id }}"
                                                                        {{ $resource->category_id == $item->id ? 'selected' : '' }}>
                                                                        {{ $item->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput5">Sub Category</label>
                                                            <select required name="sub_category_id" id="subcategory"
                                                                class="form-control">
                                                                <option value="">-- Select subcategory --</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput4">Image</label>
                                                            <img src="{{ asset('uploads/resources/' . $resource->image) }}"
                                                                width="50px" height="40px" alt="Img">
                                                            <input type="file" class="form-control" name="image">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput4">Name</label>
                                                            <input type="text" class="form-control" name="name"
                                                                value="{{ $resource->name }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput4">Price</label>
                                                            <input type="text" class="form-control" name="price"
                                                                value="{{ $resource->price }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput4">Slug</label>
                                                            <input type="text" class="form-control" name="slug"
                                                                value="{{ $resource->slug }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput4">Status</label>
                                                            <input type="checkbox" class="form-control" name="status"
                                                                {{ $resource->status == '1' ? 'checked' : '' }}>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput4">Featured</label>
                                                            <input type="checkbox" class="form-control" name="featured"
                                                                {{ $resource->featured == '1' ? 'checked' : '' }}>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput4">Recommended</label>
                                                            <input type="checkbox" class="form-control" name="recommended"
                                                                {{ $resource->recommended == '1' ? 'checked' : '' }}>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="projectinput4">Description</label>
                                                        <textarea id="projectinput8" rows="5" class="form-control" name="description" placeholder="Medical condition">{{ $resource->description }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="projectinput4">Body</label>
                                                        <textarea id="projectinput8" rows="6" class="form-control" name="body" placeholder="Medical condition">{{ $resource->body }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput4">Resource</label>
                                                        <input type="file" class="form-control" name="attatchment">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput4">Video Link</label>
                                                        <input type="text" class="form-control" name="yt_iframe"
                                                            value="{{ $resource->yt_iframe }}">
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <button
                                        style="  border-color: #222845; background-color: #222845; color: #fff; height:50px; width:170px; "
                                        type="submit" class="btn btn-primary">
                                        Update Resource
                                    </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </section>
        </div>
    </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#category').on('change', function() {
                var categoryId = this.value;
                $('#subcategory').html('');
                $.ajax({
                    url: '{{ url('get-subcategory') }}?category_id=' + categoryId,
                    type: 'get',
                    success: function(res) {
                        $('#subcategory').html(
                            '<option value="">-- Select category --</option>');
                        $.each(res, function(key, value) {
                            $('#subcategory').append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                    }
                });
            });
        });
    </script>
@endsection
