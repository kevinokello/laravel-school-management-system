@extends('layouts.front')
@section('content')
    <style>
        .btn-primary2 {
            border-color: #222845;
            background-color: #222845;
            color: #FFFFFF;
            background-color: #2f3969;
        }
        a.button62 {
            display: inline-block;
            padding: 0.7em 1.4em;
            margin: 0 02em 0.3em 0;
            border-radius: 0.15em;
            box-sizing: border-box;
            text-decoration: none;
            font-family: 'Roboto', sans-serif;
            text-transform: uppercase;
            font-weight: 400;
            color: #FFFFFF;
            background-color: #ffb400;
            box-shadow: inset 0 -0.6em 0 -0.35em rgba(0, 0, 0, 0.17);
            text-align: center;
            position: relative;
        }

        a.button6:active {
            top: 0.1em;
        }

        @media all and (max-width:30em) {
            a.button6 {
                display: block;
                margin: 0.4em auto;
            }
        }
    </style>
    <br><br>
    <div class="wm-main-content">
        <div class="wm-main-section">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="wm-filter-box">
                            <div class="wm-apply-select">
                                <select>
                                    <option>Select Category</option>
                                    <option>Category</option>

                                </select>
                            </div>
                            <div class="wm-apply-select">
                                <select>
                                    <option>Select Sub category</option>
                                    <option>Sub category</option>

                                </select>
                            </div>
                            <div class="wm-normal-btn">
                                <a href="{{ url('login') }}" class="button62"
                                    style="background-color:#668fff"><b>Search</b></a>
                            </div>
                        </div>
                        <div class="wm-courses-getting-started">
                            <div class="wm-title-full">
                                <h2>Latest resources</h2>
                            </div>
                            <div class="wm-courses-started">
                                <span>Course Additional Entry</span>
                                <ul class="wm-courses-started-listing">
                                    <li>
                                        <a href="#" class="wmicon-pen"></a>
                                        <div class="wm-courses-started-text">
                                            <h6><a href="{{ url('single') }}">Archaeology and Anthropology</a></h6>
                                            <span><a href="#" class="wmicon-time2"></a><time
                                                    datetime="2017-02-14">16/05/2016 - 17/06/2016</time></span>
                                            <span><a href="#" class=" wmicon-clock2"></a><time
                                                    datetime="2017-02-14">Duration: 1hr30mins</time></span>
                                        </div>
                                        <div class="wm-courses-preview">
                                            <a href="{{ url('single') }}">Preview</a>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" class="wmicon-pen"></a>
                                        <div class="wm-courses-started-text">
                                            <h6><a href="{{ url('single') }}">Archaeology and Anthropology</a></h6>
                                            <span><a href="#" class="wmicon-time2"></a><time
                                                    datetime="2017-02-14">16/05/2016 - 17/06/2016</time></span>
                                            <span><a href="#" class=" wmicon-clock2"></a><time
                                                    datetime="2017-02-14">Duration: 1hr30mins</time></span>
                                        </div>
                                        <div class="wm-courses-preview">
                                            <a href="{{ url('single') }}">Preview</a>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" class="wmicon-pen"></a>
                                        <div class="wm-courses-started-text">
                                            <h6><a href="{{ url('single') }}">Archaeology and Anthropology</a></h6>
                                            <span><a href="#" class="wmicon-time2"></a><time
                                                    datetime="2017-02-14">16/05/2016 - 17/06/2016</time></span>
                                            <span><a href="#" class=" wmicon-clock2"></a><time
                                                    datetime="2017-02-14">Duration: 1hr30mins</time></span>
                                        </div>
                                        <div class="wm-courses-preview">
                                            <a href="{{ url('single') }}">Preview</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>

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
