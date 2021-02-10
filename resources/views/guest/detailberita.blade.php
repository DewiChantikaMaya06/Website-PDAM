@extends('guest.template.master')
@section('content')

<!-- Single News -->
<section class="news-single section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="single-main">
                            <!-- News Head -->
                            <div class="news-head">
                                <img src="{{asset('storage/'.$detail_berita->gambar_berita)}}" alt="#">
                            </div>
                            <!-- News Title -->
                            <h1 class="news-title"><a href="#">{{$detail_berita->judul}}</a></h1>
                            <!-- Meta -->
                            <div class="meta">
                                <div class="meta-left">
                                    <span class="author"><a href="#"><img src="{{asset('guest/img/www.png')}}" alt="#">{{$detail_berita->sumber}}</a></span>
                                    <span class="date"><i class="fa fa-clock-o"></i>{{$detail_berita->created_at}}</span>
                                </div>
                            </div>
                            <!-- News Text -->
                            <div class="news-text">
                                <blockquote class="overlay">
                                    <p>{!!$detail_berita->isi_berita!!}</p>
                                </blockquote>
                            </div>

                            <div class="blog-bottom">
                                <!-- Social Share -->
                                <ul class="social-share">
                                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a></li>
                                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a></li>
                                    <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                                <!-- Next Prev -->
                                <ul class="prev-next">
                                    <li class=""><a href="{{url('/')}}"><i class="fa fa-angle-double-left">Back</i></a></li>
                                </ul>
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
<!--/ End Single News -->
@endsection