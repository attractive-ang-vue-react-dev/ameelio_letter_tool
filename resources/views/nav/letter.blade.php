@extends('layouts.letters')

@section('content')
  <main role="main" class="content ml-sm-auto  px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Letters</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
          {{-- <button class="btn btn-sm btn-outline-secondary">Share</button> --}}
          {{-- <button class="btn btn-sm btn-outline-secondary">Export</button> --}}
        </div>
        {{-- <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
          <span data-feather="calendar"></span>
          This week
        </button> --}}
      </div>
    </div>
<div class="content">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <h4 class="card-category">Sent Letters</h4>

            @foreach($user->all() as $user)
                <div class="card">

                    <div class="row card-body col-sm-12">
                        <div class="col-sm-3">
                            <img src="/user.jpg" style="border-radius:50%; border: 2px solid white;" alt="..">
                        </div>
                        <div class="col-sm-9"><h5>{{ $user->first_name}}</h5><h5 class="card-category">{{ $user->created_at }}<br>sent</h5></div>
                    </div>
                    <div class=card-footer></div>
                </div>
            @endforeach
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="col-sm-10">
                <h4 class="card-category">Compose Letter</h4>
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary">Compose Letter</button>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="chart-area">
                                <h6>Send your letter before 5pm EST for same dayprocessing.</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10 ">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-category">Credits</h4>
                    </div>
                    <div class="card-body">
                        <div class="chart-area">
                            <div class="row col-sm-12">
                                <div class="col-sm-2">0</div>
                                <div class="col-sm-7">
                                    <h6>Free Letter Credits</h6>
                                </div>
                                <div class="col-sm-3"></div>
                            </div>
                            <hr>
                            <div class="row col-sm-12">
                                <div class="col-sm-2">0</div>
                                <div class="col-sm-7">
                                    <h6>Purchased Letter Credits</h6>
                                </div>
                                <div class="col-sm-3">
                                    <a class="" href="#"><h6>GET MORE</h6></a>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10">
                <h5 class="card-category">Earn free letters</h5>
                <div class="card">
                    <div class="container">
                        <div class="card-body">
                            <div class="container">
                                <div class="card-header">
                                    <div class="card-body">
                                        <h6 class="card-category">Earn a letter credit by sharing with your friends and family.</h6>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <button class="btn btn-primary">SHARE LINK</button>
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
</div>


  </main>
@endsection
