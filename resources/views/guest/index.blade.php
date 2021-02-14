@extends('guest.template.master')
@section('content')
@extends('guest.tabel')
<section class="slider">
    <div class="hero-slider">
        <!-- Start Single Slider -->
        <div class="single-slider" style="background-image:url('guest/img/slider2.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="text">
                            <h1>Selamat Datang <br><span>Website PDAM</span><span> Tirta Baluran Situbondo</span></h1>
                            <h2><span><b> Silahkan Cek Tagihan Anda..</b></span></h2>
                            <form class="form" method="post" action="{{'/cek_tagihan/'}}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-16 col-md-16 col-16">
                                        <div class="form-group ">
                                            <input name="no_pelanggan" type="number" placeholder="No.Pelanggan..." >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5 col-md-6 col-12">
                                        <div class="form-group">
                                            <div class="button">
                                                <button type="submit" class="btn">Cek Tagihan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slider -->
        <!-- Start Single Slider -->
        <div class="single-slider" style="background-image:url('guest/img/slider.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="text">
                            <h1>PDAM Tirta Baluran <br><span>Pelayananan</span> adalah<span> KUNCI UTAMA kami</span></h1>
                            <p>Pelayanan kepada masyarakat merupakan kunci utama kami dalam mengembangankan kualitas PDAM Kabupaten Situbondo</p>
                            <br>
                            <form class="form" method="post" action="{{'/cek_tagihan/'}}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-16 col-md-16 col-16">
                                        <div class="form-group ">
                                            <input name="no_pelanggan" type="number" placeholder="No.Pelanggan...">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5 col-md-6 col-12">
                                        <div class="form-group">
                                            <div class="button">
                                                <button type="submit" class="btn">Cek Tagihan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start End Slider -->
    </div>
</section>
<!--/ End Slider Area -->

<!-- Start Schedule Area -->
<section class="schedule">
    <div class="container">
        <div class="schedule-inner">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <!-- single-schedule -->
                    <div class="single-schedule last">
                        <div class="inner">
                            <div class="icon">
                                <i class="icofont-ui-clock"></i>
                            </div>
                            <div class="single-content">
                                <span>Jam buka</span>
                                <h4>Jam buka pelayanan :</h4>
                                <ul class="time-sidual">
                                    <li class="day">Senin-Kamis<span>07.15 - 13.15</span></li>
                                    <li class="day">Jumat <span>07.15 - 10.45</span></li>
                                    <li class="day">Sabtu <span>07.15 - 12.15</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/End Start schedule Area -->

<!-- Start Fun-facts -->
<div id="fun-facts" class="fun-facts section overlay">
    <div class="container">
        <div class="row">
            @foreach($data_info as $dt)
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Fun -->
                <div class="single-fun">
                    <i class="icofont icofont-home"></i>
                    <div class="content">
                        <span class="counter">{{$dt->pegawai}}</span>
                        <p>UNIT</p>
                    </div>
                </div>
                <!-- End Single Fun -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Fun -->
                <div class="single-fun">
                    <i class="icofont icofont-user-alt-3"></i>
                    <div class="content">
                        <span class="counter">{{$dt->pegawai}}</span>
                        <p>PEGAWAI</p>
                    </div>
                </div>
                <!-- End Single Fun -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Fun -->
                <div class="single-fun">
                    <i class="icofont-simple-smile"></i>
                    <div class="content">
                        <span class="counter">{{$dt->pengguna}}</span>
                        <p>PELANGGAN</p>
                    </div>
                </div>
                <!-- End Single Fun -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Fun -->
                <div class="single-fun">
                    <i class="icofont icofont-table"></i>
                    <div class="content">
                        <span class="counter">1991</span>
                        <p>TAHUN BERDIRI</p>
                    </div>
                </div>
                <!-- End Single Fun -->
            </div>
            @endforeach
        </div>
    </div>
</div>
<!--/ End Fun-facts -->

