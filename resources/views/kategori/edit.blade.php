@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col col-lg-6 col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form Edit Kategori</h3>
          <div class="card-tools">
            <a href="{{ route('kategori.index') }}" class="btn btn-sm btn-danger">
              Tutup
            </a>
          </div>
        </div>
        <div class="card-body">
          <form action="{{ route('kategori.update', $itemkategori->id) }}" method="post">
          {{ method_field('patch') }}
            @csrf
          <div class="form-group">
              <label for="nama_kategori">Nama Kategori</label>
              <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" value="{{ $itemkategori->nama_kategori }}">
            </div>
            <div class="form-group">
              <label for="slug_kategori">Slug Kategori</label>
              <input type="text" name="slug_kategori" id="slug_kategori" class="form-control" value="{{ $itemkategori->slug_kategori }}">
            </div>
            <div class="form-group">
              <label for="deskripsi">Deskripsi</label>
              <input type="textarea" name="deskripsi" id="deskripsi" cols="30" rows="5" class="form-control" value="{{ $itemkategori->deskripsi_kategori }}"></input>
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
