@extends('dokter/layout/layout')
@section('title','Daftar Dokter')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Daftar Antrian Pasien</h4>
                        <p class="card-category"></p>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Action</th>
                            </thead>
                            <!-- <tbody>
                                
                            </tbody> -->
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Pasien Sudah Diperiksa</h4>
                        <p class="card-category"></p>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Action</th>
                            </thead>
                            <!-- <tbody>
                                
                            </tbody> -->
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Pasien Hari Ini</h4>
                        <p class="card-category"></p>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Action</th>
                            </thead>
                            <!-- <tbody>
                                
                            </tbody> -->
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection