<style>
    .btn-primary2 {
        border-color: #222845;
        background-color: #222845;
        color: #FFFFFF;
        background-color: #2f3969;
    }
</style>

<header id="wm-header" class="wm-header-one sticky">
    <!--// MainHeader \\-->
    <div class="wm-main-header">
        <div class="container">
            <div class="row">
                <div class="col-md-3"><a href="{{ url('/') }}" class="wm-logo"><img src="front/images/logo-1.png"
                            alt=""></a></div>
                <div class="col-md-9">
                    <!--// Navigation \\-->
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar-collapse-1" aria-expanded="true">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="{{ url('/') }}">Home</a>
                                </li>
                                <li><a href="{{ url('about') }}">About</a>
                                </li>
                                <li class="wm-megamenu-li"><a href="#">Resources</a>
                                    <ul class="wm-megamenu">
                                        <li class="row">
                                            <div class="col-md-6">
                                                <a href="#" class="wm-thumbnail">
                                                    <img src="front/extra-images/megamenu-frame.jpg" alt="" />
                                                </a>
                                            </div>
                                            <div class="col-md-2">
                                                <h4>Category</h4>
                                                <ul class="wm-megalist">
                                                    <li><a href="404-page.html">sub category</a></li>
                                                    <li><a href="about-us.html">sub category</a></li>
                                                    <li><a href="blog-grid.html">sub category</a></li>
                                                    <li><a href="blog-list.html">sub category</a></li>
                                                    <li><a href="blog-detail.html">sub category</a></li>
                                                    <li><a href="faq-page.html">sub category</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2">
                                                <h4>Category</h4>
                                                <ul class="wm-megalist">
                                                    <li><a href="404-page.html">sub category</a></li>
                                                    <li><a href="about-us.html">sub category</a></li>
                                                    <li><a href="blog-grid.html">sub category</a></li>
                                                    <li><a href="blog-list.html">sub category</a></li>
                                                    <li><a href="blog-detail.html">sub category</a></li>
                                                    <li><a href="faq-page.html">sub category</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2">
                                                <h4>Category</h4>
                                                <ul class="wm-megalist">
                                                    <li><a href="404-page.html">sub category</a></li>
                                                    <li><a href="about-us.html">sub category</a></li>
                                                    <li><a href="blog-grid.html">sub category</a></li>
                                                    <li><a href="blog-list.html">sub category</a></li>
                                                    <li><a href="blog-detail.html">sub category</a></li>
                                                    <li><a href="faq-page.html">sub category</a></li>
                                                </ul>
                                            </div>

                                        </li>
                                    </ul>
                                </li>
   <li><a href="{{ url('browse') }}">Browse</a>
                                </li>
   <li><a href="{{ url('contact') }}">Contact</a>
                                </li>

                            </ul>
                        </div>
                    </nav>
                    @if (Route::has('login'))
                        @auth
                            <a class="wm-header-btn btn-primary2" href="{{ url('/dashboard') }}">Dashboard</a>
                        @else
                            <a href="{{ url('login') }}" class="wm-header-btn btn-primary2">get started</a>
                        @endauth
                    @endif
                    <!--// Navigation \\-->

                </div>
            </div>
        </div>
    </div>
    <!--// MainHeader \\-->

</header>
<!-- ModalSearch Box -->
<div class="modal fade" id="ModalSearch" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="wm-modallogin-form">
                    <span class="wm-color">Search Your KeyWord</span>
                    <form>
                        <ul>
                            <li>
                                <input type="text" value="Keywords..."
                                    onblur="if(this.value == '') { this.value ='Keywords...'; }"
                                    onfocus="if(this.value =='Keywords...') { this.value = ''; }" />
                            </li>
                            <li><input type="submit" value="Search" /></li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
