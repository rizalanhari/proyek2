<?php

use Illuminate\Contracts\Session\Session;
?>
@extends('admin/layout/index')
@section('title','Edit Poli')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Edit Poli</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="/admin/poli/update/{{$poli->id_poli}}" enctype="multipart/form-data">
                        @method('PATCH')
                        {{csrf_field()}}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_depan">Nama Poli</label>
                                <input type="text" class="form-control" id="nama_poli" placeholder="Masukan Nama Depan" name="nama_poli" value="{{$poli->nama_poli}}">
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection