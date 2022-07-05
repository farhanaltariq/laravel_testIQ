@extends('layout.main')

@section('title', 'Home')

@section('content')
<div class="card-header">{{ __('Dashboard') }}</div>

<div class="card-body">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    {{ __('You are logged in!') }}
</div>
<!-- Intro
		================================================== -->
<section id="hero" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="herotext">
                    <p class="lead wow zoomIn" data-wow-duration="2s" data-wow-delay="0.5s">
                    <h2>BINA PISIKOLOGI <br> INDONESIA</h2>
                    <span class="lighter">Lembaga Pisikologi dan Jasa Pisikologi</span>
                    </p>

                    <p>
                        <a href="#service" class="btn btn-success" role="button">SELENGKAPNYA</a> &nbsp;
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About
		================================================== -->
<section id="about" class="parallax section" style="background-color : #8411cd;">
    <div class="wrapsection">
        <div class="parallax-overlay" style="background-color: #8411cd;"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Title -->
                    <div class="maintitle">
                        <h3 class="section-title"><strong>ABOUT <span class="lighter">US</span></strong></h3>
                    </div><br>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-box wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
                        <h3>Logo</h3>
                        <div class="text-left">
                            <p>
                                Logo Company
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6">
                    <div class="service-box wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
                        <h3>VISI</h3>
                        <div class="text-center">
                            <p>
                                Memiliki manfaat dan kemampuan yang optimal untuk membantu dalam mengatasi berbagai persoalan pisikologi baik pada tingkat individual, institusial atau kemasyarakatan
                            </p>
                        </div>
                        <br>
                        <h3>MISI</h3>
                        <div class="text-center">
                            <p>
                                Menerapkan hasil-hasil kajian dan penelitian dalam berbagai keheidupan manusia. Sosialisasi dan pemanfaatan ilmu psikologi. Pelayanan psikologi bagi perorangan, masyarakat dan lembagai
                                yang membutuhkan
                            </p>
                        </div>
                        <br>
                        <h3>KEGIATAN</h3>
                        <div class="text-left">
                            <p>
                                1. Menyelenggarakan sosialisasi pemanfaatan psikologi dalam berbagai bidang kehidupan manusia <br>
                                2. Menyelenggarakan pelatihan dalam meningkatan ketrampilan mengahadipi berbagai masalah psikologi bagi perorangan <br>
                                3. Menyelenggarakan layanan konsultasi psikologi bagi perorangan, masyarakat dan kelembagaan <br>
                                4. Menyelenggarakan layanan diagnosis/asesmen/tes psikologi bagi perorangan, masyarakat dan Lembaga/sekolah <br>
                                5. Menyelenggarakan penerbitan buku-buku psikologi <br>
                            </p>
                        </div>
                        <br>
                        <h3>PENGALAMAN</h3>
                        <div class="text-left">
                            <p>
                                1.Telah memberikan pelayanan/konsultasi psikologi terhadap berbagi perusahaan, untuk seleksi dan penempatan karyawan. <br>
                                2.Konsultasi perorangan dalam bidang pendidikan dan kesehatan mental. <br>
                                3.Melayani berbagai konsultasi/tes psikologi terhadap sekolah-sekolah khusus. <br>
                                4. Melayani konsultasi psikologi/tes psikologi dalam penjurusan untuk berbagai sekolah di Jawa dan luar jawa. <br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service
		================================================== -->
<section id="service" class="parallax section" style="background-image: url(http://themepush.com/demo/runcharity/assets/img/1.jpg);">
    <div class="wrapsection">
        <div class="parallax-overlay" style="background-color: #01b0d1;opacity:0.9;"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Title -->
                    <div class="maintitle">
                        <h3 class="section-title"><strong>Service</strong></h3>
                        <p class="lead">
                            Kami Disini Menyediakan Halaman Untuk Anda Berbagi Dan Bersedekah Kepada Orang Yang Membutuhkan
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-box wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
                        <img src="assets/img/main/g5.jpg" alt="">
                        <h3>Berbagi Bersama</h3>
                        <div class="text-left">
                            <p>
                                Acara Berbagi Bersama Untuk berbagi makanan kepada seapa saja yang mau
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-box wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s">
                        <span class="glyphicon glyphicon-stats"></span>
                        <h3>5.386 Participants</h3>
                        <p>
                            Nullam posuere, libero id interdum hendrerit, tortor nisl consectetur elit.
                        </p>
                        <button type="button" class="btn btn-info btn-md"><a href="#">Learn More</a></button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-box wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <span class="glyphicon glyphicon-tree-deciduous"></span>
                        <h3>195 Concerts</h3>
                        <p>
                            Nullam posuere, libero id interdum hendrerit, tortor nisl consectetur elit.
                        </p>
                        <button type="button" class="btn btn-info btn-md"><a href="#">Learn More</a></button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-box wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <span class="glyphicon glyphicon-heart"></span>
                        <h3>268 Sponsors</h3>
                        <p>
                            Nullam posuere, libero id interdum hendrerit, tortor nisl consectetur elit.
                        </p>
                        <button type="button" class="btn btn-info btn-md"><a href="#">Learn More</a></button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-box wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <span class="glyphicon glyphicon-usd"></span>
                        <h3>$5.647 Donated</h3>
                        <p>
                            Nullam posuere, libero id interdum hendrerit, tortor nisl consectetur elit.
                        </p>
                        <button type="button" class="btn btn-info btn-md"><a href="#">Learn More</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact
		================================================== -->
<section id="contactarea" class="parallax section" style="background-image: url(http://themepush.com/demo/runcharity/assets/img/map.png);">
    <div class="wrapsection">
        <div class="parallax-overlay" style="background-color: #1cbb9b;opacity:0.95;"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="maintitle">
                        <h3 class="section-title">Kritik & Saran</h3>
                        <p class="lead">
                            Jika Ada Saran Dan Pertanyaan Silakan Tulis Pada Form Di Bawah
                        </p>
                    </div>
                    <form id="contact" name="contact" method="post" class="text-left">
                        <fieldset>
                            <div class="wow fadeIn animated" data-wow-delay="0.3s" data-wow-duration="1.5" style="margin-top:15px;">
                                <label for="message">Pesan<span class="required">*</span></label>
                                <textarea name="message" id="message" required></textarea>
                            </div>
                            <div class="wow fadeIn animated" data-wow-delay="0.3" data-wow-duration="1.5s">
                                <input id="submit" type="submit" name="submit" value="Kirim" />
                            </div>
                        </fieldset>
                    </form>
                    <div id="success">
                        <p class="contactalert">
                            Pesan Anda Berhasil Di Kirim
                        </p>
                    </div>
                    <div id="error">
                        <p class="contactalert">
                            Something went wrong, try refreshing and submitting the form again.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection