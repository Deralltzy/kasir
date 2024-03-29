@extends('admin.layouts.wrapper')
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              {{-- untuk memanggil route tambah barang --}}
                <a href="{{ route('barang.create') }}" class="btn btn-success">Tambah Barang</a>
              <div class="input-group-append">
              </div>
            </div>
          </div>
        </div>
         {{-- untuk menampilkan nama-nama kolom dalam table --}}
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
                    {{-- untuk memanggil route edit/update barang --}}
                    <a href="{{ route('barang.edit', $barang->id) }}" class="btn btn-primary"><i class="fas fa-pen"></i>Edit</a>
                    {{-- untuk memanggil route hapus barang --}}
                    <a href="{{ route('barang.destroy', $barang->id) }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Hapus</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
