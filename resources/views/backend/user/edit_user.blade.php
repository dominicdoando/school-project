@extends('layouts.master_admin')
@section('master_admin')
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title mr-3">Edit User</h3>  
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <form action="{{ route('user.update', $editData->id) }}" method="post">
      @csrf
      <div class="form-group">
        <label for="usr">Name:</label>
        <input type="text" name="name" class="form-control" id="usr" value="{{ $editData->name }}">
      </div>
      <div class="form-group">
        <label for="usr">Email:</label>
        <input type="mail" name="email" class="form-control" id="usr" value="{{ $editData->email }}">
      </div>
      <div class="form-group">
        <label for="sel1">Select Role:</label>
        <select name="usertype" class="form-control" id="sel1">
          <option value="Admin" {{ ($editData->usertype === "Admin") ? "selected" : "" }}>Admin</option>
          <option value="User" {{ ($editData->usertype === "User") ? "selected" : "" }}>User</option>
        </select>
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-info" value="Update" id="pwd">
      </div>
    </form>
 
  </div>
  <!-- /.box-body -->
  </div>
@endsection