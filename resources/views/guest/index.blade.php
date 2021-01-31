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
                            <h1>PDAM Tirta Baluran <br><span>Pelayananan</span> adalah<span> KUNCI UTAMA kami</span></h1>
                            <p>Pelayanan kepada masyarakat merupakan kunci utama kami dalam mengembangankan kualitas PDAM Kabupaten Situbondo</p>
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
                            <h1>We Provide <span>Medical</span> Services That You Can <span>Trust!</span></h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl pellentesque, faucibus libero eu, gravida quam. </p>
                            <div class="button">
                                <a href="#" class="btn">Get Appointment</a>
                                <a href="#" class="btn primary">About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start End Slider -->
        <!-- Start Single Slider -->
        <div class="single-slider" style="background-image:url('guest/img/slider3.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="text">
                            <h1>We Provide <span>Medical</span> Services That You Can <span>Trust!</span></h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl pellentesque, faucibus libero eu, gravida quam. </p>
                            <div class="button">
                                <a href="#" class="btn">Get Appointment</a>
                                <a href="#" class="btn primary">Conatct Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slider -->
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

<!-- Start Feautes -->
{{-- <section class="Feautes section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>We Are Always Ready to Help You & Your Family</h2>
                    <img src="guest/img/section-img.png" alt="#">
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-12">
                <!-- Start Single features -->
                <div class="single-features">
                    <div class="signle-icon">
                        <i class="icofont icofont-ambulance-cross"></i>
                    </div>
                    <h3>Emergency Help</h3>
                    <p>Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.</p>
                </div>
                <!-- End Single features -->
            </div>
            <div class="col-lg-4 col-12">
                <!-- Start Single features -->
                <div class="single-features">
                    <div class="signle-icon">
                        <i class="icofont icofont-medical-sign-alt"></i>
                    </div>
                    <h3>Enriched Pharmecy</h3>
                    <p>Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.</p>
                </div>
                <!-- End Single features -->
            </div>
            <div class="col-lg-4 col-12">
                <!-- Start Single features -->
                <div class="single-features last">
                    <div class="signle-icon">
                        <i class="icofont icofont-stethoscope"></i>
                    </div>
                    <h3>Medical Treatment</h3>
                    <p>Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.</p>
                </div>
                <!-- End Single features -->
            </div>
        </div>
    </div>
</section> --}}
<!--/ End Feautes -->

<!-- Start Fun-facts -->
<div id="fun-facts" class="fun-facts section overlay">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Fun -->
                <div class="single-fun">
                    <i class="icofont icofont-home"></i>
                    <div class="content">
                        <span class="counter">3468</span>
                        <p>Hospital Rooms</p>
                    </div>
                </div>
                <!-- End Single Fun -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Fun -->
                <div class="single-fun">
                    <i class="icofont icofont-user-alt-3"></i>
                    <div class="content">
                        <span class="counter">557</span>
                        <p>Specialist Doctors</p>
                    </div>
                </div>
                <!-- End Single Fun -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Fun -->
                <div class="single-fun">
                    <i class="icofont-simple-smile"></i>
                    <div class="content">
                        <span class="counter">4379</span>
                        <p>Happy Patients</p>
                    </div>
                </div>
                <!-- End Single Fun -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Fun -->
                <div class="single-fun">
                    <i class="icofont icofont-table"></i>
                    <div class="content">
                        <span class="counter">32</span>
                        <p>Years of Experience</p>
                    </div>
                </div>
                <!-- End Single Fun -->
            </div>
        </div>
    </div>
</div>
<!--/ End Fun-facts -->

<!-- Start Why choose -->
<section class="why-choose section" >
    <div class="container">
        {{-- <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>We Offer Different Services To Improve Your Health</h2>
                    <img src="guest/img/section-img.png" alt="#">
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                </div>
            </div>
        </div> --}}
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
                                <li><i class="fa fa-caret-right"></i>Air Bersih</li>
                                <li><i class="fa fa-caret-right"></i>Mengalir dari sumbernya</li>
                                <li><i class="fa fa-caret-right"></i>Terpercaya</li>
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
                    <h2>Do you need Emergency Medical Care? Call @ 1234 56789</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porttitor dictum turpis nec gravida.</p>
                    <div class="button">
                        <a href="#" class="btn">Contact Now</a>
                        <a href="#" class="btn second">Learn More<i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Call to action -->