<!-- Start Why choose -->
<section class="why-choose section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <!-- Start Choose Left -->
                <div class="choose-left">
                    <h3>TENTANG KAMI</h3>
                    <p>Selamat datang di website resmi PDAM Kabupaten Situbondo yang merupakan wujud kesungguhan kami dalam membangun komunikasi yang interaktif dengan masyarakat Situbondo guna meningkatkan kualitas pelayanan dan penyediaan air minum bersih di daerah Kabupaten Situbondo. Kami adalah Perusahaan Daerah yang mengelola penyediaan air bersih untuk wilayah Kabupaten Situbondo. Berdiri sejak tahun 1991 hingga kini kami terus berusaha memberikan pelayanan optimal bagi masyarakat pelanggan maupun non-pelanggan.
                        Kami menyadari website PDAM Kabupaten Situbondo ini masih banyak kekurangan yang perlu dibenahi, untuk itu kami berharap saran dan kritik dari para pengunjung website. Terima kasih, semoga website PDAM Kabupaten Situbondo ini memberikan manfaat bagi semua.</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list">
                                <li><i class="fa fa-caret-right"></i>Sumber Air Bersih dan Dalam</li>
                                <li><i class="fa fa-caret-right"></i>Air Lebih Sehat Dibanding Sumur Bor Dangkal atau Sumur Resapan</li>
                                <li><i class="fa fa-caret-right"></i>Pelayanan Optimal dan Fast Response</li>
                                <li><i class="fa fa-caret-right"></i>Tekanan dan Debit Air yang Sangat Deras</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Choose Left -->
            </div>
            <div class="col-lg-6 col-12">
                <!-- Start Choose Rights -->
                <div class="choose-right">
                    <div class="video-image">
                        <!-- Video Animation -->
                        <div class="promo-video">
                            <div class="waves-block">
                                <div class="waves wave-1"></div>
                                <div class="waves wave-2"></div>
                                <div class="waves wave-3"></div>
                            </div>
                        </div>
                        <!--/ End Video Animation -->
                        <a href="{{url('https://www.youtube.com/watch?v=q-SKcbvL2FM')}}" class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>
                    </div>
                </div>
                <!-- End Choose Rights -->
            </div>
        </div>
    </div>
</section>
<!--/ End Why choose -->

<!-- Start Call to action -->
<section class="call-action overlay" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="content">
                    <h2>Anda butuh bantuan ? <br> Hubungi (0338) 672 022</h2>
                    <p>Apabila anda membutuhkan bantuan terkait PDAM silahkan hubungi nomer diatas atau klik direct WhatsApp dibawah ini.</p>
                    <div class="button">
                        <a href="{{url('https://wa.me/628113491444')}}" class="btn">Klik Disini <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Call to action -->

<!-- Start portfolio -->
<section class="portfolio section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Galeri Kegiatan PDAM</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="owl-carousel portfolio-slider">
                    @foreach($data_kegiatan as $dt)
                    <div class="single-pf">
                        <img src="{{asset('storage/'.$dt->gambar_kegiatan)}}" alt="#" style="height: 220px;">
                        <a href="{{url('detailfoto/'.$dt->id)}}" class="btn">View Details</a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End portfolio -->

