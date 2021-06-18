@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
@if ($errors->any())
 <div class="alert alert-danger">
 <strong>Whoops!</strong> There were some problems with your input.<br><br>
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
 @endif
  <div class="row">
    <div class="col col-lg-4 col-md-4">
      <div class="card card-primary card-outline">
        <div class="card-body box-profile">
          <div class="text-center">
          @if($user->foto != null)
          <img src="{{ asset('storage/'.$user->foto) }}" alt="profil" class="profile-user-img img-responsive img-circle">
          @else
            <img src="{{ asset('img/user1-128x128.jpg') }}" alt="profil" class="profile-user-img img-responsive img-circle">
          @endif
          </div>
          <hr>
          <form action="{{ route('updateprofil', $user->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
            <div class="form-group">
              <label for="name">Nama</label>
              <input type="text" name="name" id="name" value="{{ $user->name }}"class="form-control">
            </div>
            <div class="form-group">
              <label for="phone">No Telepon</label>
              <input type="text" name="phone" id="phone" value="{{ $user->phone }}" class="form-control">
            </div>
            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="email" name="email" id="email" value="{{ $user->email }}"class="form-control">
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input type="text" name="alamat" id="alamat" value="{{ $user->alamat }}"class="form-control">
            </div>
            <div class="form-group">
              <label for="foto">Photo</label>
              <input type="file" name="foto" value="{{ $user->foto }}" id="foto">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </form> 
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
