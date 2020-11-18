@extends('dokter/layout/index')
@section('title','Table Rekammedis')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Table Rekammedis</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <th>No</th>
                                <th>Nama Pasien</th>
                                <th>Tanggal</th>
                                <th>Diagnosa</th>
                                <th>Keluhan</th>
                            </thead>
                            <tbody>
                                @foreach ($rekammedis as $rmd)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $rmd->nama_depan }} {{ $rmd->nama_belakang }}</td>
                                    <td>{{ $rmd->tanggal_rekam }}</td>
                                    <td>{{ $rmd->diagnosa }}</td>
                                    <td>{{ $rmd->keluhan }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pasien</th>
                                    <th>Tanggal</th>
                                    <th>Diagnosa</th>
                                    <th>Keluhan</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>



<!-- /.content -->
@endsection