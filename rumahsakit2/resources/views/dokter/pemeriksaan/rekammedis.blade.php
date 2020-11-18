<?php

use Illuminate\Contracts\Session\Session;
?>
@extends('dokter/layout/index')
@section('title','Add Rekammedis')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form rekammedis</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="POST" action="/dokter/rekammedis/store">
                        @csrf
                        @foreach($pasien as $psn)
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_depan">Nama Depan</label>
                                <input type="text" class="form-control" id="nama_depan" placeholder="Masukan Nama Depan" name="nama_depan" value="{{$psn->nama_depan}}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="nama_belakang">Nama Belakang</label>
                                <input type="text" class="form-control" id="nama_belakang" placeholder="Masukan Nama Belakang" name="nama_belakang" value="{{$psn->nama_belakang}}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="keluhan">Keluhan</label>
                                <input type="text" class="form-control" id="keluhan" placeholder="Masukan Keluhan" name="keluhan">
                            </div>
                            <div class="form-group">
                                <label for="diagnosa">Diagnosa</label>
                                <input type="text" class="form-control" id="diagnosa" placeholder="Masukan Diagnosa" name="diagnosa">
                            </div>
                        </div>
                        @foreach($pendaftaran as $pdr)
                        <input type="hidden" class="form-control" id="id_pendaftaran" name="id_pendaftaran" value="{{$pdr->id_pendaftaran}}">
                        <input type="hidden" class="form-control" id="pasien_id_pasien" name="pasien_id_pasien" value="{{$pdr->pasien_id_pasien}}">
                        <input type="hidden" class="form-control" id="dokter_id_dokter" name="dokter_id_dokter" value="{{$pdr->dokter_id_dokter}}">
                        <!-- /.card-body -->
                        @endforeach

                        <div class="card-body">
                            <div class="form-group">
                                <label for="resep">Resep</label>
                                <textarea type="text" class="form-control" id="resep" placeholder="Masukan Resep" name="resep" rows="10" cols="30"></textarea>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        @endforeach
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection