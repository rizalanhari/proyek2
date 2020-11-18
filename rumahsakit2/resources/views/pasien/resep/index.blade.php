@extends('pasien/layout/index')
@section('title','Data Resep')
@section('content')
<section id="team" data-stellar-background-ratio="1">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <div class="about-info">
                    <h2 class="wow fadeInUp" data-wow-delay="0.1s">Data Resep</h2>
                </div>
            </div>

            <div class="clearfix"></div>
            @foreach($resep as $rsp)
            <div class="col-md-4 col-sm-6">
                <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-info">
                        <h3>{{ $rsp->tanggal_resep }}</h3>
                        <p>{{ $rsp->resep }}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
@endsection