@extends('admin/layout/layout')
@section('title','Daftar Pendaftaran')
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
                                <th>Nama Pasien</th>
                                <th>Nama Dokter</th>
                                <th>Poli</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($pendaftaran as $pdr)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $pdr->pasien_depan }} {{ $pdr->pasien_belakang }}</td>
                                    <td>{{ $pdr->dokter_depan }} {{ $pdr->dokter_belakang }}</td>
                                    <td>{{ $pdr->nama_poli }}</td>
                                    <td>
                                        <a href="/admin/pendaftaran/{{$pdr->id_pendaftaran}}" class="badge badge-success float-right mr-2">Edit</a>
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