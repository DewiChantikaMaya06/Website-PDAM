@extends('guest.template.master')
@section('content')

<!-- Single News -->
<section class="news-single section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="single-main">
                            <!-- News Head -->
                            <div class="news-head">
                                <img src="{{asset('storage/'.$detail_berita->gambar_berita)}}" alt="#">
                            </div>
                            <!-- News Title -->
                            <div class="news-text">
                                <blockquote class="overlay">
                                    <p>{{$detail_berita->judul}}</p>
                                </blockquote>
                            </div>
                            <!-- Meta -->
                            <div class="meta">
                                <div class="meta-left">
                                    <span class="author"><a href="#"><img src="{{asset('guest/img/www.png')}}" alt="#">{{$detail_berita->sumber}}</a></span>
                                    <span class="date"><i class="fa fa-clock-o"></i>{{$detail_berita->created_at}}</span>
                                </div>
                            </div>
                            <!-- News Text -->
                            <div class="news-text">
                                <p>{!!$detail_berita->isi_berita!!}</p>
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
            <div class="col-lg-4 col-12">
                <div class="main-sidebar">
                    <div class="single-widget recent-post">
                        <h3 class="title">Berita Terbaru Lainnya</h3>
                        @foreach($data_berita as $dt)
                        <div class="single-post">
                            <div class="image">
                                <img src="{{asset('storage/'.$dt->gambar_berita)}}">
                            </div>
                            <div class="content">
                                <h5><a href="{{url('/detailberita/'.$dt->id)}}">{{$dt->judul}}</a></h5>
                                <ul class="comment">
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i>{{$dt->created_at}}</li>
                                </ul>
                            </div>
                        </div>
                        @endforeach
                        <div class="pull-left">
                            Showing
                            {{ $data_berita->firstItem() }}
                            to
                            {{ $data_berita->lastItem() }}
                            of
                            {{ $data_berita->total() }}
                            entries
                        </div>
                        <div class="pull-up">
                            {{ $data_berita->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Single News -->
@endsection