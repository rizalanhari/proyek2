@extends('admin/layout/layout')
@section('title','Daftar Rekammedis')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Data Rekammedis</h4>
                        <p class="card-category"></p>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>No</th>
                                <th>Nama Pasien</th>
                                <th>Nama Dokter</th>
                                <th>Diagnosa</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($rekammedis as $rmd)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $rmd->pasien_depan }} {{ $rmd->pasien_belakang }}</td>
                                    <td>{{ $rmd->dokter_depan }} {{ $rmd->dokter_belakang }}</td>
                                    <td>{{ $rmd->diagnosa }}</td>
                                    <td>
                                        <a href="/admin/rekammedis/{{$rmd->id_rekammedis}}" class="badge badge-success float-right mr-2">Edit</a>
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