@extends('pasien/layout/index')
@section('title','Pilih Poli')
@section('content')
<section id="team" data-stellar-background-ratio="1">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <div class="about-info">
                    <h2 class="wow fadeInUp" data-wow-delay="0.1s">Pilih Poli</h2>
                </div>
            </div>

            <div class="clearfix"></div>
            @foreach($poli as $pol)
            <div class="col-md-4 col-sm-6">
                <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-info">
                        <h3><a href="/pasien/poli/select/{{$pol->id_poli}}">{{ $pol->nama_poli }}</a></h3>
                        @foreach($dokter as $dtr)
                        @if(($dtr->poli_id_poli) == ($pol->id_poli))
                        <p>{{ $dtr->nama_depan }} {{ $dtr->nama_belakang }}</p>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
@endsection