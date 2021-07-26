@extends('layouts.master_admin')
@section('master_admin')
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title mr-3">Add User</h3>  
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <form action="{{ route('user.storage') }}" method="post">
      @csrf
      <div class="form-group">
        <label for="usr">Name:</label>
        <input type="text" name="name" class="form-control" id="usr">
      </div>
      <div class="form-group">
        <label for="usr">Email:</label>
        <input type="mail" name="email" class="form-control" id="usr">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd">
      </div>
      <div class="form-group">
        <label for="sel1">Select Role:</label>
        <select name="usertype" class="form-control" id="sel1">
          <option value="Admin">Admin</option>
          <option value="User">User</option>
        </select>
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-info" id="pwd">
      </div>
    </form>
 
  </div>
  <!-- /.box-body -->
  </div>
@endsection