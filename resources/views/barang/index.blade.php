@extends('admin.layouts.wrapper')
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <a href="{{ route('barang.create') }}" class="btn btn-success">Tambah Barang</a>

              <div class="input-group-append">
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($barangs as $barang )
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $barang->nama_produk }}</td>
                <td>{{ $barang->harga }}</td>
                <td>{{ $barang->stok }}</td>
                <td>
                    <a href="{{ route('barang.edit', $barang->id) }}" class="btn btn-primary"><i class="fas fa-pen"></i>Edit</a>

                    <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Hapus</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
@endsection
