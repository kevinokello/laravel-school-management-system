<style>
    .btn-primary2 {
        border-color: #222845;
        background-color: #222845;
        color: #FFFFFF;
        background-color: #2f3969;
    }

    a.button6 {
        display: inline-block;
        padding: 0.7em 1.4em;
        margin: 0 02em 0.3em 0;
        margin-top: 20px;
        border-radius: 0.15em;
        box-sizing: border-box;
        text-decoration: none;
        font-family: 'Roboto', sans-serif;
        text-transform: uppercase;
        font-weight: 400;
        color: #FFFFFF;
        background-color: #b99663;
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
<header id="wm-header" class="wm-header-three sticky">
    <!--// MainHeader \\-->
    <div class="wm-main-header wm-bgcolor-three">
        <div class="container">
            <div class="row">
                <div class="col-md-2"><a href="{{ url('/') }}" class="wm-logo"><img src="front/images/logo-3.png"
                            alt=""></a></div>
                <div class="col-md-10">
                    <div class="wm-right-section">
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
                                    <li><a href="{{ url('browse') }}">Browse</a>
                                    </li>
                                    <li><a href="{{ url('contact') }}">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="button6"><b>Dashboard</b></a>
                            @else
                                <a href="{{ url('login') }}" class="button6" style="background-color:#b99663"><b>Get
                                        Started</b></a>

                            @endauth
                        @endif
                        <!--// Navigation \\-->
                        <!--// Navigation \\-->
                    </div>
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
