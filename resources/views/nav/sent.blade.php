@extends('layouts.letters')

@section('content')
  <main role="main" class="content ml-sm-auto  px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Sent</h1>
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
        <div class="wrapper">
            <div class="row col-lg-12 col-md-12 col-sm-12">
                <div class="col-lg-12">
                    <h3>Thanks for using Ameelio.Your letter is on the way.</h3>
                </div>
                <div class="col-m-3">
                    <a class="bnt btn-lg btn-primary" href="/tracker">Track your letter</a>
                </div>
            </div>
        </div>
    </div>

  </main>


@endsection
