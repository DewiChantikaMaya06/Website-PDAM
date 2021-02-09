@extends('guest.template.master')
@section('content')
<section class="news-single section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="single-main">
                            <h1 class="news-title" style="margin-left: 40%">Tentang Kami</h1>
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
                                <blockquote class="overlay">
                                    <p>Download Aplikasi Terbaru Kami di Playstore</p>					
                                </blockquote>
                            </div>
                            <div class="blog-bottom">
                                <!-- Social Share -->
                                <ul class="social-share">
                                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a></li>
                                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a></li>
                                    <li class="pinterest"><a href="#"><i class="fa fa-instagram"></i><span>Instagram</span></a></li>
                                </ul>
                                <!-- Next Prev -->
                               <!--/ End Next Prev -->
                                <!--/ End Single Comments -->											
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection