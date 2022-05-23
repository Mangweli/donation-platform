@extends('layouts.app')

@section('content')

<body class="g-sidenav-show  bg-gray-100">
    @include('layouts.sidebar')
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">

    @include('layouts.mainnav')

    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">

                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Amount</p>
                    <h5 class="font-weight-bolder mb-0">
                       $ {{ number_format( $total, 2) }}
                    </h5>
                  </div>
                </div>
                
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Today's Amount</p>
                    <h5 class="font-weight-bolder mb-0">
                       $ {{ number_format( $todayTotal, 2) }}
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row my-4">
        <div class="row">
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header pb-0">
                  <h6>Donations ({{ count( $donations);}})</h6>
                  <div class="row">
                        <div class="col-6">
                            <button data-bs-toggle="modal" data-bs-target="#myModalSearch" type="button" class="btn btn-primary"> <i class="fas fa-search text-lg opacity-10" aria-hidden="true"></i></button>
                        </div>
                        <div class="col-6">
                            <button type="button" style="float: right" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                Add
                            </button>
                        </div>
                  </div>
                  @include('dialog.search')

                  @include('dialog.newdonation')
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                  <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"> </th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Donor Name</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Donor Mob No.</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Donor Address</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Donor Email Address</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Program</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Amount</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Donation For</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mode Of Payment</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                          <th class="text-secondary opacity-7">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                   

                        @foreach ( $donations as $key => $value)
                            <tr>
                                <td>
                                
                                            <h6 class="mb-0 text-sm" style="text-align: center">{{ 
                                          
$key + 1
                                              }}.</h6>
                                   
                                </td>

                                <td>
                                    <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">{{ $value->first_name}} {{$value->last_name }}</h6>
                                        {{-- <p class="text-xs text-secondary mb-0"> $ {{ $selectedProgram->name }}</p> --}}
                                    </div>
                                    </div>
                                </td>

                                <td>
                                  {{-- <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center"> --}}
                                  <p class="text-xs text-secondary mb-0" style="text-align: center">{{ $value->phone }}</p>

                                    {{-- </div>
                                    </div> --}}
                                </td>

                                <td>
                                  <p class="text-xs font-weight-bold mb-0">{{ $value->address}}</p>
                              </td>

                                <td>
                                  <p class="text-xs font-weight-bold mb-0">{{ $value->email}}</p>
                              </td>
                                
                                    <td>
    <p class="text-xs font-weight-bold mb-0">
      {{ $value->name}}
    
    </p>
                                    </td>

                                    <td class="align-middle text-center text-sm">
                                      <span class="badge badge-sm bg-gradient-success">$ {{ number_format($value->donation_amount, 2) }}</span>
                                  </td>

                                <td class="align-middle text-center text-sm">
                                    <span class="badge badge-sm bg-gradient-success">{{ $value->donation_for }}</span>
                                </td>

                              

                                <td class="align-middle text-center text-sm">
                                  <span class="badge badge-sm bg-gradient-success">{{ $value->mode_of_payment }}</span>
                              </td>

                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">{{ Carbon\Carbon::parse($value->created_at)->toDateString() }}</span>
                                </td>

                                <td class="align-middle">
                                    {{-- <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                    Edit
                                    </a> --}}
                                    <a href = "/donations/{{ $value->id }}" target = "_blank" class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1" aria-hidden="true"></i> Print</a>
                                </td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      @include('layouts.footer')
    </div>
  </main>

  @include('layouts.scripts')
</body>

</html>
@endsection
