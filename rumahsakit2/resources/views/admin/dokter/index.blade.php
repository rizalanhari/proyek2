@extends('admin/layout/index')
@section('title','Table Dokter')
@section('content')
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
                        <h3 class="card-title">DataTable Dokter</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
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
                                        <a href="/admin/dokter/edit/{{$dtr->id_dokter}}" class="btn btn-primary">Edit</a>
                                        <form action="/admin/dokter/del/{{$dtr->id_dokter}}" method="POST" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Spesialis</th>
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