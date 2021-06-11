@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-6 col-lg-3">
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>Order Baru</h3>
          {{ $no = 0 }}
          <p></p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="/admin/transaksi" class="small-box-footer">Info Lengkap <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-6 col-lg-3">
      <div class="small-box bg-info">
        <div class="inner">
          <h3>Produk</h3>

          <p></p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="/admin/produk" class="small-box-footer">Info Lengkap <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-6 col-lg-3">
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>Member</h3>

          <p></p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="/admin/customer" class="small-box-footer">Info Lengkap <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-6 col-lg-3">
      <div class="small-box bg-success">
        <div class="inner">
          <h3>Transaksi</h3>

          <p></p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="/admin/transaksi" class="small-box-footer">Info Lengkap <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
  </div>

  <!-- table produk baru -->
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Produk Baru</h4>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Qty</th>
                <th>Harga</th>
              </tr>
            </thead>
            <tbody>
            @foreach($itemproduk as $produk)
              <tr>
              <td>
                {{ ++$no }}
                  </td>
              <td>
                  {{ $produk->kode_produk }}
                  </td>
              <td>
                  {{ $produk->nama_produk }}
                  </td>
              <td>
                  {{ $produk->kategori->nama_kategori }}
                  </td>
              <td>
                  {{ $produk->qty }}
                  </td>
              <td>
                  {{ number_format($produk->harga, 2) }}
                  </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
