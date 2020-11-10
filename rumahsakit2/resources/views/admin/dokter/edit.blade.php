<?php

use Illuminate\Contracts\Session\Session;
?>
@extends('admin/layout/index')
@section('title','Edit Dokter')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Edit Dokter</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="POST" action="/admin/dokter/store">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_depan">Nama Depan</label>
                                <input type="text" class="form-control" id="nama_depan" placeholder="Masukan Nama Depan" name="nama_depan" value="<?= session('dokter.nama_depan') ?>">
                            </div>
                            <div class="form-group">
                                <label for="nama_belakang">Nama Belakang</label>
                                <input type="text" class="form-control" id="nama_belakang" placeholder="Masukan Nama Belakang" name="nama_belakang" value="<?= session('dokter.nama_belakang') ?>">
                            </div>
                            <div class="form-group">
                                <label for="usia">Usia</label>
                                <input type="number" class="form-control" id="usia" placeholder="Masukan Usia" name="usia" value="<?= session('dokter.usia') ?>">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat" name="alamat" value="<?= session('dokter.alamat') ?>">
                            </div>
                            <div class="form-group">
                                <label for="no_telepon">No Telp</label>
                                <input type="tel" class="form-control" id="no_telepon" placeholder="Masukan No Telp" name="no_telepon" value="<?= session('dokter.no_telepon') ?>">
                            </div>
                            <div class="form-group">
                                <label for="tarif">Tarif</label>
                                <input type="number" class="form-control" id="tarif" placeholder="Masukan Harga Tarif" name="tarif" value="<?= session('dokter.tarif') ?>">
                            </div>
                            <div class="form-group">
                                <label>Spesialis</label>
                                <select class="form-control" name="spesialis_id_spesialis">
                                    @foreach($spesialis as $spl)
                                    @if(($spl->id_spesialis)==( session('dokter.spesialis_id_spesialis') ))
                                    <option value="{{ $spl->id_spesialis }}" selected>{{ $spl->nama_spesialis }}</option>
                                    @else
                                    <option value="{{ $spl->id_spesialis }}">{{ $spl->nama_spesialis }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Poli</label>
                                <select class="form-control" name="poli_id_poli">
                                    @foreach($poli as $pol)
                                    @if(($pol->id_poli)==( session('dokter.poli_id_poli') ))
                                    <option value="{{ $pol->id_poli }}" selected>{{ $pol->nama_poli }}</option>
                                    @else
                                    <option value="{{ $pol->id_poli }}">{{ $pol->nama_poli }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <input type="hidden" class="form-control" id="user_id_user" name="user_id_user" value="">
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