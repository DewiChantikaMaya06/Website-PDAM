@extends('guest.template.master')
@section('content')
<section class="news-single section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="single-main">
                            <h1 class="news-title" style="color: #26547c;font-weight: bold; font-size:40px ; margin-left: 35%;font-family:"Heebo", sans-serif ">Tentang Kami</h1>
                            <!-- News Text -->
                            <div class="news-text">
                                <p>Kami adalah Perusahaan Daerah yang mengelola penyediaan air bersih untuk wilayah Kabupaten Situbondo. Berdiri sejak tahun 1991 hingga kini kami terus berusaha memberikan pelayanan optimal bagi masyarakat pelanggan maupun non-pelanggan.</p>
                                <div class="image-gallery">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="single-image">
                                                <img src="{{asset('guest/img/about.jpg')}}" alt="#">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="single-main">
                            <!-- News Text -->
                            <div class="news-text">
                                <h1 class="news-title" style="color: #26547c;font-weight: bold; font-size:40px ;font-family:"Heebo", sans-serif ">Apps Android Kami</h1>
                                <div class="image-gallery">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="single-image">
                                                <p>Saat ini telah tersedia aplikasi android untuk mengecek tagihan lewat smartphone yang anda gunakan dimanapun dan kapan pun. Aplikasi ini berbentuk file apk sehingga anda harus menginstall aplikasinya secara mandiri.
                                                    Anda dapat menggunakan nama atau nomor sambungan untuk mencari data pelanggan yang anda butuhkan.</p>
                                            </div>
                                            <a href="{{url('https://play.google.com/store/apps/details?id=com.it.pdamsitmobile')}}"><img src="{{('guest/img/playstore.png')}}" style="width: 50%; margin-left: 10%" alt=""></a>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="single-image">
                                                <img src="{{('guest/img/mobile.png')}}" style="width: 40%; margin-left: 25%" alt="#">
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
    </div>
</section>

@endsection