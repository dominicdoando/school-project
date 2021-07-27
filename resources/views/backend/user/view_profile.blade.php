@extends('layouts.master_admin')
@section('master_admin')
  <div class="box">
    <div class="box box-inverse bg-img" data-overlay="2">
      <div class="px-20 pt-20">
        <p class="mb-0">User Name: {{ $user->name }}</p>
        <p><small>User type: {{ $user->usertype }}</small></p>
        <p><small>User email: {{ $user->email }}</small></p>
        <a href="{{ route('profile.edit') }}" class="btn btn-success">Edit Profile</a>
      </div>

      <div class="box-body text-center pb-50">
      <a href="#">
        <img class="avatar avatar-xxl avatar-bordered" src="{{ (!empty($user->image)) ? url('upload/user_images/'.$user->image) : url('upload/no_image.jpg') }}" alt="">
      </a>
      <h4 class="mt-2 mb-0"><a class="hover-primary text-white" href="#">Roben Parkar</a></h4>
      <span><i class="fa fa-map-marker w-20"></i> Miami</span>
      </div>

      <ul class="box-body flexbox flex-justified text-center" data-overlay="4">
      <li>
        <span class="opacity-60">Mobile Number</span><br>
        <span class="font-size-20">{{ $user->mobile }}</span>
      </li>
      <li>
        <span class="opacity-60">Address</span><br>
        <span class="font-size-20">{{ $user->address }}</span>
      </li>
      <li>
        <span class="opacity-60">Gender</span><br>
        <span class="font-size-20">{{ $user->gender }}</span>
      </li>
      </ul>
    </div>
  </div>
@endsection