<!-- Pricing Table -->
<section class="pricing-table section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Klasifikasi Tarif</h2>
                    <p>Berikut adalah daftar tarif minum tahun 2020 PDAM Tirta Baluran. Berdasarkan keputusan Bupati Situbondo Nomor 188/409/P/004.2/2019</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="wrap-table100">
                <div class="table100">
                    <table>
                        <thead>
                            <tr class="table100-head ">
                                <th class="column1" rowspan="2">Klasifikasi Tarif</th>
                                <th class="column6" rowspan="2">Kelompok</th>
                                <th class="column6" colspan="2">Pemakaian</th>
                                <th class="column6" colspan="3">Biaya</th>
                            </tr>
                            <tr class="table100-head bg-primary">
                                <th class="column1">0-10 m³</th>
                                <th class="column2">> 0-10 m³</th>
                                <th class="column5">Pemeliharaan </th>
                                <th class="column4">Admin</th>
                                <th class="column6">Denda</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data_tarif as $dt)
                            <tr>
                                <td class="column1">{{$dt->klasifikasi}}</td>
                                <td class="column6">{{$dt->kelompok}}</td>
                                <td class="column2">{{$dt->pemakaian1}}</td>
                                <td class="column3">{{$dt->pemakaian2}}</td>
                                <td class="column4">{{$dt->pemeliharaan}}</td>
                                <td class="column5">{{$dt->admin}}</td>
                                <td class="column6">{{$dt->denda}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot class="table100-foot">
                            <tr class="table100-head bg-secondary" bgcolor="#979797">
                                <td class="column1" style="color: rgb(255, 255, 255)">Non Komersial</td>
                                <td class="column6" style="color: rgb(255, 255, 255)">E1</td>
                                <td class="column2" rowspan="2" colspan="5" style="color: rgb(255, 255, 255)">
                                    <center> Besaran Tarif Berdasarkan Kesepakatan Bersama antara PDAM dan Pihak Pelanggan </center>
                                </td>
                            </tr>
                            <tr class="table100-head bg-secondary" bgcolor="#979797">
                                <td class="column1" style="color: white">Komersial</td>
                                <td class="column6" style="color: #ffffff">E2</td>
                            </tr>
                            <tr class="table100-head bg-primary">
                                <td class="column6" colspan="7" style="color: white">ADMINISTRASI/BUKA SEGEL : Rp. 25.000</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Pricing Table -->



<!-- Start Blog Area -->
<section class="blog section" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Berita Terkini PDAM</h2>
                    <p>Berita terkini yang dapat anda ikuti mengenai PDAM</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-12">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="w3-content w3-display-container">
                            @foreach($data_berita as $dt)
                            <div class="mySlides">
                                <div class="single-news">
                                    <div class="news-head">
                                        <img src="{{asset('storage/'.$dt->gambar_berita)}}" style="width:100%">
                                    </div>
                                    <div class="news-body">
                                        <div class="news-content">
                                            <h1 class="text-black"><strong>{{$dt->judul}}</strong></h1>
                                            <div class="date">{{$dt->created_at}}</div>
                                            <p>{{str_limit(strip_tags(html_entity_decode($dt->isi_berita)), 200, '.....')}}<a href="{{url('detailberita/'.$dt->id)}}" class="btn-sm bg-primary text-white">Lanjutkan baca >></a></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- End Blog Area -->

<section class="why-choose section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <!-- Start Choose Left -->
                <div class="choose-left">
                    <h3>INFO SMS CENTER</h3>
                    <p>Anda dapat mengirimkan pesan singkat untuk melihat tagihan air anda ataupun melaporkan keluhan maupun saran anda. Untuk format SMS yang digunakan adalah sebagai berikut:</p>
                    <div class="row">
                        <div class="col-lg-10">
                            <ul class="list">
                                <li><i class="fa fa-caret-right"></i>Untuk Pengecekan Tagihan :</li>
                                <p> &#8226;&#8226;&#8226; Bagi pelanggan Telkomsel ketik pdamsit#tagihan#nomor pelanggan. <br> Contoh format sms <font style="color: red">pdamsit#tagihan#01000001. Kirim sms ke 9009.</font> <br> &#8226;&#8226;&#8226; Untuk pelanggan non Telkomsel ketik tagihan#nomor pelanggan. <br>
                                    <font style="color: red">Contoh tagihan#01000001. Kirim sms ke 08113491444.</font>
                                </p>
                                <li><i class="fa fa-caret-right"></i>Untuk Keluhan & Saran :</li>
                                <p>&#8226;&#8226;&#8226; Bagi pelanggan Telkomsel ketik pdamsit#layanan#isi pesan. Contoh <br>
                                    <font style="color: red">pdamsit#layanan#Air Macet di jl. PB Sudirman. Kirim sms ke 9009.</font> <br>&#8226;&#8226;&#8226; Untuk pelanggan non Telkomsel ketik layanan#isi Pesan. <font style="color: red">Contoh layanan#Air Macet di jl. PB Sudirman. Kirim sms ke 08113491444.</font>
                                </p>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Choose Left -->
            </div>
            <div class="col-lg-6 col-12">
                <!-- Start Choose Rights -->
                <div class="video-image">
                    <img src="{{asset('guest/img/message.png')}}" alt="">
                </div>
                <!-- End Choose Rights -->
            </div>
        </div>
    </div>
</section>
<!--/ End Why choose -->
@endsection