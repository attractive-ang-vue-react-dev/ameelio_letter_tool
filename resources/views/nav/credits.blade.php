@extends('layouts.letters')

@section('content')
  <main role="main" class="content ml-sm-auto  px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Credits</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
          {{-- <button class="btn btn-sm btn-outline-secondary">Share</button> --}}
          <i class="fas fa-money-bill" style="font-size: 2em;"></i> <b style="font-size: 2em; margin: 10px;">{{ $user->credit }}</b>
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
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                        <h4>Select Quantity</h4>
                        </div>
                        <div class="card-body">
                            <div class=" col-sm-2">
                                <select class="form-control" name="quantity" required>
                                    <option>Quantity1</option>
                                    <option >Quantity2</option>
                                    <option >Quantity3</option>
                                </select>
                                <br>
                                <h6>One letter costs one credit</h6>
                            </div>
                            <div class="col-sm-4">
                                <h5>Enter payment information</h5>
                                <h6>ADD A CARD</h6>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" style="padding-left:10%;"name="credit"  placeholder="Cardholder Name" required>
                                <i class='fas fa-credit-card' style="color:#9A9A9A;font-size: 26px;position: absolute;left: 5%; top: 8px;"></i>
                            </div>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" name="credit"  placeholder="Card Number" required>
                            </div>
                            <div class="row col-sm-5">
                                <div class="col-sm-6"></div>
                                <div class="col-sm-6">
                                    <button class="btn btn-md btn-neutral" href="#">Back</button>
                                    <button class="btn btn-md btn-primary" href="#">Next</button>
                                </div>
                            </div>
                            <div class="row col-sm-5">
                                <span class="col-sm-5"><hr></span>
                                <p style="margin-top: 10px;">OR</p>
                                <span class="col-sm-5"><hr></span>

                            </div>
                            <!-- <a class="btn btn-md btn-primary" href="#">Purchase Credits</a> -->
                        </div>
                        <div class="row card-category col-sm-4">
                            <p>USE A SAVED CARD </p>
                            <p><i>You do not have any saved card</i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  </main>


@endsection
