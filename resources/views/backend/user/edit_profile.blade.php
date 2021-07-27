@extends('layouts.master_admin')
@section('master_admin')
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title mr-3">Manage User</h3>  
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <form action="{{ route('profile.storage')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="usr">Name:</label>
        <input type="text" name="name" class="form-control" value="{{ $editData->name }}">
      </div>
      <div class="form-group">
        <label for="usr">Email:</label>
        <input type="mail" name="email" class="form-control" value="{{ $editData->email }}">
      </div>

      <div class="form-group">
        <label for="usr">User Mobile:</label>
        <input type="text" name="mobile" class="form-control" value="{{ $editData->mobile }}">
      </div>
      <div class="form-group">
        <label for="usr">User Address:</label>
        <input type="text" name="address" class="form-control" value="{{ $editData->address }}">
      </div>
      <div class="form-group">
        <label for="usr">User gender:</label>
        <select name="gender" class="form-control" id="sel1">
          <option value="" selected disabled>Select Gender</option>
          <option value="Male" {{ ($editData->gender === "Male") ? "selected" : "" }}>Male</option>
          <option value="Female" {{ ($editData->gender === "Female") ? "selected" : "" }}>Female</option>
        </select>
      </div>
      <div class="form-group">
        <label for="usr2">Profile Image:</label>
        <input type="file" name="image" class="form-control mb-2" id="image">
        <img id="showImage" src="{{ (!empty($user->image)) ? url('upload/user_images/'.$user->image) : url('upload/no_image.jpg') }}" alt="" style="width:100px;height:100px;border:solid 1px #000;">
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