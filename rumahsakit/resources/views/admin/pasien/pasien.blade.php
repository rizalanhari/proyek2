@extends('admin/layout/layout')
@section('title','Daftar Pasien')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Data Pasien</h4>
                        <p class="card-category"></p>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($pasien as $psn)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $psn->nama_depan }} {{ $psn->nama_belakang }}</td>
                                    <td>{{ $psn->alamat }}</td>
                                    <td>
                                        <a href="/admin/pasien/{{$psn->id_pasien}}" class="badge badge-success float-right mr-2">Edit</a>
                                        <a href="" class="badge badge-danger float-right mr-1">Hapus</a>
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
</div>
@endsection