<!-- Start portfolio -->
<section class="portfolio section" >
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
                    <div class="single-pf">
                        <img src="{{asset('guest/img/pf1.jpg')}}" alt="#">
                        <a href="portfolio-details.html" class="btn">View Details</a>
                    </div>
                    <div class="single-pf">
                        <img src="{{asset('guest/img/pf2.jpg')}}" alt="#">
                        <a href="portfolio-details.html" class="btn">View Details</a>
                    </div>
                    <div class="single-pf">
                        <img src="{{asset('guest/img/pf3.jpg')}}" alt="#">
                        <a href="portfolio-details.html" class="btn">View Details</a>
                    </div>
                    <div class="single-pf">
                        <img src="{{asset('guest/img/pf4.jpg')}}" alt="#">
                        <a href="portfolio-details.html" class="btn">View Details</a>
                    </div>
                    <div class="single-pf">
                        <img src="{{asset('guest/img/pf1.jpg')}}" alt="#">
                        <a href="portfolio-details.html" class="btn">View Details</a>
                    </div>
                    <div class="single-pf">
                        <img src="{{asset('guest/img/pf2.jpg')}}" alt="#">
                        <a href="portfolio-details.html" class="btn">View Details</a>
                    </div>
                    <div class="single-pf">
                        <img src="{{asset('guest/img/pf3.jpg')}}" alt="#">
                        <a href="portfolio-details.html" class="btn">View Details</a>
                    </div>
                    <div class="single-pf">
                        <img src="{{asset('guest/img/pf4.jpg')}}" alt="#">
                        <a href="portfolio-details.html" class="btn">View Details</a>
                    </div>
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
                            <tr class="table100-head " >
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
                                <tr>
                                    <td class="column1">2017-09-29 01:22</td>
                                    <td class="column6">A</td>
                                    <td class="column2">200398</td>
                                    <td class="column3">iPhone X 64Gb Grey</td>
                                    <td class="column4">$999.00</td>
                                    <td class="column5">1</td>
                                    <td class="column6">$999.00</td>
                                </tr>
                                <tr>
                                    <td class="column1">2017-09-29 01:22</td>
                                    <td class="column6">A</td>
                                    <td class="column2">200398</td>
                                    <td class="column3">iPhone X 64Gb Grey</td>
                                    <td class="column4">$999.00</td>
                                    <td class="column5">1</td>
                                    <td class="column6">$999.00</td>
                                </tr>                                        
                        </tbody>
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
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                    <div class="news-head">
                        <img src="guest/img/blog1.jpg" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div class="date">22 Aug, 2020</div>
                            <h2><a href="blog-single.html">We have annnocuced our new product.</a></h2>
                            <p class="text">Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod tempor incididunt sed do incididunt sed.</p>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                    <div class="news-head">
                        <img src="guest/img/blog2.jpg" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div class="date">15 Jul, 2020</div>
                            <h2><a href="blog-single.html">Top five way for solving teeth problems.</a></h2>
                            <p class="text">Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod tempor incididunt sed do incididunt sed.</p>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                    <div class="news-head">
                        <img src="guest/img/blog3.jpg" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div class="date">05 Jan, 2020</div>
                            <h2><a href="blog-single.html">We provide highly business soliutions.</a></h2>
                            <p class="text">Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod tempor incididunt sed do incididunt sed.</p>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
            </div>
        </div>
    </div>
</section>
<!-- End Blog Area -->

<!-- Start Appointment -->
<!-- End Appointment -->

<!-- Start Newsletter Area -->
<section class="newsletter section">
    <div class="container">
        <div class="row ">
            <div class="col-lg-6  col-12">
                <!-- Start Newsletter Form -->
                <div class="subscribe-text ">
                    <h6>Sign up for newsletter</h6>
                    <p class="">Cu qui soleat partiendo urbanitas. Eum aperiri indoctum eu,<br> homero alterum.</p>
                </div>
                <!-- End Newsletter Form -->
            </div>
            <div class="col-lg-6  col-12">
                <!-- Start Newsletter Form -->
                <div class="subscribe-form ">
                    <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                        <input name="EMAIL" placeholder="Your email address" class="common-input" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Your email address'" required="" type="email">
                        <button class="btn">Subscribe</button>
                    </form>
                </div>
                <!-- End Newsletter Form -->
            </div>
        </div>
    </div>
</section>
@endsection