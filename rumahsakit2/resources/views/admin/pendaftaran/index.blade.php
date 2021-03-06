@extends('admin/layout/index')
@section('title','Table Pendaftaran')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DataTable Pendaftaran</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <th>No</th>
                                <th>Nama Pasien</th>
                                <th>Nama Dokter</th>
                                <th>Poli</th>
                            </thead>
                            <tbody>
                                @foreach ($pendaftaran as $pdr)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $pdr->pasien_depan }} {{ $pdr->pasien_belakang }}</td>
                                    <td>{{ $pdr->dokter_depan }} {{ $pdr->dokter_belakang }}</td>
                                    <td>{{ $pdr->nama_poli }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pasien</th>
                                    <th>Nama Dokter</th>
                                    <th>Poli</th>
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