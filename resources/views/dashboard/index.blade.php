@extends('layouts.dash')
@section('content')
  <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row"></div>
        <div class="content-body">
          <!-- stats -->
          <div class="row">
            <div class="col-xl-3 col-lg-6 col-xs-12">
              <div class="card">
                <div class="card-body">
                  <div class="card-block">
                    <div class="media">
                      <div class="media-body text-xs-left">
                        <h3 class="pink">278</h3>
                        <span>{{ Session::get('school_id') }}</span>
                      </div>
                      <div class="media-right media-middle">
                        <i
                          class="icon-bag2 pink font-large-2 float-xs-right"
                        ></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-xs-12">
              <div class="card">
                <div class="card-body">
                  <div class="card-block">
                    <div class="media">
                      <div class="media-body text-xs-left">
                        <h3 class="teal">156</h3>
                        <span>New Clients</span>
                      </div>
                      <div class="media-right media-middle">
                        <i
                          class="icon-user1 teal font-large-2 float-xs-right"
                        ></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-xs-12">
              <div class="card">
                <div class="card-body">
                  <div class="card-block">
                    <div class="media">
                      <div class="media-body text-xs-left">
                        <h3 class="deep-orange">64.89 %</h3>
                        <span>Conversion Rate</span>
                      </div>
                      <div class="media-right media-middle">
                        <i
                          class="icon-diagram deep-orange font-large-2 float-xs-right"
                        ></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-xs-12">
              <div class="card">
                <div class="card-body">
                  <div class="card-block">
                    <div class="media">
                      <div class="media-body text-xs-left">
                        <h3 class="cyan">423</h3>
                        <span>Support Tickets</span>
                      </div>
                      <div class="media-right media-middle">
                        <i
                          class="icon-ios-help-outline cyan font-large-2 float-xs-right"
                        ></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


@endsection
