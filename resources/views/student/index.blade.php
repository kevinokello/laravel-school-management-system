@extends('layouts.dash')
@section('content')
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row"></div>
            <div class="content-body">
                <div class="row">
                    <div class="col-xl-8 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-block">
                                    <h4 class="card-title">Video Embed</h4>
                                    <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                                </div>
                                <div class="embed-responsive embed-responsive-item embed-responsive-16by9">
                                    <iframe class="img-thumbnail"
                                        src="https://www.youtube.com/embed/SsE5U7ta9Lw?rel=0&amp;controls=0&amp;showinfo=0"
                                        allowfullscreen=""></iframe>
                                </div>
                                <div class="card-block">
                                    <p class="card-text">Candy cupcake sugar plum oat cake wafer marzipan jujubes lollipop
                                        macaroon. Cake dragée jujubes donut chocolate bar chocolate cake cupcake chocolate
                                        topping. Dessert jelly beans toffee muffin.</p>
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="card" style="height: 440px">
                            <div class="card-body">
                                <div class="card-block">
                                    <h4 class="card-title">List Group</h4>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <span class="tag tag-default tag-pill bg-primary float-xs-right">4</span>
                                        Cras justo odio
                                    </li>
                                    <li class="list-group-item">
                                        <span class="tag tag-default tag-pill bg-info float-xs-right">2</span>
                                        Dapibus ac facilisis in
                                    </li>
                                    <li class="list-group-item">
                                        <span class="tag tag-default tag-pill bg-warning float-xs-right">1</span>
                                        Morbi leo risus
                                    </li>
                                    <li class="list-group-item">
                                        <span class="tag tag-default tag-pill bg-success float-xs-right">3</span>
                                        Porta ac consectetur ac
                                    </li>
                                    <li class="list-group-item">
                                        <span class="tag tag-default tag-pill bg-danger float-xs-right">8</span>
                                        Vestibulum at eros
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
