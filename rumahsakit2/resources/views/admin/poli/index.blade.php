@extends('admin/layout/index')
@section('title','Table Poli')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DataTable Poli</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($poli as $pol)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $pol->nama_poli }}</td>
                                    <td>
                                        <a href="/admin/poli/{{$pol->id_poli}}" class="badge badge-success float-right mr-2">Edit</a>
                                        <a href="" class="badge badge-danger float-right mr-1">Hapus</a>
                                    </td>
                                </tr>
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