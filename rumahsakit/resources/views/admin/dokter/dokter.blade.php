@extends('admin/layout/layout')
@section('title','Daftar Dokter')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Data Dokter</h4>
                        <p class="card-category"></p>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Spesialis</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($dokter as $dtr)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $dtr->nama_depan }} {{ $dtr->nama_belakang }}</td>
                                    <td>{{ $dtr->nama_spesialis }}</td>
                                    <td>
                                        <a href="/admin/dokter/{{$dtr->id_dokter}}" class="badge badge-success float-right mr-2">Edit</a>
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