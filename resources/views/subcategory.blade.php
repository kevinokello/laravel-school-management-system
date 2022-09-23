@extends('layouts.front')
@section('content')
    <br>
    <div class="wm-main-content">
        <!--// Main Section \\-->
        <div class="wm-main-section">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="wm-event wm-latest-event wm-filter-event">
                            <ul class="row">
                                @foreach ($resources as $resource)
                                    <a href="">
                                        <li class="col-md-3 php">
                                            <figure><a href="#"><img src="extra-images/latest-event-1.png"
                                                        alt="">
                                                    <span class="wm-event-transparent-hover wm-bgcolor"></span></a></figure>
                                            <div class="wm-latest-event-text">
                                                <h6><a href="#" class="wm-color">{{ $resource->name }}</a>
                                                </h6>
                                                <time datetime="2008-02-14 20:00">Created at{{ $resource->created_at }}<span><i
                                                            class="wmicon-clock"></i>
                                                      Price {{ $resource->price }}</span></time>
                                                <p>{{ $resource->description }}</p>
                                                <a href="#" class="wm-banner-btn">check event</a>
                                            </div>
                                        </li>
                                    </a>
                                @endforeach

                            </ul>
                        </div>
                        <div class="wm-pagination">
                            <ul>
                                <li><a href="#" aria-label="Previous"> <i class="wmicon-arrows4"></i> Previous</a>
                                </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li>...</li>
                                <li><a href="#">18</a></li>
                                <li><a href="#" aria-label="Next"> <i class="wmicon-arrows4"></i> Next</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--// Main Section \\-->

    </div>
@endsection
