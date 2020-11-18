@extends('dokter/layout/index')
@section('title','Table Resep')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Table Resep</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <th>No</th>
                                <th>Nama Pasien</th>
                                <th>Tanggal</th>
                                <th>Resep</th>
                            </thead>
                            <tbody>
                                @foreach ($resep as $rsp)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $rsp->nama_depan }} {{ $rsp->nama_belakang }}</td>
                                    <td>{{ $rsp->tanggal_resep }}</td>
                                    <td>{{ $rsp->resep }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pasien</th>
                                    <th>Tanggal</th>
                                    <th>Resep</th>
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