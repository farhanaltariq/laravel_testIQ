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
                    <h2>BINA PSIKOLOGI <br> INDONESIA</h2>
                    <span class="lighter">Lembaga Psikologi dan Jasa Psikologi</span>
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
                        <div class="text-center">
                            <p>
                                <img src="{{ asset('webSPP') }}/assets/img/icons/logo.png" width="200px" alt="logo">
                            </p>
                        </div>
                        <h3>Bina Psikologi Indonesia</h3>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6">
                    <div class="service-box wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
                        <h3>VISI</h3>
                        <div class="text-center">
                            <p>
                                Memiliki manfaat dan kemampuan yang optimal untuk membantu dalam
                                mengatasi berbagai persoalan psikologi baik pada tingkat individual, institusional atau kemasyarakatan
                            </p>
                        </div>
                        <br>
                        <h3>MISI</h3>
                        <div class="text-center">
                            <p>
                                Menerapkan hasil-hasil kajian dan penelitian dalam berbagai kehidupan manusia. Sosialisasi dan pemanfaatan ilmu psikologi.
                                Pelayanan psikologi bagi perorangan, masyarakat dan lembaga yang membutuhkan
                            </p>
                        </div>
                        <br>
                        <h3>KEGIATAN</h3>
                        <div class="text-left">
                            <p>
                                1. Menyelenggarakan sosialisasi pemanfaatan psikologi dalam berbagai bidang kehidupan manusia <br>
                                2. Menyelenggarakan pelatihan dalam meningkatan keterampilan menghadapi berbagai masalah psikologi bagi perorangan <br>
                                3. Menyelenggarakan layanan konsultasi psikologi bagi perorangan, masyarakat dan kelembagaan <br>
                                4. Menyelenggarakan layanan diagnosis/asesmen/tes psikologi bagi perorangan, masyarakat dan Lembaga/sekolah <br>
                                5. Menyelenggarakan penerbitan buku-buku psikologi <br>
                            </p>
                        </div>
                        <br>
                        <h3>PENGALAMAN</h3>
                        <div class="text-left">
                            <p>
                                1. Telah memberikan pelayanan/konsultasi psikologi terhadap berbagi perusahaan, untuk seleksi dan penempatan karyawan. <br>
                                2. Konsultansi perorangan dalam bidang pendidikan dan kesehatan mental. <br>
                                3. Melayani berbagai konsultasi/tes psikologi terhadap sekolah-sekolah khusus. <br>
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
                                Diperuntukan bagi siswa SMP dan MTs kelas VII dan VIII dalam pengenalan diri terhadap kondisi psikologis
                                terpenting yaitu intelegensi (potensial umum) atau bakat (potensial khusus) dan pola kerja siswa-siswa.

                            </p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#programa">
                                Selengkapnya
                            </button>


                            <!-- Modal -->
                            <div class="modal fade" id="programa" data-backdrop="" data-keyboard="false" tabindex="-1" aria-labelledby="programaLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="programaLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <h3 class="text-center">PROGRAM A</h3>
                                            <p>Bagi siswa SMP dan MTS (Madrasah Tsanawiyah) kelas VII yang sedang mengikuti proses pendidikan di SMP/MTS.
                                                Diberikan tes psikologi untuk memberi gambaran secara lebih akurat tentang belajar dan prestasi di SMP/MTS.
                                                Aspek-aspek psikologis yang diukur adalah sebagai berikut:</p>
                                            <table>
                                                <tr>
                                                    <ol type="1">
                                                        <li> <b>Inteligensi Umum</b>: kecerdasan dan kemampuan berfikir, dalam semua macam bidang kegiatan.
                                                            Tidak terkait dengan bidang tertetu. Tingginya keceradasan seseorang,
                                                            akan menunjukkan kemungkinan sukses dalam pendidikan di SLTA dan kelanjutan studi.</li>
                                                        <li><b>Kemampuan Verbal</b> : kecerdasan dan kemampuan berfikir yang terikat oleh bahasa. Ini mencakup berbagai kemampuan yang didominasi oleh unsur bahasa.</li>
                                                        <li><b>Kemampuan Non Verbal</b>: kecerdasan dan kemampuan berfikir yang tidak terikat oleh bahasa.
                                                            Mencakup semua kemampuan yang tidak ada atau sedikit unsur bahasanya, seperti menggambar dan memahami bentuk.</li>
                                                        <li><b>Abstract Reasoning</b> : kemampuan berfikir abstrak dan logika non verbal.</li>
                                                        <li><b>Kemampuan Bahasa</b> : kemampuan dasar dan penguasaan atas konsep bahasa.</li>
                                                        <li><b>Pengetahuan</b> : kemampuan dasar dalam menyerap konsep dan pengetahuan umum.</li>
                                                        <li><b>Kecepatan Kerja</b>, tipe kerja yang menyangkut kecepatan dan kegesitan dalam mengerjakan sesuatu.</li>
                                                        <li><b>Ketelitian Kerja</b>, tipe kerja yang menyangkut kecermatan dalam melakukan setiap pekerjaan.</li>

                                                    </ol>
                                                </tr>
                                            </table>
                                            <b class="text-left">Biaya program A : Rp.17.000/orang</b>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="service-box wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s">
                        <h3>Program B</h3>
                        <div class="text-left">
                            <p>
                                Bagi siswa SMP dan MTs kelas IX yang akan melanjutkan ke jenjang studi berikutnya. Maka diberikan tes psikologi
                                untuk memprediksi kelanjutan studi dan jurusan yang mungkin sebaiknya diambil di sekolah lanjutan itu.
                            </p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#programb">
                                Selengkapnya
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="programb" data-backdrop="" data-keyboard="false" tabindex="-1" aria-labelledby="programbLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="programbLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <h3 class="text-center">PROGRAM B</h3>
                                            <p>Bagi siswa SMP dan MTS (Madrasah Tsanawiyah) kelas IX yang akan mengikuti jurusan yang tersedia di SMA dan MA, atau ke SMK maka diberrikan tes psikologi untuk memprediksi kesuksesan studi pada jurusan yang mungkin sebaiknya diambil. Untuk kepentingan ini, maka akan diketahui aspek-aspek berikut ini:
                                                INTELIGENSI</p>
                                            <table>
                                                <tr>
                                                    <ol type="1">
                                                        <li><b>Inteligensi Umum</b> : kecerdasan dan kemampuan berfikir, dalam semua macam bidang kegiatan.
                                                            Tingginya keceradasan seseorang, akan menunjukkan kemungkinan sukses dalam pendidikan di SLTA dan kelanjutan studi.</li>
                                                        <li><b>Kemampuan Verbal</b> : kecerdasan dan kemampuan berfikir yang terikat oleh bahasa. Ini mencakup berbagai kemampuan yang
                                                            didominasi oleh unsur bahasa.</li>
                                                        <li><b>Kemampuan Non Verbal</b>: kecerdasan dan kemampuan berfikir yang tidak terikat oleh bahasa. Mencakup semua kemampuan
                                                            yang tidak ada atau sedikit unsur bahasanya, seperti menggambar dan memahami bentuk.</li>
                                                        <li><b>Numerical Ability</b> : kemampuan dasar dalam operasi hitung dan tata bilangan.</li>
                                                        <li><b>Kemampuan Bahasa</b> : kemampuan dasar dan penguasaan atas konsep bahasa.</li>
                                                        <li><b>Pengetahuan</b> : kemampuan dasar dalam menterap konsep dan masalah sosial.</li>
                                                        <li><b>Abstract Reasoning</b> : kemampuann berfikir abstrak dan logika bentuk.</li>
                                                        <li><b>Mechanical Reasoning</b>: pemahaman dasar atas konsep-konsep teknik, fisika dan mekanika.</li>
                                                        <li><b>Pandang Ruang</b>: kemampuan dalam mempersepsi ruang.dan design (rancang bangun).
                                                            BAKAT</li>
                                                        <li>Kemampuan potensial (bakat) mempelajari ilmu-ilmu dalam IPA atau MIA</li>
                                                        <li>Kemampuan potensial (bakat) mempelajari ilmu-ilmu dalam IPS atau IIS</li>
                                                        <li>Kemampuan potensial (bakat) mempelajari ilmu-ilmu Bahasa.
                                                            POLA AKTIVITAS</li>
                                                        <li>Kecepatan Kerja, dan Ketelitian Kerja MINAT JURUSAN</li>
                                                        <li>IPS atau IIS, IPA atau MIA, Bahasa</li>
                                                    </ol>
                                                </tr>
                                            </table>
                                            <b class="text-left">Biaya program B : Rp.20.000/orang</b>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="service-box wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
                        <h3>Program C</h3>
                        <div class="text-left">
                            <p>
                                Diperuntukan bagi siswa SMP dan MTs kelas VII dan VIII dalam pengenalan diri terhadap kondisi psikologis
                                terpenting yaitu intelegensi (potensial umum) atau bakat (potensial khusus) dan pola kerja siswa-siswa.

                            </p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#programa">
                                Selengkapnya
                            </button>


                            <!-- Modal -->
                            <div class="modal fade" id="programa" data-backdrop="" data-keyboard="false" tabindex="-1" aria-labelledby="programaLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="programaLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <h3 class="text-center">PROGRAM A</h3>
                                            <p>Bagi siswa SMP dan MTS (Madrasah Tsanawiyah) kelas VII yang sedang mengikuti proses pendidikan di SMP/MTS.
                                                Diberikan tes psikologi untuk memberi gambaran secara lebih akurat tentang belajar dan prestasi di SMP/MTS.
                                                Aspek-aspek psikologis yang diukur adalah sebagai berikut:</p>
                                            <table>
                                                <tr>
                                                    <ol type="1">
                                                        <li> <b>Inteligensi Umum</b>: kecerdasan dan kemampuan berfikir, dalam semua macam bidang kegiatan.
                                                            Tidak terkait dengan bidang tertetu. Tingginya keceradasan seseorang,
                                                            akan menunjukkan kemungkinan sukses dalam pendidikan di SLTA dan kelanjutan studi.</li>
                                                        <li><b>Kemampuan Verbal</b> : kecerdasan dan kemampuan berfikir yang terikat oleh bahasa. Ini mencakup berbagai kemampuan yang didominasi oleh unsur bahasa.</li>
                                                        <li><b>Kemampuan Non Verbal</b>: kecerdasan dan kemampuan berfikir yang tidak terikat oleh bahasa.
                                                            Mencakup semua kemampuan yang tidak ada atau sedikit unsur bahasanya, seperti menggambar dan memahami bentuk.</li>
                                                        <li><b>Abstract Reasoning</b> : kemampuan berfikir abstrak dan logika non verbal.</li>
                                                        <li><b>Kemampuan Bahasa</b> : kemampuan dasar dan penguasaan atas konsep bahasa.</li>
                                                        <li><b>Pengetahuan</b> : kemampuan dasar dalam menyerap konsep dan pengetahuan umum.</li>
                                                        <li><b>Kecepatan Kerja</b>, tipe kerja yang menyangkut kecepatan dan kegesitan dalam mengerjakan sesuatu.</li>
                                                        <li><b>Ketelitian Kerja</b>, tipe kerja yang menyangkut kecermatan dalam melakukan setiap pekerjaan.</li>

                                                    </ol>
                                                </tr>
                                            </table>
                                            <b class="text-left">Biaya program A : Rp.17.000/orang</b>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="service-box wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s">
                        <h3>Program B</h3>
                        <div class="text-left">
                            <p>
                                Bagi siswa SMP dan MTs kelas IX yang akan melanjutkan ke jenjang studi berikutnya. Maka diberikan tes psikologi
                                untuk memprediksi kelanjutan studi dan jurusan yang mungkin sebaiknya diambil di sekolah lanjutan itu.
                            </p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#programb">
                                Selengkapnya
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="programb" data-backdrop="" data-keyboard="false" tabindex="-1" aria-labelledby="programbLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="programbLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <h3 class="text-center">PROGRAM B</h3>
                                            <p>Bagi siswa SMP dan MTS (Madrasah Tsanawiyah) kelas IX yang akan mengikuti jurusan yang tersedia di SMA dan MA, atau ke SMK maka diberrikan tes psikologi untuk memprediksi kesuksesan studi pada jurusan yang mungkin sebaiknya diambil. Untuk kepentingan ini, maka akan diketahui aspek-aspek berikut ini:
                                                INTELIGENSI</p>
                                            <table>
                                                <tr>
                                                    <ol type="1">
                                                        <li><b>Inteligensi Umum</b> : kecerdasan dan kemampuan berfikir, dalam semua macam bidang kegiatan.
                                                            Tingginya keceradasan seseorang, akan menunjukkan kemungkinan sukses dalam pendidikan di SLTA dan kelanjutan studi.</li>
                                                        <li><b>Kemampuan Verbal</b> : kecerdasan dan kemampuan berfikir yang terikat oleh bahasa. Ini mencakup berbagai kemampuan yang
                                                            didominasi oleh unsur bahasa.</li>
                                                        <li><b>Kemampuan Non Verbal</b>: kecerdasan dan kemampuan berfikir yang tidak terikat oleh bahasa. Mencakup semua kemampuan
                                                            yang tidak ada atau sedikit unsur bahasanya, seperti menggambar dan memahami bentuk.</li>
                                                        <li><b>Numerical Ability</b> : kemampuan dasar dalam operasi hitung dan tata bilangan.</li>
                                                        <li><b>Kemampuan Bahasa</b> : kemampuan dasar dan penguasaan atas konsep bahasa.</li>
                                                        <li><b>Pengetahuan</b> : kemampuan dasar dalam menterap konsep dan masalah sosial.</li>
                                                        <li><b>Abstract Reasoning</b> : kemampuann berfikir abstrak dan logika bentuk.</li>
                                                        <li><b>Mechanical Reasoning</b>: pemahaman dasar atas konsep-konsep teknik, fisika dan mekanika.</li>
                                                        <li><b>Pandang Ruang</b>: kemampuan dalam mempersepsi ruang.dan design (rancang bangun).
                                                            BAKAT</li>
                                                        <li>Kemampuan potensial (bakat) mempelajari ilmu-ilmu dalam IPA atau MIA</li>
                                                        <li>Kemampuan potensial (bakat) mempelajari ilmu-ilmu dalam IPS atau IIS</li>
                                                        <li>Kemampuan potensial (bakat) mempelajari ilmu-ilmu Bahasa.
                                                            POLA AKTIVITAS</li>
                                                        <li>Kecepatan Kerja, dan Ketelitian Kerja MINAT JURUSAN</li>
                                                        <li>IPS atau IIS, IPA atau MIA, Bahasa</li>
                                                    </ol>
                                                </tr>
                                            </table>
                                            <b class="text-left">Biaya program B : Rp.20.000/orang</b>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
                        <div class="contact-box wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s">
                            <h3>Contact Person</h3>
                            <div class="text-left">
                                <a href="https://api.whatsapp.com/send?phone= +62 813 2820 8075 &text=Hai, Saya tertarik dengan layanan Anda." target="_blank">
                                    <i class="fa fa-whatsapp"> &nbsp; +62 813 2820 8075</i>
                                </a><br>
                                <a href="https://api.whatsapp.com/send?phone= +62 812 1561 037 &text=Hai, Saya tertarik dengan layanan Anda." target="_blank">
                                    <i class="fa fa-whatsapp"> &nbsp; +62 812 1561 037</i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-6">
                        <div class="contact-box wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s">
                            <h3>Kirim Pertanyaan Langsung</h3>
                            <form id="contact" name="contact" method="post" class="text-left">
                                <fieldset>
                                    <div class="wow fadeIn animated" data-wow-delay="0.3s" data-wow-duration="1.5" style="margin-top:15px;">
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
                            Ada yang salah, mohon lengkapi
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection