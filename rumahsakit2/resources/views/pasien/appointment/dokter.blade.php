@extends('pasien/layout/index')
@section('title','Appointmet')
@section('content')
<section id="appointment" data-stellar-background-ratio="3">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <img src="{{ asset('assets2/images/appointment-image.jpg') }}" class="img-responsive" alt="">
            </div>

            <div class="col-md-6 col-sm-6">
                <!-- CONTACT FORM HERE -->
                <form id="appointment-form" role="form" method="post" action="/pasien/appointment/store">
                    @csrf

                    <!-- SECTION TITLE -->
                    <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                        <h2>Make an appointment</h2>
                    </div>

                    <div class="wow fadeInUp" data-wow-delay="0.8s">
                        <div class="col-md-6 col-sm-6">
                            <label for="name">Name</label>
                            @foreach($pasien as $psn)
                            <input type="text" class="form-control" id="name" value="{{ $psn->nama_depan }} {{ $psn->nama_belakang }}">
                            @endforeach
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <label for="date">Select Date</label>
                            <input type="date" name="tanggal_pendaftaran" class="form-control">
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <label for="select">Select Dokter</label>
                            <select class="form-control" name="dokter_id_dokter">
                                @foreach($dokter as $dtr)
                                @if(($dtr->poli_id_poli)==(session('poli.id_poli')))
                                <option value="{{ $dtr->id_dokter }}">{{ $dtr->nama_depan }} {{ $dtr->nama_belakang }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <button type="submit" class="form-control" id="cf-submit" name="submit">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
@endsection