<div class="preloader">
    <div class="loader">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>

        <div class="indicator">
            <a href=""><img src="{{asset('storage/logo_pdam.png')}}" alt=""></a>
        </div>
    </div>
</div>
<header class="header">
    <div class="header-inner">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="logo">
                            <a href="index.html"><img src="{{asset('storage/logo_pdam2.png')}}" alt="#"></a>
                        </div>
                        <div class="mobile-nav"></div>
                    </div>
                    <div class="col-lg-7 col-md-9 col-12">
                        <div class="main-menu">
                            <nav class="navigation">
                                <ul class="nav menu">
                                    <li class="active"><a href="{{url('/')}}">BERANDA</a></li>
                                    <li><a href="#">PELANGGAN</a>
                                        <ul class="dropdown">
                                            <li><a href="{{url('/')}}">CEK TAGIHAN</a></li>
                                            <li><a href="{{url('/pendaftaran')}}">PENDAFTARAN BARU</a></li>
                                            <li><a href="{{url('/baliknama')}}">PENDAFTARAN BALIK NAMA</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{url('/struktur')}}">STRUKTUR</a>
                                    </li>
                                    <li><a href="#">TENTANG KAMI</a></li>
                                    <li><a href="{{url('/pengaduan')}}">PENGADUAN</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-2 col-12">
                        <div class="get-quote">
                            <a href="/login" class="btn">MASUK</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>