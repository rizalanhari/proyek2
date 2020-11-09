@extends('admin/layout/index')
@section('title','dashboard')
@section('content')
<!-- /.content-header -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{$pendaftaran}}</h3>

                        <p>Pendaftaran</p>
                    </div>
                    <div class="icon">
                        <i class=" fas fa-stethoscope"></i>
                    </div>
                    <a href="{{ url('/admin/pendaftaran') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{$dokter}}<sup style="font-size: 20px">%</sup></h3>

                        <p>Dokter</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <a href="{{ url('/admin/dokter') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{$poli}}</h3>

                        <p>Poli</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-medkit"></i>
                    </div>
                    <a href="{{ url('/admin/poli') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{$pasien}}</h3>

                        <p>Pasien</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-wheelchair"></i>
                    </div>
                    <a href="{{ url('/admin/pasien') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection