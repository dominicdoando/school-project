@extends('layouts.master_admin')
@section('master_admin')
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title mr-3">User List</h3>
    <a style="float:right" href="{{ route('user.add') }}" class="btn btn-warning mb-5">Add  User</a>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <div class="table-responsive">
      <div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
      <thead>
        <tr role="row">
          <th class="sorting_asc">SL</th>
          <th class="sorting">Role</th>
          <th class="sorting">Name</th>
          <th class="sorting">Email</th>
          <th class="sorting">Action</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($allData as $key => $user)
        <tr role="row" class="odd">
          <td class="sorting_1">{{ $key+1 }}</td>
          <td>{{ $user->usertype }}</td>
          <td>{{ $user->name }}</td>
          <td>
            {{ $user->email }}
          </td>
          <td><a href="{{ route('user.edit', $user->id) }}" class="btn btn-info">Edit</a>
            <a href="{{ route('user.delete', $user->id) }}" onclick="return confirm('Are you sure you want to delete')" class="btn btn-danger">Delete</a></td>
        </tr>
        @endforeach
        
      </tbody>
      </table>
    </div></div>
    <div class="row">
      <div class="col-sm-12 col-md-5">
        <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
      </div>
      <div class="col-sm-12 col-md-7">
        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
          <ul class="pagination">
            <li class="paginate_button page-item previous disabled" id="example1_previous">
              <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
            </li>
            <li class="paginate_button page-item active">
              <a href="#" class="page-link">1</a>
            </li>
              <li class="paginate_button page-item next"><a href="#"  class="page-link">Next</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
  <!-- /.box-body -->
  </div>
@endsection
