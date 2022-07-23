@extends('layouts.main')

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
        @include('layouts.alert')
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
                        <p class="lead">

                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-box wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
                        <div class="text-left">
                            <p>
                                <img src="{{ asset('webSPP') }}/assets/img/icons/logo.png" width="" alt="logo">
                            </p>
                        </div>
                        <h3>Bina Pisikologi Indonesia</h3>
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
                <div class="col-md-4 col-sm-6">
                </div>
                <div class="col-md-8 col-sm-6">
                    <div class="service-box wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
                        <h3>Bagan Perusahaan</h3>
                        <div class="text-center">
                            <p>
                                <img src="{{ asset('webSPP') }}/assets/img/main/bagan.png">
                            </p>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<!-- Service
		================================================== -->
<section id="service" class="parallax section">
    <div class="wrapsection">
        <div class="parallax-overlay" style="background-color: #C279F1;opacity:0.9;"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Title -->
                    <div class="maintitle">
                        <h3 class="section-title"><strong>Service</strong></h3>
                        <p class="lead">

                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="service-box wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
                        <h3>Program A</h3>
                        <div class="text-left">
                            <p>
                                Diperuntukan bagi siswa SMP dan MTs kelas VII dan VIII dalam pengenalan diri terhadap kondisi psikologis terpenting yaitu inteligensi (potensial umum) atau bakat (potensial khusus) dan pola kerja siswa-siswa.
                            </p>
                            <button type="button" class="btn btn-info btn-md"><a href="#">Selengkapnya</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="service-box wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s">
                        <h3>Program B</h3>
                        <div class="text-left">
                            <p>
                                Bagi siswa SMP dan MTs kelas IX yang akan melanjutkan ke jenjang studi berikutnya. Maka diberrikan tes psikologi untuk memprediksi kelanjutan studi dan jurusan yang mungkin sebaiknya diambil di sekolah lanjutan itu.
                            </p>
                            <button type="button" class="btn btn-info btn-md"><a href="#">Selengkapnya</a></button>
                        </div>
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
                        <h3 class="section-title">Contact</h3>
                        <p class="lead">

                        </p>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="service-box wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s">
                            <h3>Contact Person</h3>
                            <div class="text-left">
                                <p><img src="{{ asset('webSPP') }}/assets/img/icons/wa_logo.png" width="20" alt="wa">+62 813 2820 8075</p>
                                <p><img src="{{ asset('webSPP') }}/assets/img/icons/wa_logo.png" width="20">+62 812 1561 037</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-6">
                        <div class="service-box wow flipInY border-1" data-wow-duration="1.5s" data-wow-delay="0.1s">
                            <h3>kirim Pertanyaan Langsung</h3>
                            <form id="contact" name="contact" method="post" class="text-left">
                                <fieldset>
                                    <div class="wow fadeIn animated border-1" data-wow-delay="0.3s" data-wow-duration="1.5" style="margin-top:15px;">
                                        <label for="email">Email<span class="required">*</span></label>
                                        <input name="email" id="email" required></input>
                                    </div>

                                    <div class="wow fadeIn animated" data-wow-delay="0.3s" data-wow-duration="1.5" style="margin-top:15px;">
                                        <label for="message">Pesan<span class="required">*</span></label>
                                        <textarea name="message" id="message" required class="border-1px"></textarea>
                                    </div>
                                    <div class="wow fadeIn animated" data-wow-delay="0.3" data-wow-duration="1.5s">
                                        <input class="btn-info" id="submit" type="submit" name="submit" value="Kirim" />
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
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