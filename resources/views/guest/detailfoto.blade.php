@extends('guest.template.master')
@section('content')
<section class="pf-details section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="inner-content">
                    <img src="{{asset('storage/'.$detail_kegiatan->gambar_kegiatan)}}" alt="#">
                    <div class="date">
                        <ul>
                            <li><span>Date :</span>{{$detail_kegiatan->created_at}}</li>
                            <li><span>By :</span> Admin IT PDAM Tirta Baluran</li>
                        </ul>
                    </div>
                    <div class="body-text">
                        <h3 style="margin-left: 40%;">{{$detail_kegiatan->judul}}</h3>
                        <p>{!!$detail_kegiatan->deskripsi!!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection