@extends('pasien/layout/index')
@section('title','Home Rumahsakit')
@section('content')


<!-- HOME -->

@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif

<section id="home" class="slider" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">

            <div class="owl-carousel owl-theme">
                <div class="item item-first">
                    <div class="caption">
                        <div class="col-md-offset-1 col-md-10">
                            <h3>Let's make your life happier</h3>
                            <h1>Healthy Living</h1>
                        </div>
                    </div>
                </div>

                <div class="item item-second">
                    <div class="caption">
                        <div class="col-md-offset-1 col-md-10">
                            <h3>Aenean luctus lobortis tellus</h3>
                            <h1>New Lifestyle</h1>
                        </div>
                    </div>
                </div>

                <div class="item item-third">
                    <div class="caption">
                        <div class="col-md-offset-1 col-md-10">
                            <h3>Pellentesque nec libero nisi</h3>
                            <h1>Your Health Benefits</h1>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ABOUT -->
<section id="about">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <div class="about-info">
                    <h2 class="wow fadeInUp" data-wow-delay="0.6s">Welcome to Your <i class="fa fa-h-square"></i>ealth Center</h2>
                    <div class="wow fadeInUp" data-wow-delay="0.8s">
                        <p>Memberi pelayanan kesehatan secara professional, efektif dan efisien</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- TEAM -->
<section id="team" data-stellar-background-ratio="1">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <div class="about-info">
                    <h2 class="wow fadeInUp" data-wow-delay="0.1s">Our Doctors</h2>
                </div>
            </div>

            <div class="clearfix"></div>
            @foreach($doktertop3 as $dtr)
            <div class="col-md-4 col-sm-6">
                <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                    <img src="{{ asset('assets2/images/team-image1.jpg') }}" class="img-responsive" alt="">

                    <div class="team-info">
                        <h3>{{ $dtr->nama_depan }} {{ $dtr->nama_belakang }}</h3>
                        @foreach($spesialis as $spl)
                        @if(($spl->id_spesialis) == ($dtr->spesialis_id_spesialis))
                        <p>{{ $spl->nama_spesialis }}</p>
                        @endif
                        @endforeach
                        <div class="team-contact-info">
                            <p><i class="fa fa-phone"></i>{{ $dtr->no_telepon }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>


<!-- GOOGLE MAP -->
<section id="google-map">
    <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.2286466147234!2d112.23428711477656!3d-7.550027994554956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78401dbdb10f85%3A0xbb12917f9da72ff2!2sRumah%20Sakit%20Umum%20Daerah%20Kabupaten%20Jombang!5e0!3m2!1sid!2sid!4v1605071882599!5m2!1sid!2sid" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>
@endsection