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
                      <h3 class="card-title">Form Tambah Data</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                      <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputNama1">Username</label>
                          <input type="text" name="username" class="form-control" id="exampleInputUsername1" placeholder="Username">
                        @error('username')
                            <small>{{ $message }}</small>
                        @enderror
                        </div>
                        <div class="form-group">
                          <label for="exampleInputHarga1">E-mail</label>
                          <input type="text" name="email"  class="form-control" id="exampleInputEmail1" placeholder="E-Mail">
                        @error('email')
                            <small>{{ $message }}</small>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputRole1">Role</label>
                            <input type="text" name="role" class="form-control" id="exampleInputRole1" placeholder="Password">
                        @error('role')
                            <small>{{ $message }}</small>
                        @enderror
                        </div>
                        </div>
                      <!-- /.card-body -->

                        <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                      </div>
                    </form>
                  </div>
              </div>
        </form>
    </div>
  </section>
@endsection
