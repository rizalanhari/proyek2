<?php

use Illuminate\Contracts\Session\Session;
?>
@extends('admin/layout/index')
@section('title','Add Spesialis')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Spesialis</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="POST" action="/admin/spesialis/store">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_depan">Nama Spesial</label>
                                <input type="text" class="form-control" id="nama_spesialis" placeholder="Masukan Nama Spesialis" name="nama_spesialis">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
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