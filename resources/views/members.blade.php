@extends('layouts.app')

@section('content')

<body class="g-sidenav-show  bg-gray-100">
    @include('layouts.sidebar')
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">

    @include('layouts.mainnav')

    <div class="container-fluid py-4">
      <div class="row my-4">
        <div class="row">
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header pb-0">
                  <h6>Members</h6>
                  <div class="row">
                        {{-- <div class="col-6">
                            <button data-bs-toggle="modal" data-bs-target="#myModalSearch" type="button" class="btn btn-primary"> <i class="fas fa-search text-lg opacity-10" aria-hidden="true"></i></button>
                        </div> --}}
                        <div class="col-12">
                            <button type="button" style="float: right" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                Add
                            </button>
                        </div>
                  </div>
                  {{-- @include('dialog.search') --}}
                  @include('dialog.members')
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                  <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                          {{-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">MemberID</th> --}}
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name </th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email </th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone </th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Address</th>
                          <th class="text-secondary opacity-7">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ( $members as $member)
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">{{ $member->id }}</h6>
                                        </div>
                                    </div>
                                </td>

                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">{{ Carbon\Carbon::parse($member->created_at)->toDateString() }}</span>
                                </td>

                                <td>
                                    <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">{{ $member->first_name }} {{ $member->last_name }}</h6>
                                        {{-- <p class="text-xs text-secondary mb-0">{{ $member->email }}</p> --}}
                                    </div>
                                    </div>
                                </td>


<td>
  <p class="text-xs text-secondary mb-0">{{ $member->email }}</p>

</td>





                                <td>
                                  <p class="text-xs text-secondary mb-0">{{ $member->phone }}</p>
                                </td>

<td>
  <p class="text-xs font-weight-bold mb-0">{{ $member->address }}</p>

</td>



                                <td class="align-middle">
                                    {{-- <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                    Edit
                                    </a> --}}
                                    {{-- <a href = "/members/{{ $member->id }}" target = "_blank" class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1" aria-hidden="true"></i> Print</a> --}}
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
