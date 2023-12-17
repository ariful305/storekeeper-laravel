@extends('layouts.dashboard')
@section('title','Dashboard')
@section('content')

      <section>
        <div class="container">        
        <div class="grey-bg container-fluid">
            <section id="minimal-statistics">
              <div class="row">
                <div class="col-12 mt-3 mb-1">
                  <h4 class="text-uppercase">Sales Report</h4>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-3 col-sm-6 col-12"> 
                  <div class="card">
                    <div class="card-content">
                      <div class="card-body">
                        <div class="media d-flex">
                          <div class="align-self-center">
                            <i class="icon-wallet primary font-large-2 float-left"></i>
                          </div>
                          <div class="media-body text-right">
                            <h3>{{ $today }}</h3>
                            <span>Today Sale</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                  <div class="card">
                    <div class="card-content">
                      <div class="card-body">
                        <div class="media d-flex">
                          <div class="align-self-center">
                            <i class="icon-wallet warning font-large-2 float-left"></i>
                          </div>
                          <div class="media-body text-right">
                            <h3>{{ $yesterday }}</h3>
                            <span>Yesterday Sale</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                  <div class="card">
                    <div class="card-content">
                      <div class="card-body">
                        <div class="media d-flex">
                          <div class="align-self-center">
                            <i class="icon-wallet success font-large-2 float-left"></i>
                          </div>
                          <div class="media-body text-right">
                            <h3>{{ $this_month }}</h3>
                            <span>This month Sale</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                  <div class="card">
                    <div class="card-content">
                      <div class="card-body">
                        <div class="media d-flex">
                          <div class="align-self-center">
                            <i class="icon-wallet danger font-large-2 float-left"></i>
                          </div>
                          <div class="media-body text-right">
                            <h3>{{ $last_month }}</h3>
                            <span>Last month Sale</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            
            </div>
      </section>

@endsection

