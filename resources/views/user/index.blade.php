@extends('admin.layouts.wrapper')
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              {{-- untuk memanggil route tambah barang --}}
                <a href="{{ route('user.create') }}" class="btn btn-success">Tambah User</a>
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
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>
                    {{-- untuk memanggil route hapus user --}}
                    <a href="{{ route('user.destroy', $user->id) }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Hapus</a>
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
