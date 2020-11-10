@extends('admin/layout/index')
@section('title','Table Rekammedis')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DataTable Rekammedis</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <th>No</th>
                                <th>Nama Pasien</th>
                                <th>Nama Dokter</th>
                                <th>Diagnosa</th>
                            </thead>
                            <tbody>
                                @foreach ($rekammedis as $rmd)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $rmd->pasien_depan }} {{ $rmd->pasien_belakang }}</td>
                                    <td>{{ $rmd->dokter_depan }} {{ $rmd->dokter_belakang }}</td>
                                    <td>{{ $rmd->diagnosa }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <th>No</th>
                                <th>Nama Pasien</th>
                                <th>Nama Dokter</th>
                                <th>Diagnosa</th>
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