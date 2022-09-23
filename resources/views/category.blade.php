@extends('layouts.front')
@section('content')
    <br>
    <!--// Main Banner \\-->
    <div class="wm-main-banner">
        <div class="wm-banner-three">
            <div class="wm-banner-three-layer">
                <img src="front/extra-images/1.jpg" alt="">
                <div class="wm-caption-three">
                    <div class="container">
                        <div class="wm-caption-three-inner">
                            <h1>Students <span>don’t</span> just attend our university.</h1>
                            <p>They discover diverse opportunities to develop talents, & become leaders, to have an impact
                                on our campus.</p>
                            <a class="wm-discover-btn wm-bgcolor-three" href="{{ url('about') }}">discover us</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wm-banner-three-layer">
                <img src="front/extra-images/2.jpg" alt="">
                <div class="wm-caption-three">
                    <div class="container">
                        <div class="wm-caption-three-inner">
                            <h1>Why <span>don’t</span> start the hard study?</h1>
                            <p>Computer science is the study of computers and their uses, and the field comprises a wide
                                range of subjects.</p>
                            <a class="wm-discover-btn wm-bgcolor-three" href="{{ url('about') }}">discover us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wm-banner-three-layer">
                <img src="front/extra-images/3.jpg" alt="">
                <div class="wm-caption-three">
                    <div class="container">
                        <div class="wm-caption-three-inner">
                            <h1>Why <span>don’t</span> start the hard study?</h1>
                            <p>Computer science is the study of computers and their uses, and the field comprises a wide
                                range of subjects.</p>
                            <a class="wm-discover-btn wm-bgcolor-three" href="{{ url('about') }}">discover us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--// Main Content \\-->
    <div class="wm-main-content">
        <!--// Main Section \\-->
        <div class="wm-main-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wm-fancy-title">
                            <h2>Browse <span>Categories</span></h2>
                        </div>
                        <div class="wm-service wm-box-service">
                            <ul>
                                @foreach ($category as $item)
                                    <a href="{{ url('category/' . $item->slug) }}">
                                        <li>
                                            <div class="wm-box-service-wrap wm-bgcolor">
                                                <i class="wmicon-suitcase"></i>
                                                <h6><a href="{{ url('category/' . $item->slug) }}">{{ $item->name }}</a>
                                                </h6>
                                            </div>

                                        </li>
                                    </a>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <div class="wm-fancy-title">
                        <h2>Featured
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Recwntly added</h2>
                            <div class="wm-courses-getting-started">
                                <div class="wm-courses-started">
                                    <ul class="wm-courses-started-listing">
                                        @foreach ($resource as $ritem)
                                            <li>
                                                <a href="#" class="wmicon-pen"></a>
                                                <div class="wm-courses-started-text">
                                                    <h6><a href="{{ url('single') }}">{{ $ritem->name }}</a></h6>
                                                    <span><a href="#" class="wmicon-time2"></a><time
                                                            datetime="2017-02-14">{{ $ritem->created_at }}</time></span>
                                                    <span><a href="#" class=" wmicon-clock2"></a><time
                                                            datetime="2017-02-14">{{ $ritem->description }}</time></span>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <h2>Reccommended</h2>
                            <div class="wm-courses-getting-started">
                                <div class="wm-courses-started">
                                    <ul class="wm-courses-started-listing">
                                        <li>
                                            <a href="#" class="wmicon-pen"></a>
                                            <div class="wm-courses-started-text">
                                                <h6><a href="{{ url('single') }}">Archaeology and Anthropology</a></h6>
                                                <span><a href="#" class="wmicon-time2"></a><time
                                                        datetime="2017-02-14">16/05/2016
                                                        - 17/06/2016</time></span>
                                                <span><a href="#" class=" wmicon-clock2"></a><time
                                                        datetime="2017-02-14">Duration:
                                                        1hr30mins</time></span>
                                            </div>

                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Main Section \\-->
    </div>
@endsection
