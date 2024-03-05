@extends('admin.layouts.wrapper')
@section('content')

    <section class="content">
    <div class="container-fluid">
        <form action="{{ route('barang.store') }}" method="POST">
            @csrf
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                  <!-- general form elements -->
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Quick Example</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                      <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputNama1">Nama Produk</label>
                          <input type="text" name="nama_produk" class="form-control" id="exampleInputNama1" placeholder="Nama Produk">
                        @error('nama')
                            <small>{{ $message }}</small>
                        @enderror
                        </div>
                        <div class="form-group">
                          <label for="exampleInputHarga1">Harga</label>
                          <input type="text" name="harga"  class="form-control" id="exampleInputHarga1" placeholder="Harga Produk">
                        @error('harga')
                            <small>{{ $message }}</small>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputStok1">Stok</label>
                            <input type="text" name="stok" class="form-control" id="exampleInputStok1" placeholder="Jumlah Produk">
                        @error('stok')
                            <small>{{ $message }}</small>
                        @enderror
                        </div>
                      </div>
                      <!-- /.card-body -->

                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                  </div>
                  <!-- /.card -->
                <!--/.col (left) -->
              </div>
        </form>

      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

@endsection
