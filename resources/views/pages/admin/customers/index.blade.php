@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Customers</h1>
  </div>
  <div class="row">
    <div class="col-lg">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-responsive-sm" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>User ID</th>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
              </tr>
            </thead>
            <tbody>
            @forelse ($datas as $index => $item)
              <tr>
                <td>{{ $index +1 }}</td>
                <td> {{ $item->userid }} </td>
                <td> {{ $item->name }} </td>
                <td> {{ $item->username}} </td>
                <td> {{ $item->email}} </td>
              </tr>
              @empty
                  <tr>
                    <td colspan="7" class="text-center">
                      Data Kosong
                    </td>
                  </tr>
            @endforelse
            </tbody>
          </table>
        </div>
    </div>
    </div>
    
  </div>


</div>

@endsection
