@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col col-lg-6 col-md-4">
      <div class="card card-primary card-outline">
        <div class="card-body box-profile">
          <div class="text-center">
            <img src="{{ asset('img/profil.png') }}" alt="profil" class="profile-user-img img-responsive img-circle">
          </div>
          <hr>
          <strong>
            Nama :
            <input type="text" name="name" id="name" value="{{ $user->name }}"class="form-control">
          </strong>
          <p class="text-muted">
          </p>
          <hr>
          <strong>
            <i class="fas fa-envelope mr-2"></i>
            Email :
            <input type="text" name="email" id="email" value="{{ $user->email }}"class="form-control">
          </strong>
          <p class="text-muted">
          </p>
          <hr>
          <strong>
            <i class="fas fa-phone mr-2"></i>
            No Telepon :
            <input type="text" name="phone" id="phone" value="{{ $user->phone }}" class="form-control">
          </strong>
          <p class="text-muted">

          </p>
          <hr>
          <a href="{{ URL::to('admin/setting') }}" class="btn btn-primary btn-block">Setting</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
