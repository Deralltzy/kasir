@extends('admin.layouts.wrapper')
@section('content')
<section class="content">
  <div class="container-fluid">
    {{-- memanggil route update --}}
    <form action="{{ route('barang.update') }}" method="POST">
      @csrf
       <input type="hidden" name="id" value="{{ $barang->id }}">
         <div class="row">
            <div class="col-md-6">
              <div class="card card-primary">
               <div class="card-header">
                <h3 class="card-title">Form Ubah Data</h3>
                 </div>
                  <div class="card-body">
                   <div class="form-group">
                        <label for="exampleInputNama1">Nama Produk</label>
                        <input type="text" value="{{ $barang->nama_produk }}" name="nama_produk" class="form-control" id="exampleInputNama1" placeholder="Nama Produk">
                         @error('nama')
                        <small>{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputHarga1">Harga</label>
                        <input type="text" value="{{ $barang->harga }}" name="harga"  class="form-control" id="exampleInputHarga1" placeholder="Harga Produk">
                        @error('harga')
                        <small>{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputStok1">Stok</label>
                        <input type="text" value="{{ $barang->stok }}" name="stok" class="form-control" id="exampleInputStok1" placeholder="Jumlah Produk">
                        @error('stok')
                        <small>{{ $message }}</small>
                        @enderror
                    </div>
                    </div>
                    <div class="card-footer">
                        {{-- fitur kirim ubah data --}}
                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </form>
</div>
</section>
@endsection
