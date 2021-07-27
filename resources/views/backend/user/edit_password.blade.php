@extends('layouts.master_admin')
@section('master_admin')
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title mr-3">Change Password</h3>  
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <form action="{{ route('password.update')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="usr">Old Password:</label>
        <input type="password"  id="current_password" name="oldpassword" class="form-control" value="">
        @error('oldpassword')
          <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="form-group">
        <label for="usr">New Password:</label>
        <input type="password" id="password" name="password" class="form-control" value="">
        @error('password')
        <span class="text-danger">{{ $message }}</span>
      @enderror
      </div>

      <div class="form-group">
        <label for="usr">Confirm Password:</label>
        <input type="password" id="password_confirmation" name="password_confirmation " class="form-control" value="">
        @error('password_confirmation')
        <span class="text-danger">{{ $message }}</span>
      @enderror
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-info" value="Update" id="pwd">
      </div>
    </form>
 
  </div>
  <!-- /.box-body -->
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  $(document).ready(function(){
    $("#image").change(function(e){
      var reader = new FileReader();
      reader.onload = function(e){
        $("#showImage").attr("src", e.target.result);
      }
      reader.readAsDataURL(e.target.files['0']);
    });
  });
</script>
@endsection