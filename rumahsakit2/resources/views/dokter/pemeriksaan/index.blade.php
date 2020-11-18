@extends('dokter/layout/index')
@section('title','Table Pemeriksaan')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Antrian Pasien</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <th>No</th>
                                <th>Nama</th>
                            </thead>
                            <tbody>
                                @foreach($pendaftaran as $pnr)
                                @if($pnr->status_id_status==1)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $pnr->nama_depan }} {{ $pnr->nama_belakang }}</td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
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

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Pasien Sudah Diperiksa</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example3" class="table table-bordered table-striped">
                            <thead>
                                <th>No</th>
                                <th>Nama</th>
                            </thead>
                            <tbody>
                                @foreach($pendaftaran as $pnr)
                                @if($pnr->status_id_status==2)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $pnr->nama_depan }} {{ $pnr->nama_belakang }}</td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
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

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Pasien Hari Ini</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example4" class="table table-bordered table-striped">
                            <thead>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach($pendaftaran as $pnr)
                                @if($pnr->status_id_status==1)
                                @if($pnr->tanggal_pendaftaran==$date)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $pnr->nama_depan }} {{ $pnr->nama_belakang }}</td>
                                    <td>
                                        <a href="/dokter/periksa/{{ $pnr->id_pendaftaran}}" class="btn btn-primary">Periksa</a>
                                    </td>
                                </tr>
                                @endif
                                @endif
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Action</th>
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