@extends('layouts.front')
@section('content')
    <br><br><br><br>
    <!--// Main Banner \\-->
		<div class="wm-main-banner">
            
            <div class="wm-banner-one">
                <div class="wm-banner-one-for">
                    <div class="wm-banner-one-for-layer"> <img src="front/extra-images/1.jpg" alt=""> </div>
                    <div class="wm-banner-one-for-layer"> <img src="front/extra-images/2.jpg" alt=""> </div>
                    <div class="wm-banner-one-for-layer"> <img src="front/extra-images/3.jpg" alt=""> </div>
                </div>
                <div class="wm-banner-one-nav">
                    <div class="wm-banner-one-nav-layer">
                        <h1>International Programmes</h1>
                        <p>The study programmes of the Enroll Campus University are open to people from all nationalities.</p>
                        <a href="#" class="wm-banner-btn">learn more</a>
                    </div>
                    <div class="wm-banner-one-nav-layer">
                        <h1>UA Degree Programmes</h1>
                        <p>We offer companies the opportunity to access the technology and knowledge developed at the  Enroll Campus University.</p>
                        <a href="#" class="wm-banner-btn">know more</a>
                    </div>
                    <div class="wm-banner-one-nav-layer banner-bgcolor">
                        <h1>Research & Business</h1>
                        <p>The scientific community nominates CRISPR System, based on research developed at the UA.</p>
                        <a href="#" class="wm-banner-btn">learn more</a>
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
                                    <a href="{{ url('category/' . $item->id) }}">
                                        <li>
                                            <div class="wm-box-service-wrap wm-bgcolor">
                                                <i class="wmicon-computer"></i>
                                                <h6><a href="{{ url('subcategory/' . $item->id) }}">{{ $item->name }}</a>
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
                            <h2>Recently added</h2>
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
